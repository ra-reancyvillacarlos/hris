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

Route::get('/', function () {
    return view('layout.index1');
});

Route::get('/viewpayroll', function () {
    return view('layout.payroll_ViewPayroll');
});

Route::get('/payrollsummaryreport', function () {
    return view('layout.payroll_PayrollSummaryReport');
});

Route::get('/generatepayrolls', function () {
    return view('layout.payroll_GeneratePayrolls');
});

