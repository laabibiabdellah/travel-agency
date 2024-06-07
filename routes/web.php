<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HotelBookingController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PackController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\Admin\UserController;
use App\Models\Hotel;
use App\Models\Pack;
use Illuminate\Support\Facades\Route;




Route::resource('admin-hotel', HotelController::class);
Route::resource('admin-pack', PackController::class);

Route::resource('register', RegisterController::class);
Route::resource('hotels', HotelBookingController::class);



// ======================================================
// ======================================================

Route::get('login', [LoginController::class, 'login'])
    ->name('login');
// ->middleware('guest');
Route::post('login', [LoginController::class, 'handle'])->name('handle');
// ->middleware('guest');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// ->middleware('auth');



// ======================================================
// ======================================================


// --------------------------------------------
// START NAVBAR PART
Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/hotels', function () {
    $hotels = Hotel::all();
    return view('hotel', compact('hotels'));
})->name('hotels');
Route::get('/packages', function () {
    $packages = Pack::all();
    return view('package', compact('packages'));
})->name('packages');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/login', function () {
    return view('login');
})->name('login');
// Route::get('/register', function () {
//     return view('register');
// })->name('register');

//------- START PAGES PART
Route::get('/destination', function () {
    return view('destination');
})->name('destination');
// Route::get('/booking', function () {
//     return view('booking');
// })->name('booking');
//------- END PAGES PART
// END NAVBAR PART
// --------------------------------------------

Route::get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
Route::get('/dashboard/settings', function () {
    return view('admin.settings');
})->name('settings');



Route::fallback(function () {
    return view('not-found');
});






// // START NAVBAR PART
// Route::controller(Controller::class)->group(function () {
//     $routes = [
//         '/' => 'home',
//         '/services' => 'about',
//         '/products' => 'services',
//         '/packages' => 'packages',
//         '/contact' => 'contact',
//         '/destination' => 'destination',
//         '/booking' => 'booking',
//         '/travel-guides' => 'travelGuides',
//         '/testimonial' => 'testimonial',
//     ];

//     foreach ($routes as $path => $method) {
//         Route::get($path, $method)->name($method);
//     }
// });
// // END NAVBAR PART