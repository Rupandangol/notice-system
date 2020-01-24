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

//LOGIN
Route::get('/loginPage', 'loginController@loginPage')->name('loginPage');
Route::post('/loginPage', 'loginController@loginPageAction');
Route::get('/logout', 'loginController@logout')->name('logout');

//Frontend
Route::get('/', 'frontendController@mainPage');
Route::post('/downloadAdmitCard', 'pdfController@downloadAdmitCard')->name('downloadAdmitCard');


//Backend
Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', 'backendController@dashboard')->name('dashboard');

//Admin
    Route::get('/addAdmin', 'backendController@addAdmin')->name('addAdmin');
    Route::post('/addAdmin', 'backendController@addAdminAction');
    Route::get('/manageAdmin', 'backendController@manageAdmin')->name('manageAdmin');
    Route::get('/updateAdmin/{id}', 'backendController@updateAdmin')->name('updateAdmin');
    Route::post('/updateAdmin/{id}', 'backendController@updateAdminAction');
    Route::get('/deleteAdmin/{id}', 'backendController@deleteAdmin')->name('deleteAdmin');


//Student
    Route::get('/addStudent', 'backendController@addStudent')->name('addStudent');
    Route::post('/addStudent', 'backendController@addStudentAction');
    Route::get('/manageStudent', 'backendController@manageStudent')->name('manageStudent');
    Route::get('/updateStudent/{id}', 'backendController@updateStudent')->name('updateStudent');
    Route::post('/updateStudent/{id}', 'backendController@updateStudentAction');
    Route::get('/deleteStudent/{id}', 'backendController@deleteStudent')->name('deleteStudent');

//admit card
    Route::get('/admitCard', 'backendController@admitCard')->name('admitCard');
    Route::get('/previewPdf', 'pdfController@previewPdf')->name('previewPdf');


});

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
