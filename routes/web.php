<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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

// Route::get('/', function () {
//     return view('pages.intro');
// });

// Route::get('/game', function () {
//     return view('pages.game');
// });

// Route::get('/win', function () {
//     return view('pages.win');
// });
// Route::get('/form', function () {
//     return view('pages.form');
// });



Route::middleware(['auth:sanctum', 'verified'])
->group(function () {

    
    Route::get('/', function () {
        $user = User::where('id', 1)->first();
        if($user->is_played == 1){
            return view('pages.intro1');
        } else {
            return view('pages.intro');
        }
    });
    Route::get('/game', function () {
        return view('pages.game');
    });

    Route::get('/win', function () {
        return view('pages.win');
    });
    Route::get('/form', function () {
        return view('pages.form');
    });
    Route::get('/171094-feedback', function () {
        return view('pages.feedback');
    });

});



