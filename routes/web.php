<?php
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'prevent-back-history'],function(){

    Auth::routes(['register'=>false,'login'=>false,'logout'=>false]);

    // Route::get('/',function(){
    //     return redirect()->route('admin.dashboard');
    // })->name('index');

});

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('about', [FrontController::class, 'about'])->name('about');
Route::get('contact', [FrontController::class, 'contact'])->name('contact');
Route::get('services' , [FrontController::class, 'services'])->name('services');
Route::get('scrap_rate', [FrontController::class, 'scrap_rate'])->name('scrap_rate');
Route::get('sell_scrap', [FrontController::class, 'sell_scrap'])->name('sell_scrap');
Route::post('enquiry', [FrontController::class, 'enquiry_store'])->name('enquiry.store');
Route::post('contact', [FrontController::class, 'contact_store'])->name('contact.store');
