<?php

use App\Models\Poop;
use Illuminate\Support\Facades\Cache;
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
    return view('hello', [
        'count' => Cache::remember(
            'poops_count',
            now()->addMinutes(10), 
            fn () => Poop::count()
        ),
    ]);
});

// X // model - means data in a database | means what/how the poop is
// controller - organizes visual content and database data | getting the data and giving it to the view
// view - means the visual representation of content given to the user (browser) | displaying the data regarding poops

Route::post('/', function (\Illuminate\Http\Request $request) {
    Poop::create();
    Cache::increment('poops_count');
    return redirect('/');
});