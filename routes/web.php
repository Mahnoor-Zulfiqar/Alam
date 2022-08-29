<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OAuthController;
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


Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/contact-us',[ContactController::class,'saveContact'])->name('contact_us');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/blog/{slug}',[HomeController::class,'blog_detail'])->name('blog_detail');
Route::get('/education/{slug}',[HomeController::class,'course_detail'])->name('course_detail');
Route::get('/gettoken',[OAuthController::class,'course_detail'])->name('generate_token');
Route::post('/gettoken',[OAuthController::class,'course_detail'])->name('token_success');
Route::post('/send',[MailController::class,'sendmail'])->name('subscribe');
Route::post('/email-contact',[MailController::class,'email_contact'])->name('email_contact');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

