<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Home\bookController;
use App\Http\Controllers\Home\EventController;
use App\Http\Controllers\Home\ItemController;
use App\Http\Controllers\Home\UserController;
use App\Http\Controllers\User\EventReservationController;
use App\Http\Controllers\User\FoundItemController;
use App\Http\Controllers\User\LostItemController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/password/reset', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
    Route::get('/password/change', [PasswordController::class, 'edit'])->name('password.change');
    Route::put('/password/change', [PasswordController::class, 'update'])->name('password.update');

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'admin'], function () {
        Route::resource('book_categories', 'BookCategoryController');
        Route::resource('users', 'UserController');
        Route::resource('books', 'BookController');
    });
    Route::group(['prefix' => 'bde', 'as' => 'bde.', 'namespace' => 'App\Http\Controllers\Bde'], function () {
        Route::resource('events', 'EventController');
        Route::resource('event-reservations', 'EventReservationController');
    });

    Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'App\Http\Controllers\User'], function () {
        Route::get('/profile', 'ProfileController@index')->name('profile');
        Route::post('/avatar', [ProfileController::class, 'updateAvatar'])->name('update.avatar');
        Route::post('/description', [ProfileController::class, 'updateDescription'])->name('update.description');
        Route::post('/birthdate', [ProfileController::class, 'updateBirthDate'])->name('update.birthdate');
        Route::post('/gender', [ProfileController::class, 'updateGender'])->name('update.gender');
        Route::post('/address', [ProfileController::class, 'updateAddress'])->name('update.address');
        Route::post('/phone', [ProfileController::class, 'updatePhone'])->name('update.phone');

        Route::resource('books', 'BookController');
        Route::resource('exchanges', 'ExchangeController');
        Route::get('/incoming-requests', 'ExchangeController@incomingRequests')->name('exchanges.incomingRequests');
        Route::get('/outgoing-requests', 'ExchangeController@outgoingRequests')->name('exchanges.outgoingRequests');
        Route::put('/exchanges/{exchange}', 'ExchangeController@updateStatus')->name('exchanges.updateStatus');
        Route::post('/events/{event}/reserve', [EventReservationController::class, 'reserve'])->name('events.reserve');
        Route::get('/reservations', [EventReservationController::class, 'showReservations'])->name('reservations');


        Route::get('/lost-items/create', 'ItemController@createLostItem')->name('createLostItem');
        Route::get('/found-items/create', 'ItemController@createFoundItem')->name('createFoundItem');
        Route::post('/lost-items', 'ItemController@storeLostItem')->name('storeLostItem');
        Route::post('found-items', 'ItemController@storeFoundItem')->name('storeFoundItem');
        Route::post('/items/{item}/report-ownership', [ItemController::class, 'reportOwnership'])->name('items.report_ownership');
        Route::get('/items/{item}/report-finding', [ItemController::class, 'reportFindingForm'])->name('items.report_finding_form');
        Route::post('/items/{item}/report-finding', [ItemController::class, 'reportFinding'])->name('items.report_finding');
    });




    Route::get('/books/search', [bookController::class, 'search'])->name('books.search');
    Route::resource('/books', bookController::class);
    Route::resource('/items', ItemController::class);
    Route::resource('/events', EventController::class);
    Route::resource('/users', UserController::class);

    Route::get('/lost-items', [ItemController::class, 'lostItems'])->name('lost_items');
    Route::get('/found-items', [ItemController::class, 'foundItems'])->name('found_items');
    

});
