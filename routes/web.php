<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\TestMail;
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


Route::get('/create/{lang}', function ($lang) {
    App::setLocale($lang);
    return view('create');
});

// Route::view('create','create');

Route::get('/send', function () {
    Mail::to('pandatommo70@gmail.com')->send(new TestMail($request->user_name));
    return response('sending');
});

Route::resource('students', StudentController::class);