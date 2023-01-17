<?php

use App\Http\Controllers\AtractionController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PackageController;
use App\Models\Atraction;
use App\Models\AtractionCategory;
use App\Models\event;
use App\Models\Package;
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

Route::prefix('atractions')->group(function () {
    Route::get('/', [AtractionController::class, 'index']);
    Route::get('categories', [AtractionController::class, 'getByCategories']);
    Route::get('{atraction:id}', function (Atraction $atraction) {
        return $atraction->load('atraction_galleries');
    });
});

Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index']);
    Route::get('{event:id}', function (Event $event) {
        return $event->load('event_gallery');
    });
});

Route::prefix('packages')->group(function () {
    Route::get('/', [PackageController::class, 'index']);
    Route::get('{package:id}', function (Package $package) {
        $data =  [
            'package' => $package->load('package_galleries', 'package_facilities'),
            'title' => 'Detail Package'
        ];
        return view('detail_package', $data);
    });
});


// Route::get('atractions/{categories}',function(Atraction $atraction){
//     return $categories->load('atraction_categories')->where('atraction_categories.category','')
// });
