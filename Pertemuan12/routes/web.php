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


Route::redirect('/', '/table', 301);
Route::get('/table', function () {
    return view('admin', [
        'page' => "Table Page",
        'title' => "table"
    ]);
});
Route::get('/data-table', function () {
    return view('pages.datatables', [
        'page' => "DataTables Page",
        'title' => "data-table"
    ]);
});
