<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WebsiteController;
use App\Models\Business;
use Illuminate\Support\Facades\Auth;
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

// website
Route::get('/', [WebsiteController::class, 'index'])->name('website');
Route::post('/', [WebsiteController::class, 'index'])->name('website');
Route::get('/about-us', [WebsiteController::class, 'aboutus'])->name('aboutus');
Route::get('/contact-us', [WebsiteController::class, 'contactus'])->name('contactus');

Route::get('/our-business', [WebsiteController::class, 'ourbusiness'])->name('ourbusiness');
Route::get('/business-portfolio/{business_id}', [BusinessController::class, 'business_portfolio'])->name('businessportfolio');

Route::post('/send-email', [EmailController::class, 'index'])->name('send-email');


// translation
Route::get('lang/change', [LocalizationController::class, 'change'])->name('changeLang');

// website Admin
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/website', [ProfileController::class, 'website'])->name('website.edit');
    Route::put('/website', [ProfileController::class, 'updatewebsite'])->name('website.update');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/view-slider', [SliderController::class,'index'])->name('slider.show');
    Route::get('/add-slider', [SliderController::class,'createslider'])->name('slider.create');
    Route::post('/add-slider', [SliderController::class,'storeslider'])->name('slider.store');
    Route::get('/add-slider/{slider_id}', [SliderController::class,'editslider'])->name('slider.edit');
    Route::put('/add-slider/{slider_id}', [SliderController::class,'updateslider'])->name('slider.update');
    Route::get('/delete-slider/{slider_id}', [SliderController::class,'destroyslider'])->name('slider.delete');

    Route::get('/view-team', [TeamController::class,'index'])->name('team.show');
    Route::get('/add-team', [TeamController::class,'createteam'])->name('team.create');
    Route::post('/add-team', [TeamController::class,'storeteam'])->name('team.store');
    Route::get('/add-team/{team_id}', [TeamController::class,'editteam'])->name('team.edit');
    Route::put('/add-team/{team_id}', [TeamController::class,'updateteam'])->name('team.update');
    Route::get('/delete-team/{team_id}', [TeamController::class,'destroyteam'])->name('team.delete');

    Route::get('/view-business', [BusinessController::class,'index'])->name('business.show');
    Route::get('/add-business', [BusinessController::class,'createbusiness'])->name('business.create');
    Route::post('/add-business', [BusinessController::class,'storebusiness'])->name('business.store');
    Route::get('/add-business/{business_id}', [BusinessController::class,'editbusiness'])->name('business.edit');
    Route::put('/add-business/{business_id}', [BusinessController::class,'updatebusiness'])->name('business.update');
    Route::get('/delete-business/{business_id}', [BusinessController::class,'destroybusiness'])->name('business.delete');
    Route::get('/status-business/{business_id}', [BusinessController::class,'statusbusiness'])->name('business.status');

    // Edit en.json
    Route::get('/translation-edit', [LocalizationController::class, 'view'])->name('translation.edit');
    Route::post('/translation-edit', [LocalizationController::class, 'edit'])->name('translation.edit');

});
