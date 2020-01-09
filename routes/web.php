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
Route::get('change-lang','LandingPageController@changeLanguage');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'admin'],function(){

    route::get('/admin',function (){
        return view('admin.index');
    });

    route::get('admin/student/{id}',['as'=>'student.show','uses'=>'StudentsController@stu']);

    Route::resource('/admin/users','AdminUsersController',['names'=>[
        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'edit'=>'admin.users.edit'
    ]]);

    route::resource('/admin/students','StudentsController',['name'=>[
        'index' =>'admin.student.index',
        'create'=>'admin.student.create',
        'edit'=>'admin.student.edit',
        //'details'=>'admin.student.details'
    ]]);

    route::resource('/admin/students/details','StudentDetailsController',['name'=>[

        'create'=>'admin.student.details',
        'edit'=>'admin.student.edit',
        'show'=>'admin.student.show',
        //'details'=>'admin.student.details'
    ]]);

//Route::get('admin/students/{id}/details','StudentsController@details')->name('admin.student.details');

//match(['put', 'patch'], '/company/update/{id}','CompanyMasterController@update')


    route::resource('/admin/lecturer','LecturerController',['name'=>[
        'index'=>'admin.lecturers.index',
    ]]);

    route::resource('/admin/subjects','SubjectsController',['name'=>[
        'index'=>'admin.subjects.index',
        'create'=>'admin.subjects.create',
    ]]);

    route::resource('/admin/note','AdminNoteController',['name'=>[
        'index'=>'admin.note.index',
        'create'=>'admin.note.create'
    ]]);

   // route::get('/admin/note/vue',['as'=>'admin.index','uses'=>'AdminNoteController@vue']);
    Route::get('/admin/vue', 'AdminNoteController@vue')->name('admin.note.vue');




});


/*Route::get('/public', 'LandingPageController',['name'=>[
    'index'=>'frontend.index',
    'about'=>'frontend.about-us',
    'login'=>'frontend.login'
]]);*/



route::prefix('/')->group(function (){
    Route::get('/', 'LandingPageController@index');
    Route::get('/about', 'LandingPageController@about');
    Route::get('/contact', 'LandingPageController@contact');
    Route::post('/contact', 'LandingPageController@store')->name('frontend.contact');
});

;

Route::get('/logout', 'HomeController@logout');
//route::post('/admin/students','SubjectsController@Subject');

//Route::get('/', function () {
//    return view('frontend.index');
//});
//
//
//Route::get('/about', function () {
//    return view('frontend.about-us');
//});
//Route::get('/contact', function () {
//    return view('frontend.contact');
//});


Route::get('/home', 'HomeController@index')->name('home');



