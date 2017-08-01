<?php

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
    return redirect('/anak');
});
// Route::get('/orangtua', function(){
// 	$or = App\Orangtua::all();
// 	foreach ($or as $data){
// 		echo $data->nama_ibu." dengan ".$data->nama_ayah." ";
// 		foreach ($data->anak as $key) {
// 			echo "<li>$key->nama</li><br>";
// 		}
// 	}
// });

// Route::get('/percobaan', 'MyController@index');
// Route::get('/tampilan', 'MyController@tampilan');
// Route::get('/ortu', 'MyController@tampilmodel');

Route::resource('orangtua', 'OrangTuaController');
Route::resource('anak', 'AnakController');

Auth::routes();