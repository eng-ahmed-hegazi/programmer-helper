<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('categories', 'CategoriesController@apiCategories')->name('api.categories');
Route::get('languages', 'LanguagesController@apiLanguages')->name('api.languages');
Route::get('types', 'TypesController@apiTypes')->name('api.types');
Route::get('resources', 'ResourcesController@apiResource')->name('api.resources');
//Route::get('articles', 'ArticlesController@apiArticles')->name('api.articles');
Route::get('tags', 'TagsController@apiTags')->name('api.tags');
Route::get('interviews', 'InterviewsController@apiInterviews')->name('api.interviews');
Route::get('articles', 'ArticlesController@apiArticles')->name('api.articles');
Route::get('users', 'UsersController@apiUsers')->name('api.users');
