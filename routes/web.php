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
Route::name('index.')->group( function(){
    Route::get('/index','Index\IndexController@index')->name('index1');
    Route::get('/','Index\IndexController@index')->name('index2');
    Route::get('/index.html','Index\IndexController@index')->name('index3');
    Route::get('/index.php','Index\IndexController@index')->name('index4');
});
Route::get('/article/{id}', 'Index\ArticleController@info')->name('article.info');
/*
 * 接口
 * */

Route::get('/api/article/list', 'Home\ApiController@articleList')->name('article.list');
Route::post('/api/article/editArticle', 'Home\ApiController@editArticle')->name('article.editArticle');
Route::post('/api/article/addArticle', 'Home\ApiController@addArticle')->name('article.addArticle');
/*
 * 后台路由
 *
 *
 *
 * */
Route::name('shovain.')->group( function(){
    Route::get('/shovain','Home\IndexController@index')->name('admin1');
    Route::get('/shovain/index','Home\IndexController@index')->name('admin2');
    Route::get('/shovain/index.html','Home\IndexController@index')->name('admin3');
    Route::get('/shovain/index.php','Home\IndexController@index')->name('admin4');
});
Route::get('/shovain/article/list', 'Home\ArticleController@lists');
Route::get('shovain/article/info', 'Home\ArticleController@info')->name('shovain.article.info');
Route::get('shovain/article/adds', 'Home\ArticleController@adds')->name('shovain.article.adds');
Route::get('/shovain/welcome','Home\IndexController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
