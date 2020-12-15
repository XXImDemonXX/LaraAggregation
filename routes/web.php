<?php
use App\Http\Controllers\MainController;
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
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
//Operatins Section
Route::get('/product-list', [MainController::class,'Operations'])->name('product.operation');
//Insert Records
Route::post('/index', [MainController::class, 'insertProduct'])->name('insert.product');
//Product Listing
Route::get('/product-list', [MainController::class, 'productList'])->name('product.list');

