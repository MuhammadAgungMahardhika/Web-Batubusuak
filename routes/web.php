<?php

use App\Http\Controllers\AccomodationController;
use App\Http\Controllers\AtractionController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProductController;
use App\Models\Atraction;
use App\Models\AtractionCategory;
use App\Models\event;
use App\Models\Package;
use App\Models\Product;
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
    return view('index', ['title' => 'Batubusuak']);
});

Route::prefix('atractions')->controller(AtractionController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('category', 'getByCategories');
    Route::get('{atraction:id}', function (Atraction $atraction) {
        return $atraction->load('atraction_gallery');
    });
});

Route::prefix('events')->controller(EventController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('{event:id}', function (Event $event) {
        return $event->load('event_gallery');
    });
});

Route::prefix('packages')->controller(PackageController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('{package:id}', function (Package $package) {
        $data =  [
            'package' => $package->load('package_gallery', 'package_facility'),
            'title' => 'Detail Package'
        ];
        return view('detail_package', $data);
    });
});
Route::prefix('products')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('{category}', 'getByCategory');
    Route::get('{product:id}', function (Product $product) {
        return $product->load('product_gallery');
    });
});
Route::prefix('accomodation')->controller(AccomodationController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('{category}', 'getByCategory');
    Route::get('{product:id}', function (Product $product) {
        return $product->load('product_gallery');
    });
});


// Route::get('atractions/{categories}',function(Atraction $atraction){
//     return $categories->load('atraction_categories')->where('atraction_categories.category','')
// });
