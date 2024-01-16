<?php

use Illuminate\Support\Facades\Route;
use App\Models\smartphone;

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

Route::get('/smartphone', function () {
    return view('smartphone');
});

Route::post('/smartphone', function () {
    smartphone::create([
        'name' => request('NamePhone'),
        'price' => request('PricePhone'),
        'color' => request('ColorPhone'),
    ]);

    return redirect('/smartphone');

    // $data = new smartphone();
    // $data->name = request('NamePhone');
    // $data->price = request('PricePhone');
    // $data->color = request('ColorPhone');
    // $data->save();
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
