<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
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


Route::get('/', HomeComponent::class); 

Route::get('/shop', ShopComponent::class);

Route::get('/cart', CartComponent::class)->name('product.cart');

Route::Get('/checkout', CheckoutComponent::class);

Route::get('/product/{product_id}', DetailsComponent::class)->name('product.details');



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/user/dashboard', App\Http\Livewire\User\UserDashboardComponent::class)->name(('user.dashboard'));
});


Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function (){
    Route::get('/admin/dashboard', App\Http\Livewire\Admin\AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/category', App\Http\Livewire\Admin\AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add', App\Http\Livewire\Admin\AdminAddCategory::class)->name('admin.add.category');
    Route::get('/admin/category/edit/{category_id}', App\Http\Livewire\Admin\AdminEditCategory::class)->name('admin.edit.category');
});