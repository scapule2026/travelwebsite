<?php
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/wonderhoy', function () {
    return view('package');
});

Auth::routes();


Route::get('/order', [OrderController::class, 'order']);
Route::resource('r', OrderController::class);
Route::get('/r/{r}/delete', [OrderController::class, 'destroy'])->name('r.delete');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/one', [App\Http\Controllers\HomeController::class, 'index1'])->name('one');
Route::get('/two', [App\Http\Controllers\HomeController::class, 'index2'])->name('two');
Route::get('/three', [App\Http\Controllers\HomeController::class, 'index3'])->name('three');
Route::get('/four', [App\Http\Controllers\HomeController::class, 'index4'])->name('four');
Route::get('/five', [App\Http\Controllers\HomeController::class, 'index5'])->name('five');
Route::get('/six', [App\Http\Controllers\HomeController::class, 'index6'])->name('six');
Route::get('/seven', [App\Http\Controllers\HomeController::class, 'index7'])->name('seven');
Route::get('/eight', [App\Http\Controllers\HomeController::class, 'index8'])->name('eight');
Route::get('/nine', [App\Http\Controllers\HomeController::class, 'index9'])->name('nine');
Route::get('/ten', [App\Http\Controllers\HomeController::class, 'index10'])->name('ten');
Route::get('/order', [App\Http\Controllers\HomeController::class, 'index11'])->name('order');

