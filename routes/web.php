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

Route::get ('/', 'PublicController@index')->name('public.home');

Route::get ('/contato', 'PublicController@index');
Route::post('/contato', 'PublicController@sendMessage')->name('public.contact');

Route::get ('/noticias', 'PublicController@news')->name('public.news');
Route::get ('/noticias/{id}', 'PublicController@new')->name('public.new');

Route::get ('/historia', 'PublicController@history')->name('public.history');

Route::get ('/roteiros', 'PublicController@guides')->name('public.guides');

Route::get ('/atrativos', 'PublicController@attractives')->name('public.attractives');
Route::get ('/atrativo/{id}', 'PublicController@attractive')->name('public.attractive');
Route::post('/atrativos', 'PublicController@searchAttractives')->name('public.searchAttractives');

Route::get ('/onde-ficar', 'PublicController@ondeficar')->name('public.ondeficars');
Route::get ('/onde-ficar/{id}', 'PublicController@attractive')->name('public.ondeficar');
Route::post('/onde-ficar', 'PublicController@searchOndeficar')->name('public.searchOndeficar');

Route::get ('/onde-comer', 'PublicController@ondecomer')->name('public.ondecomers');
Route::get ('/onde-comer/{id}', 'PublicController@attractive')->name('public.ondecomer');
Route::post('/onde-comer', 'PublicController@searchOndecomer')->name('public.searchOndecomer');

Auth::routes();

Route::group(['middleware' => ['auth']], function()
{
    Route::get ('/admin', 'AdminController@index')->name('admin.home');
    Route::get ('/admin/onde-ficar', 'AdminController@ondeficar')->name('admin.ondeficar');
    Route::get ('/admin/onde-comer', 'AdminController@ondecomer')->name('admin.ondecomer');
    Route::get ('/admin/atrativos', 'AdminController@attractives')->name('admin.attractives');
    
    Route::get ('/admin/noticias', 'AdminController@news')->name('admin.news');
    Route::post('/admin/noticias', 'AdminController@newNews')->name('admin.newNews');
    
    Route::post('/admin/atrativos', 'AdminController@newAttrative')->name('admin.newAttractive');
    Route::post('/admin/onde-ficar', 'AdminController@newondeficar')->name('admin.newondeficar');
    Route::post('/admin/onde-comer', 'AdminController@newondecomer')->name('admin.newondecomer');
    
    Route::delete('/admin/atrativo', 'AdminController@delAttrative')->name('admin.delAttractive');
    Route::delete('/admin/onde-ficar', 'AdminController@delondeficar')->name('admin.delondeficar');
    Route::delete('/admin/onde-comer', 'AdminController@delondecomer')->name('admin.delondecomer');
    
    Route::post('/admin/atrativo', 'AdminController@editAttrative')->name('admin.editAttractive');
    Route::post('/admin/ondeficar', 'AdminController@editondeficar')->name('admin.editondeficar');
    Route::post('/admin/ondecomer', 'AdminController@editondecomer')->name('admin.editondecomer');
    
    Route::get('/admin/atrativo/{id}', 'AdminController@getAttrative')->name('admin.getAttrative');
    Route::get('/admin/ondeficar/{id}', 'AdminController@getondeficar')->name('admin.getondeficar');
    Route::get('/admin/ondecomer/{id}', 'AdminController@getondecomer')->name('admin.getondecomer');

    Route::get ('/admin/mensagens', 'AdminController@messages')->name('admin.messages');
    Route::post('/admin/mensagens', 'AdminController@reply')->name('admin.reply');
});