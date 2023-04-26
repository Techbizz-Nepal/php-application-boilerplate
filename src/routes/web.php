<?php

use Illuminate\Support\Facades\Route;
use Techbizz\ProductModule\ProductModuleDMLServiceFacade;

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
    return [ProductModuleDMLServiceFacade::getAbstractProducts(perPage: 10), ProductModuleDMLServiceFacade::getAbstractProductVariants(10)];

    return view('welcome');
});
