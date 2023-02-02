<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('setToken', [App\Http\Controllers\Auth\AjaxController::class, 'setToken'])->name('setToken');
Auth::routes();
/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('welcome');*/
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users');
Route::get('/restaurants', [App\Http\Controllers\RestaurantController::class, 'index'])->name('restaurants');
Route::get('/restaurants/edit/{id}', [App\Http\Controllers\RestaurantController::class, 'edit'])->name('restaurants.edit');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/users/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::get('/users/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');

Route::get('/categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');

Route::get('/drivers', [App\Http\Controllers\DriverController::class, 'index'])->name('drivers');
Route::get('/drivers/edit/{id}', [App\Http\Controllers\DriverController::class, 'edit'])->name('drivers.edit');


Route::get('/foods', [App\Http\Controllers\FoodController::class, 'index'])->name('foods');
Route::get('/foods/edit/{id}', [App\Http\Controllers\FoodController::class, 'edit'])->name('foods.edit');
Route::get('/foods/create', [App\Http\Controllers\FoodController::class, 'create'])->name('foods.create');

Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders');
Route::get('/orders/edit/{id}', [App\Http\Controllers\OrderController::class, 'edit'])->name('orders.edit');
Route::get('/placedOrders', [App\Http\Controllers\OrderController::class, 'placedOrders'])->name('placedOrders');
// Route::get('/placedOrders/edit/{id}', [App\Http\Controllers\PlacedOrdersController::class, 'edit'])->name('placedOrders.edit');
Route::get('/acceptedOrders', [App\Http\Controllers\OrderController::class, 'acceptedOrders'])->name('acceptedOrders');
// Route::get('/acceptedOrders/edit/{id}', [App\Http\Controllers\AcceptedOrdersController::class, 'edit'])->name('acceptedOrders.edit');
Route::get('/rejectedOrders', [App\Http\Controllers\OrderController::class, 'rejectedOrders'])->name('rejectedOrders');
// Route::get('/rejectedOrders/edit/{id}', [App\Http\Controllers\RejectedOrdersController::class, 'edit'])->name('rejectedOrders.edit');
Route::get('/orderReview', [App\Http\Controllers\OrderReviewController::class, 'index'])->name('orderReview');
Route::get('/orderReview/edit/{id}', [App\Http\Controllers\OrderReviewController::class, 'edit'])->name('orderReview.edit');


Route::get('/payments', [App\Http\Controllers\PayoutsController::class, 'index'])->name('payments');
Route::get('/payments/edit/{id}', [App\Http\Controllers\PaymentController::class, 'edit'])->name('payments.edit');
Route::get('/earnings', [App\Http\Controllers\EarningController::class, 'index'])->name('earnings');
Route::get('/earnings/edit/{id}', [App\Http\Controllers\EarningController::class, 'edit'])->name('earnings.edit');

Route::get('/coupons', [App\Http\Controllers\CouponController::class, 'index'])->name('coupons');
Route::get('/coupons/edit/{id}', [App\Http\Controllers\CouponController::class, 'edit'])->name('coupons.edit');
Route::get('/coupons/create', [App\Http\Controllers\CouponController::class, 'create'])->name('coupons.create');
Route::post('order-status-notification', [App\Http\Controllers\OrderController::class, 'sendNotification'])->name('order-status-notification');
Route::post('/sendnotification', [App\Http\Controllers\BookTableController::class, 'sendnotification'])->name('sendnotification');

Route::get('/booktable', [App\Http\Controllers\BookTableController::class, 'index'])->name('booktable');
Route::get('/booktable/edit/{id}', [App\Http\Controllers\BookTableController::class, 'edit'])->name('booktable.edit');