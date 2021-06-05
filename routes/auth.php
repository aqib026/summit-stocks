<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\leadController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::get('/invest-better-with-summit-stocks', [RegisteredUserController::class, 'create_leads'])
                // ->middleware('guest')
                ->name('invest-better-with-summit-stocks');

Route::get('/thanks/{id}', [RegisteredUserController::class, 'thanks'])
                // ->middleware('guest')
                ->name('thanks');
                
Route::post('/update_experience', [RegisteredUserController::class, 'update_experience'])
                // ->middleware('guest')
                ->name('update_experience');


Route::get('/leads', [leadController::class, 'index'])
                ->middleware(['auth', 'verified'])
                ->name('leads');

// Route::post('/leads', [leadController::class, 'Search'])
//                 ->middleware(['auth', 'verified'])
//                 ->name('leads');

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



Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

Route::post('/leads/save', [RegisteredUserController::class, 'save_lead']);
                // ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
