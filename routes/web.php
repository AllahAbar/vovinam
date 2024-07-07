<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;



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
    return view('welcome');
});

// Route::get('/db', function () {
//     $laydb = DB::table('table_user')->where('id', 1 )->first();

//     if($laydb)
//     {
//         return response()->json($laydb);
//     }
//     else{
//         return "no";
//     }
// });

Route::get('/db', function () {
    return view('truyvan');
});

Route::delete('/ins', function () {
    DB::table('table_atg_members')->insert([
        'username' => 'mrHuy',
        'password' => '11111',
    ]);
});

Route::get('/delete', function () {
    DB::table('table_atg_members')->where('username', 'mrHuy')->delete();
});



Route::get('/upd', function () {
    DB::table('table_atg_members')->where('username', 'John Doe')->update([
        'username' => 'dung khoai',
    ]);
});

Route::get('/laythu', [UserController::class, 'show']);

Route::post('pos', [UserController::class, 'index']);

Route::post('hello', function(){
    return 'hello';
});