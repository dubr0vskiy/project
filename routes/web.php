<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Upload;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/add-user', [UserController::class, 'insertRecord']);
Route::get('/get-data/{id}', [UserController::class, 'fetchdata']);

Route::get('/project', function(){
   return view('project');
});
Route::get('/project', [SiteController::class, 'project'])->name('project');
Route::get('/about_us', [SiteController::class, 'about_us'])->name('about_us');
Route::get('/works', [SiteController::class, 'works'])->name('works');
Route::get('/company', [SiteController::class, 'company'])->name('company');
Route::get('/contacts', [SiteController::class, 'contact'])->name('contact');

Route::post('/contact', [ClientsController::class, 'store'])->name('store');
Route::post('/upload', [Upload::class, 'upload'])->name('upload');
//localization with switches
Route::get('lang/{lang}', function($locale){
    session()->put('locale', $locale);
    return Redirect()->back();
});