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

Route::get('/uploaddtrfile', function () {
    return view('layout.dtr_UploadDTR');
});

Route::get('/employeedtr', function () {
    return view('layout.dtr_EmployeeDTR');
});

Route::get('/generatedtr', function () {
    return view('layout.dtr_GenerateDTR');
});

Route::get('/timelogentry', function () {
    return view('layout.TimeLogEntry');
});

Route::get('/loanentry', function () {
    return view('layout.LoanEntry');
});

Route::get('/otherearnings', function () {
    return view('layout.OtherEarnings');
});

Route::get('/apply', function () {
    return view('layout.apply');
});

