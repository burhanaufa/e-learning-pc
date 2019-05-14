<?php
use App\Http\Controllers\MapelController;

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
  return view('welcome');
});
Auth::routes();
Route::get('/home', function() {
    if (Auth::user()->admin == 0) {
        return view('/home');
    } else {
        $users['users'] =\App\User::all();
        return view('/adminHome',$users);
    }
});

Route::prefix('siswa')->group(function(){
Route::get('/login', 'auth\SiswaLoginController@showLoginForm')->name('siswa.login');
Route::post('/login', 'auth\SiswaLoginController@login')->name('siswa.login.submit');
Route::get('/home', 'SiswaController@home')->name('siswa.dashboard');
Route::get('/logout', 'auth\SiswaLoginController@logout')->name('siswa.logout');
});

Route::prefix('guru')->group(function(){
Route::get('/login', 'auth\GuruLoginController@showLoginForm')->name('guru.login');
Route::post('/login', 'auth\GuruLoginController@login')->name('guru.login.submit');
Route::get('/home', 'GuruController@home')->name('guru.dashboard');
Route::get('/logout', 'auth\GuruLoginController@logout')->name('guru.logout');
});

Route::resource('/guru', 'GuruController');
Route::resource('/siswa', 'SiswaController');
Route::resource('/mapel', 'MapelController');
Route::resource('/materi', 'MateriController');
Route::resource('/pertanyaan', 'PertanyaanController');
Route::resource('/jawaban', 'JawabanController');
Route::resource('/mapel_siswa', 'Mapel_SiswaController');
Route::resource('/guru_siswa', 'Guru_SiswaController');
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/dashboard', 'MapelController@Dashboard')->name('dashboard');
Route::get('/course/{id}', 'CourseController@index');
Route::get('/kuis','CourseController@kuis');


Route::get('/pdf','PdfController@convertToPDF');
