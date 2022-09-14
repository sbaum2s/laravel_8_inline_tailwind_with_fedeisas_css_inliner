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
    $mailContent = new \App\Mail\StatisticsMail("This is a headline");

    $emailsTo = "your-email@youraddress.com";
    Mail::to($emailsTo)->send($mailContent);
});
