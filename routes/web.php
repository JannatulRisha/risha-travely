<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MultiImage;
use App\Http\Controllers\BookingController;

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

// Route::get('/', function () {
//     return view('frontend.index');
// })->middleware(['auth', 'verified']);

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'HomePage')->name('frontend.home');
});

// Route::controller(BookingController::class)->group(function () {
//     Route::get('/booking', 'BookingPage')->name('frontend.booking');
// });

Route::get('/dashboard', function () {
    return view('admin.admin_profile_view');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin All Routes
Route::controller(AdminController::class)->group(function () {
    Route::get('admin/profile', 'Profile')->name('admin.profile');
    Route::get('edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('store/profile', 'StoreProfile')->name('store.profile');
    Route::get('change/password', 'ChangePassword')->name('change.password');
    Route::post('update/password', 'UpdatePassword')->name('update.password');
    Route::get('admin/logout', 'Destroy')->name('admin.logout');
});

// Home Slider Routes
Route::controller(HomeSliderController::class)->group(function () {
    Route::get('/add/home/slide', 'AllHomeSlide')->name('add.home.slide');
    Route::post('/update/slide', 'UpdateHomeSlide')->name('update.home.slide');
});


// Services Routes
Route::controller(ServiceController::class)->group(function () {
    Route::get('/services', 'ServicesAll')->name('services.all');
    Route::get('/services/add', 'ServicesAdd')->name('services.add');
    Route::post('/services/update', 'Servicesupdate')->name('services.update');
});

Route::controller(PortfolioController::class)->group(function () {
    Route::get('/portfolio/all', 'PortfolioAll')->name('portfolio.all');
    Route::get('/portfolio/add', 'PortfolioAdd')->name('portfolio.add');
    Route::post('/portfolio/update', 'PortfolioUpdate')->name('portfolio.update');
    Route::get('/portfolio/multi/image', 'PortfolioMulti')->name('portfolio.multi');
    Route::post('/portfolio/store/multi/image', 'PortfolioStoreMulti')->name('portfolio.storemulti');
    Route::get('/all/multi/image', 'AllMultiImage')->name('all.multi.image');
    Route::get('/edit/multi/image/{id}', 'EditMultiImage')->name('edit.multi.image');
    Route::post('/update/multi/image', 'UpdateMultiImage')->name('update.multi.image');
    Route::get('/delete/multi/image/{id}', 'DeleteMultiImage')->name('delete.multi.image');
});

// About Routes
Route::controller(AboutController::class)->group(function () {
    Route::get('/add/about', 'AboutAdd')->name('about.add');
    Route::post('/update/about', 'AboutUpdate')->name('about.update');
});

// Bookings Routes
Route::controller(BookingController::class)->group(function () {
    Route::get('/booking/all', 'BookingAll')->name('bookings.all');
    Route::post('/booking/store', 'Bookingstore')->name('bookings.store');
    Route::get('/edit/booking/{id}', 'EditBooking')->name('edit.booking');
    Route::post('/booking/update', 'BookingUpdate')->name('booking.update');
    Route::get('/booking/delete/{id}', 'BookingDelete')->name('booking.delete');
});


// Contact Routes
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact/all', 'ContactAll')->name('contact.all');

    Route::post('/store/message', 'StoreMessage')->name('store.message');
    Route::get('/contact/message', 'ContactMessage')->name('contact.message');   
    Route::get('/delete/message/{id}', 'DeleteMessage')->name('delete.message'); 
});
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



require __DIR__.'/auth.php';
