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

Route::group(['namespace' => 'api','middleware'=>['auth:api'] ], function () {
    Route::post("update/account",'userController@update_account');
    Route::post("get/account",'userController@account');
    Route::post("register/order",'orderController@register_order');
    Route::post("generate/invoice",'orderController@generateInvoice');
    Route::post("get/invoices",'orderController@getInvoices');
    Route::post("get/workers/invoice",'orderController@getWorkersInvoice');
    Route::post("register/order/delete/worker",'orderController@order_delete_worker');
    Route::post("worker/rate",'userController@rateWorker');
    Route::post("get/worker/details",'workerController@getWorkerDetails');
    Route::post("add/comment/worker",'workerController@addCommentWorker');
});
Route::group(['namespace' => 'api'], function () {
    Route::get("get/stations",'workerController@stations');
    Route::post("get/workers/in/station",'workerController@workers_in_station');
});

Route::group(['namespace' => 'api'], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::post('login', 'userController@login');
        Route::post('verify', 'userController@verify');
    });
});
