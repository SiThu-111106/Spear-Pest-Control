<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Form;
use App\Http\Controllers\PdfController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [PageController::class, 'about']);
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/project', [PageController::class, 'project']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/blog', [PageController::class, 'blog']);
Route::get('/member', [PageController::class, 'member']);
Route::get('/testimonial', [PageController::class, 'testimonial']);

Route::get('pdf/{order}', PdfController::class)->name('pdf');
