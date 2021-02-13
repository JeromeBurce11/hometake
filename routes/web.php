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
    return view('welcome');
});

Route::get('/faq', function () {
    return view('faq');
});
Route::get('/oclp', function () {
    return view('our-customers-loyalty-program');
});
Route::get('/pizzas', function () {
    //get data from db
    // $pizza = [
    //     'type' => 'hawaiian',
    //      'base' => 'garlic crust',
    //      'price' => 10
    //     ];
    // return view('pizzas', $pizza);
    $pizzas =[
        ['type' => 'hawaiin', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin & crispy']
    ];

    return view('pizzas',[ 'pizzas' => $pizzas]);
});
// Route::get('/pizzas', function () {
//     // return "pizza!";
//     return ['name'=>'veg pizzas','base'=>'classic'];
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
