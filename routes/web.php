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

Route::get('/admin', function () {
    return view('users.admin.dashboard');
})->name('admin');


Route::get('/main', 'ProfileController@suggestion')->name('main')->middleware('auth');
Route::get('/', 'ProfileController@suggestion')->name('main')->middleware('auth');


Route::resource('/departments', 'DepartmentController');
Route::get('/treatmenthistory/{doctor}', 'DoctorController@treatmentHistory')->name('treatment-history');
Route::resource('/doctors', 'DoctorController');
Route::resource('/patients', 'PatientController');
Route::resource('/nurses', 'NurseController');
Route::resource('/accountants', 'AccountantController');
Route::resource('/pharmacists', 'PharmacistController');
Route::resource('/receptionists', 'ReceptionistController');
Route::resource('/laboratorists', 'LaboratoristController');
Route::get('/timeschedule/{doctor}', 'TimeScheduleController@timeSchedulesForDoctor')->name('doctor-time-schedules');
Route::get('/timeschedule/{doctor}/create/', 'TimeScheduleController@createtimeScheduleForDoctor')->name('create-time-schedule-for-doctor');
Route::resource('/timeschedules', 'TimeScheduleController');
Route::resource('/casehistories', 'CaseHistoryController');
Route::resource('/appointments', 'AppointmentController');
Route::resource('/documents', 'DocumentController');
Route::resource('/prescriptions', 'PrescriptionController');
Route::resource('/medicines/categories', 'MedicineCategoryController', ['as' => 'medicines']);
Route::resource('/medicines', 'MedicineController');
Route::resource('/services', 'ServiceController');
Route::resource('/beds', 'BedController');
Route::resource('/lapreports', 'LapReportController');
Route::resource('/laptemplates', 'LapTemplateController');
Route::resource('/bedallotments', 'BedAllotmentController');
Route::resource('/servicepackages', 'ServicePackageController');
Route::resource('/dayoffschedules', 'DayoffScheduleController');
Route::resource('/payments', 'PaymentController');
Route::resource('/paymentitems', 'PaymentItemController');
Route::resource('/expenses', 'ExpenseController');


Route::get('/getdoctorsbydepartment/', 'AppointmentController@getDoctorsByDepartment')->name('get-doctors-by-department');
Route::get('/gettimeschedulebydoctor/', 'DoctorController@getTimeScheduleByDoctor')->name('get-time-schedule-by-doctor');
Route::get('/getdayoffschedulebydoctor/', 'DoctorController@getDayoffScheduleByDoctor')->name('get-dayoff-schedule-by-doctor');
Route::get('/gettimebytimeschedule/', 'TimeScheduleController@getTimeByTimeSchedule')->name('get-time-by-time-schedule');
Route::get('/getappointmentsbydate/', 'AppointmentController@getAppointmentsByDate')->name('get-appointments-by-date');
Route::get('/getbedallotmentsbydate/', 'BedAllotmentController@getBedAllotmentsByDate')->name('get-bedallotments-by-date');
Route::get('/gettemplatebyid/', 'LapReportController@getTemplateById')->name('get-template-by-id');
Route::get('/getpaymentitembyitemid/', 'PaymentItemController@getPaymentItemByItemId')->name('get-payment-item-by-item-id');
Route::get('/getpaymentitembydoctorid/', 'PaymentItemController@getPaymentItemByDoctorId')->name('get-payment-item-by-doctor_id');
Route::get('/getuserbyusertype/', 'PublicController@getUserByUserType')->name('get-user-by-user-type');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');



Route::get('/profile/{id}/type/{types?}', 'ProfileController@showUserprofile');
Route::get('/profile/edit/{id}', 'ProfileController@editUserprofile');

Route::get('/profile/Appointments/{id}', 'ProfileController@showAppointmentForprofile');
Route::get('/profile/Appointments/details/{id}/{patient_id}/{doctor_id}', 'ProfileController@showAppointmentDetailsForPprofile');
Route::get('/profile/d/Appointments/Create/{id}', 'ProfileController@createAppointmentForProfile');

Route::get('/profile/CaseHistory/{id}', 'ProfileController@showCaseHistoryForprofile');
Route::get('/profile/CaseHistory/details/{id}/{caseID}', 'ProfileController@showCaseHistoryDetailsForprofile');
Route::get('/profile/CaseHistory/add/Case', 'ProfileController@createCaseHistoriesForProfile');

Route::get('/profile/Documents/{id}', 'ProfileController@showDocumentForprofile');
Route::get('/profile/Documents/details/{id}/{patient_id}/{doctor_id}', 'ProfileController@showDoumentDetailsFor');
Route::get('/profile/Documents/create/d', 'ProfileController@createDoumentDetailsFor');


Route::get('/profile/Prescriptions/{id}', 'ProfileController@showPrescriptionForprofile');
Route::get('/profile/Prescriptions/details/{id}/{patient_id}/{doctor_id}', 'ProfileController@showPrescriptionDetailsForProfile');

Route::get('/profile/timeSchedulesForDoctor/{id}', 'ProfileController@showTimeSchedulesForDoctor');
Route::get('/profile/timeschedule/{doctor}/create/', 'ProfileController@createtimeScheduleForDoctor')->name('create-time-schedule-for-doctor-profile');

Route::get('/profile/mypatients/all', 'ProfileController@myPatient');


