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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'admin'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::post('/login', 'Auth\LoginController@authenticate')->name("admin.login");
        Route::get('/login', 'Auth\LoginController@showLoginForm');

    });
});
Route::group(['namespace' => 'admin'], function () {
    Route::group(['prefix' => 'admin'/*, 'middleware' => ['auth', \App\Http\Middleware\AuthAdmin::class]*/], function () {
        Route::get('/dashboard', 'dashboardController@index');
        //worker manager
        Route::get('/add/worker', 'workerController@add_worker_view');
        Route::post('/add/worker', 'workerController@add_worker');
        Route::get('/delete/worker/{id}', 'workerController@delete_worker');
        Route::get('/update/worker/{id}', 'workerController@update_worker_view');
        Route::post('/update/worker', 'workerController@update_worker');
        //station manager
        Route::get('/add/station', 'workerController@add_station_view');
        Route::get('/update/station/{id}', 'workerController@update_station_view');
        Route::post('/add/station', 'workerController@add_station');
        // workers & stations list report
        Route::get('/stations', 'workerController@stations');
        Route::get('/workers', 'workerController@workers');
        // workers & families
        Route::get('/worker/manage/families/{w_id}', 'FamilyController@index');
        Route::get('/worker/manage/families/{w_id}/{id}', 'FamilyController@indexUpdate');
        Route::post('/worker/manage/families', 'FamilyController@register');
        // workers & learns
        Route::get('/worker/manage/learns/{w_id}', 'LearnController@index');
        Route::get('/worker/manage/learns/{w_id}/{id}', 'LearnController@indexUpdate');
        Route::post('/worker/manage/learns', 'LearnController@register');
        // workers & resumes
        Route::get('/worker/manage/resumes/{w_id}', 'ResumeController@index');
        Route::get('/worker/manage/resumes/{w_id}/{id}', 'ResumeController@indexUpdate');
        Route::post('/worker/manage/resumes', 'ResumeController@register');
        // workers & skills
        Route::get('/worker/manage/skills/{w_id}', 'SkillController@index');
        Route::get('/worker/delete/skills/{id}', 'SkillController@indexDelete');
        Route::post('/worker/manage/skills', 'SkillController@register');
        //
        Route::get('/workers/station/{sid}', 'workerController@workers_in_station');
        // skillLists
        Route::get('/skillLists', 'SkillListController@skill_lists');
        Route::post('/add/skillList', 'SkillListController@add_skill_list');
        Route::get('/update/skillList/{id}', 'SkillListController@update_skill_list_view');
        Route::post('/update/skillList', 'SkillListController@update_skill_list');
        // invoices
        Route::get('/invoices', 'ReportController@invoices');
        Route::get('/paid/invoices', 'ReportController@invoicesPaid');
        Route::get('/unpaid/invoices', 'ReportController@invoicesUnpaid');
        Route::get('/show/invoice/{id}', 'ReportController@showInvoice');
        // orders
        Route::get('/orders', 'ReportController@orders');
        Route::get('/posted/orders', 'ReportController@ordersPosted');
        Route::get('/unposted/orders', 'ReportController@ordersUnposted');
        Route::get('/show/order/{id}', 'ReportController@showOrder');
        Route::get('/delete/order/{id}', 'ReportController@orderDelete');
        // requests
        Route::get('/requests', 'RequestController@requests');
        Route::get('/request/requests', 'RequestController@request');
        Route::get('/noRequest/requests', 'RequestController@noRequest');
        //
        Route::get('/worker/manage/requests/{id}', 'RequestController@requestWorker');
        Route::post('/worker/manage/requests/post/{id}', 'RequestController@totalPrice');
//        Route::get('/worker/requestWorker/{id}', 'RequestController@requestWorker');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
