<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileCustomerController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Auth\CustomerRegisterController;
use App\Http\Controllers\Auth\LoginController;


Route::middleware('auth:customer')->group(function () {
    // beranda after login
    Route::get('/beranda', [HomeController::class, 'landpage'])->name('beranda');

    Route::get('/profile', [ProfileCustomerController::class, 'index'])->name('profile.index');
    Route::put('/profile/update', [ProfileCustomerController::class, 'update'])->name('profile.update');

    Route::get('/jasaku/index', [ServiceProviderController::class, 'index'])->name('jasaku.index');
    Route::get('/jasaku', [ServiceProviderController::class, 'showStepOne'])->name('services_providers.step_one');
    Route::post('/jasaku/step-one', [ServiceProviderController::class, 'postStepOne']);
    Route::get('/jasaku/step-two', [ServiceProviderController::class, 'showStepTwo'])->name('services_providers.step_two');
    Route::post('/jasaku/step-two', [ServiceProviderController::class, 'postStepTwo']);
    Route::get('/jasaku/step-three', [ServiceProviderController::class, 'showStepThree'])->name('services_providers.step_three');
    Route::post('/jasaku/step-three', [ServiceProviderController::class, 'postStepThree']);
    Route::get('/jasaku/complete', [ServiceProviderController::class, 'completeRegistration'])->name('services_providers.complete');

    Route::resources([
        'dashboards' => DashboardController::class,
        'searches' => SearchController::class,
    ]);

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});


Route::get('/', [HomeController::class, 'index'])->name('login');
Route::post('/login-check', [AuthController::class, 'checkPhoneNumber'])->name('login.check');
Route::post('login/authenticate', [LoginController::class, 'login'])->name('login.authenticate');
Route::post('/signup', [CustomerRegisterController::class, 'register'])->name('signup.register');



Route::resources([
    'customers' => CustomerController::class,
    // 'profiles' => ProfileCustomerController::class,
    // 'homes' => HomeController::class,
    'locations' => LocationController::class,
    // 'registrations' => RegistrationController::class,
]);

Route::get('/add-new', function () {
    return view('locations.create');
});
Route::get('/locations/{location}/edit', [LocationController::class, 'edit'])->name('locations.edit');
Route::put('/locations/{location}', [LocationController::class, 'update'])->name('locations.update');

Route::get('/carijasa', function () {
    return view('searches.searching');
});
Route::get('/carijasamap', function () {
    return view('searches.map-searching');
});
Route::get('/detailjasa', function () {
    return view('detail-jasa');
});

// auth route

// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login/check-phone', [LoginController::class, 'checkPhone'])->name('login.checkPhone');
// Route::get('login/password', [LoginController::class, 'showPasswordForm'])->name('login.showPassword');


// Route::get('/auth', [AuthController::class, 'showAuthForm'])->name('auth.show');
// Route::get('/login-password', [AuthController::class, 'showPasswordForm'])->name('login.password');
// Route::post('/login-authenticate', [AuthController::class, 'authenticate'])->name('login.authenticate');
// Route::get('/sign-up', [AuthController::class, 'showSignUpForm'])->name('sign.up');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
