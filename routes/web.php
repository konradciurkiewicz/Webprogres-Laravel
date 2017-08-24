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
Route::get('/',  'LandingController@index');

Route::get('/developers', function () {
    return view('welcome');
});

Route::group([
    'middleware' => 'roles',
    'roles' => ['World Admin','Admin', 'Moderator', 'User']
], function() {
    Route::get('page', [
        'uses' => 'PageController@index',
        'as' => 'page.index'
    ]);
    Route::get('page/addons', [
        'uses' => 'PageController@addons',
        'as' => 'page.addons'
    ]);
    Route::get('page/create', [
        'uses' => 'PageController@create',
        'as' => 'page.create'
    ]);
    Route::post('page/store', [
        'uses' => 'PageController@store',
        'as' => 'page.store'
    ]);
    Route::get('page/edit/{page}', [
        'uses' => 'PageController@edit',
        'as' => 'page.edit'
    ]);
    Route::put('page/{page}', [
        'uses' => 'PageController@update',
        'as' => 'page.update'
    ]);
    Route::delete('page/{page}', [
        'uses' => 'PageController@destroy',
        'as' => 'page.delete'
    ]);
    Route::get('/home', 'HomeController@index');

});

Auth::routes();
Route::get('/card/{slug}', 'CardController@index');

Route::get('/category/{slug}', 'CategoriesController@index');

Route::get('/credits', 'CreditsController@index');
Route::get('/rules', 'RulesController@index');
Route::get('/help', 'HelpController@index');

//Route::post('/search/store', 'SearchController@store');
Route::get('/search', 'SearchController@index');

Route::get('/ranking/wojewodztwa', 'RankController@regions');
Route::get('/ranking/wojewodztwo/{region}', 'RankController@regionlist');

Route::get('/admin/calculatePageRank', 'AdminController@calculatePageRank');

