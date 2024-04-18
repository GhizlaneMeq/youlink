<?php
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\Auth\AuthenticatedController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\Home\bookController;
use App\Http\Controllers\Home\EventController;
use App\Http\Controllers\Home\ItemController;
use App\Http\Controllers\User\EventReservationController;
use App\Http\Controllers\User\FoundItemController;
use App\Http\Controllers\User\LostItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Routes that don't require authentication
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/password/reset', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    // All routes except /login and /welcome
    Route::group(['except' => ['login', 'welcome']], function () {
        Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'admin'], function () {
            Route::resource('book_categories', 'BookCategoryController');
            Route::resource('users', 'UserController');
            Route::resource('books', 'BookController');
        });

        Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'App\Http\Controllers\User'], function () {
            Route::resource('books', 'BookController');
            Route::resource('exchanges', 'ExchangeController');
            Route::get('/incoming-requests', 'ExchangeController@incomingRequests')->name('exchanges.incomingRequests');
            Route::get('/outgoing-requests', 'ExchangeController@outgoingRequests')->name('exchanges.outgoingRequests');
            Route::put('/exchanges/{exchange}', 'ExchangeController@updateStatus')->name('exchanges.updateStatus');
            Route::post('/events/{event}/reserve', [EventReservationController::class, 'reserve'])->name('events.reserve');
            Route::get('/reservations', [EventReservationController::class, 'showReservations'])->name('reservations');
        });

        Route::group(['prefix' => 'bde', 'as' => 'bde.', 'namespace' => 'App\Http\Controllers\Bde'], function () {
            Route::resource('events', 'EventController');
            Route::resource('event-reservations', 'EventReservationController');
        });

        Route::resource('/books', bookController::class);
        Route::resource('/items', ItemController::class);
        Route::resource('/events', EventController::class);

        Route::get('/lost-items/create', [LostItemController::class, 'create'])->name('createLostItem');
        Route::post('/lost-items', [LostItemController::class, 'store'])->name('storeLostItem');
        Route::post('found-items', [FoundItemController::class, 'store'])->name('found-items.store');
        Route::post('/items/{item}/report-ownership', [ItemController::class, 'reportOwnership'])->name('items.report_ownership');
        Route::get('/items/{item}/report-finding', [ItemController::class, 'reportFindingForm'])->name('items.report_finding_form');
        Route::post('/items/{item}/report-finding', [ItemController::class, 'reportFinding'])->name('items.report_finding');
        Route::resource('events', EventController::class);
    });
});
