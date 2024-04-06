<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\Auth\AuthenticatedController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\Home\bookController;
use App\Http\Controllers\User\FoundItemController;
use App\Http\Controllers\User\LostItemController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/lost&found', function () {
    return view('lost&found.index');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/password/reset', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
/* Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/journeys', [JourneyController::class, 'index'])->name('journeys.index');
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/lost-and-found', [LostAndFoundController::class, 'index'])->name('lost-and-found.index');
 */

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin'], function () {

    Route::resource('book_categories', 'BookCategoryController');
    Route::resource('users', 'UserController');
    Route::resource('books', 'BookController');

});

Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'App\Http\Controllers\User'], function () {

    Route::resource('books', 'BookController');
    Route::resource('exchanges', 'ExchangeController');
    Route::get('/incoming-requests', 'ExchangeController@incomingRequests')->name('exchanges.incomingRequests');
    Route::get('/outgoing-requests', 'ExchangeController@outgoingRequests')->name('exchanges.outgoingRequests');
});

Route::resource('/books', bookController::class);
Route::put('/user/exchanges/{exchange}', 'App\Http\Controllers\User\ExchangeController@updateStatus')->name('user.exchanges.updateStatus');




Route::get('/lost-items/create', [LostItemController::class, 'create'])->name('createLostItem');

Route::post('/lost-items', [LostItemController::class, 'store'])->name('storeLostItem');
Route::post('found-items', [FoundItemController::class, 'store'])->name('found-items.store');









