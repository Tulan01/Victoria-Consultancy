<?php

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
/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/','HomeController@index')->name('home');

Route::get('/team','HomeController@team')->name('team');
Route::get('/about','HomeController@about')->name('about');
Route::get('/service','HomeController@service')->name('service');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/check','HomeController@check')->name('check');


//admin section

Route::get('/ad','adminController@admin')->name('admin');

//slider
Route::get('/addslider','SliderController@addslider')->name('addslider');
Route::post('/storeslider','SliderController@storeslider')->name('storeslider');
Route::get('/delete_slider{id}','SliderController@delete_slider')->name('delete_slider');
Route::get('/edit_slider{id}','SliderController@edit_slider')->name('edit_slider');
Route::post('/change_slider','SliderController@change_slider')->name('change_slider');


//country

Route::get('/addcountry','CountryController@addcountry')->name('addcountry');
Route::post('/storecountry','CountryController@storecountry')->name('storecountry');
Route::get('/delete_country{id}','CountryController@delete_country')->name('delete_country');
Route::get('/edit_country{id}','CountryController@edit_country')->name('edit_country');
Route::post('/change_country','CountryController@change_country')->name('change_country');

//course level

Route::get('/addcourselevel','CourseLevelController@addcourselevel')->name('addcourselevel');
Route::post('/storecourselevel','CourseLevelController@storecourselevel')->name('storecourselevel');
Route::get('/delete_course_level{id}','CourseLevelController@delete_course_level')->name('delete_course_level');
Route::get('/edit_course_level{id}','CourseLevelController@edit_course_level')->name('edit_course_level');
Route::post('/change_course_level','CourseLevelController@change_course_level')->name('change_course_level');


//course
Route::get('/addcourse','CourseController@addcourse')->name('addcourse');
Route::post('/storecourse','CourseController@storecourse')->name('storecourse');
Route::get('/delete_course{id}','CourseController@delete_course')->name('delete_course');
Route::get('/edit_course{id}','CourseController@edit_course')->name('edit_course');
Route::post('/change_course','CourseController@change_course')->name('change_course');

//user part
//student
Route::post('/storestudent','StudentController@storestudent')->name('storestudent');
Route::get('/delete_student{id}','StudentController@delete_student')->name('delete_student');
Route::get('/view_student{id}','StudentController@view_student')->name('view_student');
Route::get('/change_student_status{id}','StudentController@change_student_status')->name('change_student_status');
Route::post('/change_student','StudentController@change_student')->name('change_student');




//register route

Route::get('/viewregister','UserController@viewregister')->name('viewregister');
Route::get('/viewlogin','UserController@viewlogin')->name('viewlogin');
Route::get('/logout','UserController@logout')->name('logout');
Route::post('/register','UserController@register')->name('register');
Route::post('/dologin','UserController@dologin')->name('dologin');


//add team
Route::get('/addteam','TeamController@addteam')->name('addteam');
Route::post('/storeteam','TeamController@storeteam')->name('storeteam');
Route::get('/delete_team{id}','TeamController@delete_team')->name('delete_team');
Route::get('/edit_team{id}','TeamController@edit_team')->name('edit_team');
Route::post('/change_team','TeamController@change_team')->name('change_team');