<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\leadController;
use App\Http\Controllers\PostController;
use Inertia\Inertia;


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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/contact-customer-service','ContactUs@index')->name('contact-customer-service');


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard1');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test', function () {
    return Inertia::render('test');
})->middleware(['auth', 'verified'])->name('test');

require __DIR__.'/auth.php';

Route::get('/leads', [leadController::class, 'index'])
                ->middleware(['auth', 'verified'])
                ->name('leads');
Route::get('/Createlead', [leadController::class, 'create'])
                ->middleware(['auth', 'verified'])
                ->name('Createlead');
Route::post('/Createlead', [leadController::class, 'store'])
                ->middleware(['auth', 'verified'])
                ->name('Createlead');
Route::get('/lead/{id}', [leadController::class, 'edit'])
                ->middleware(['auth', 'verified'])
                ->name('lead');
Route::put('/lead/{id}', [leadController::class, 'update'])
                ->middleware(['auth', 'verified'])
                ->name('lead');
Route::delete('/lead/{id}', [leadController::class, 'destroy'])
                ->middleware(['auth', 'verified'])
                ->name('deletelead');
Route::get('/search_lead/{value}', [leadController::class, 'Search'])
                ->middleware(['auth', 'verified'])
                ->name('search_lead');


Route::get('blogs/list', 'PostController@list')->middleware(['auth', 'verified'])->name('blogs_list');
Route::get('blogs/edit/{id}', 'PostController@edit')->middleware(['auth', 'verified'])->name('blog_edit');
Route::post('blogs/update', 'PostController@update')->middleware(['auth', 'verified'])->name('blog_update');

Route::get('market-earning-activity', 'MarketController@index')->name('market-earning-activity');
Route::get('market-earning-activity/{symbol}', 'MarketController@show')->name('market-earning-activity-details');
Route::get('market-earning-activity/{symbol}/real-time', 'MarketController@realtime')->name('market-earning-activity-real-time');
Route::get('market-earning-activity/{symbol}/dividend-history', 'MarketController@dividendHistory')->name('market-earning-activity-dividend-history');
Route::get('market-earning-activity/{symbol}/historical-data', 'MarketController@historicalData')->name('market-earning-activity-historical-data');
Route::get('market-earning-activity/{symbol}/financials', 'MarketController@financials')->name('market-earning-activity-financials');
Route::get('market-earning-activity/{symbol}/news', 'MarketController@news')->name('market-earning-activity-news');
Route::get('market-earning-activity/{symbol}/press-release', 'MarketController@pressRelease')->name('market-earning-activity-press-release');


Route::get('{post_url}', 'PostController@index');
