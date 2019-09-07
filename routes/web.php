<?php

    Route::get('/', function () {
        return view('index');
    });
/*Authentication Routes*/
Auth::routes();



/*
 *
 * */
Route::group(['prefix' => 'admin','middleware' =>'admin:admin'],function (){
    /*
    |--------------------------------------------------------------------------
    | CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('categories', 'CategoriesController', ['except' => ['create']]);
    Route::resource('languages', 'LanguagesController', ['except' => ['create']]);
    Route::resource('types', 'TypesController', ['except' => ['create']]);
    Route::resource('tags', 'TagsController', ['except' => ['create']]);
    Route::resource('resources', 'ResourcesController', ['except' => ['create']]);
    Route::resource('articles', 'ArticlesController', ['except' => ['create']]);
    Route::resource('interviews', 'InterviewsController', ['except' => ['create']]);
    Route::get('users', 'UsersController@index')->name('users.index');
    Route::Delete('users/{id}', 'UsersController@destroy')->name('users.destroy');
    /*
    |--------------------------------------------------------------------------
    | Settings Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/settings','SettingsController@index')->name('settings.index');
    Route::post('/settings/update','SettingsController@update')->name('settings.update');
    Route::post('logout', 'AdminsController@logout')->name('admin.logout');
});
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('admin/login', 'AdminsController@create')->name('admin.index');
Route::post('admin/login', 'AdminsController@store')->name('admin.login');
/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' =>'auth'],function () {
    Route::get('/profile', 'FrontEndController@profilecreate')->name('profile.create');
    Route::post('/profile', 'FrontEndController@updateprofile')->name('user.profile.update');
    Route::post('/add/comment/{id}', 'FrontEndController@addComment')->name('comment.add');
    Route::post('/add/rate/{id}', 'FrontEndController@addrate')->name('rate.add');
});
/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
/*Route::get('/', 'FrontEndController@index')->name('index.index');*/
Route::get('language-{id}', 'FrontEndController@singlelanguage')->name('language.single');
Route::get('resources-{slug}', 'FrontEndController@singleresource')->name('resource.single');
Route::get('/category-{id}', 'FrontEndController@category')->name('category.single');
Route::get('/type-{id}', 'FrontEndController@type')->name('type.single');
Route::post('/results', 'FrontEndController@search')->name('search.post');
Route::get('/FQA','FrontEndController@FQA')->name('fqa');
Route::get('/contact','FrontEndController@contact')->name('contact');
Route::get('/articles','FrontEndController@articles')->name('articles.index');
/*
|--------------------------------------------------------------------------
| Wild Card Route
|--------------------------------------------------------------------------
*/
Route::get('/{path}', function (){return view('404');})->where(['path' => '.*']);
