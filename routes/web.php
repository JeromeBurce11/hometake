<?php

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
    return view('website.home');
});

Route::get('/websitehome', function () {
    return view('website.home');
});
Route::get('/faq', function () {
    return view('website.faq');
})->name('FAQ');
Route::get('/oclp', function () {
    return view('website.our-customers-loyalty-program');
});
Route::get('/vmc', function () {
    return view('website.video-music-collection');
});

Route::get('/sign-in', function () {
    return view('website.login');
});
Route::get('/sign-up', function () {
    return view('website.registration');
});
// Route::get('/pizzas', function () {
//     //get data from db
//     // $pizza = [
//     //     'type' => 'hawaiian',
//     //      'base' => 'garlic crust',
//     //      'price' => 10
//     //     ];
//     // return view('pizzas', $pizza);
//     $pizzas =[
//         ['type' => 'hawaiin', 'base' => 'cheesy crust'],
//         ['type' => 'volcano', 'base' => 'garlic crust'],
//         ['type' => 'veg supreme', 'base' => 'thin & crispy']
//     ];

//     return view('pizzas',[ 'pizzas' => $pizzas]);
// });
// Route::get('/pizzas', function () {
//     // return "pizza!";
//     return ['name'=>'veg pizzas','base'=>'classic'];
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
