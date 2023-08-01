<?php
use App\Http\Controllers\AdminPriceController;
use App\Http\Controllers\HeartRateController;
use App\Http\Controllers\HemoglobinController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\TemperatureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CaseHistoryController;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\GlucoseController;
use App\Http\Controllers\BloodPressureController;
use App\Http\Controllers\SecretaryController;
use App\Http\Controllers\DoctorController;
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




Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    //localization Route
    
    Route::get("locale/{locale}",[LocalizationController::class,'setLang']);

    // start frontend page routing

    Route::get('/', 'PagesController@index')->name('pages.index');
    Route::get('/about', 'PagesController@about')->name('pages.about');
    Route::get('/services', 'PagesController@services')->name('pages.services');
    Route::get('/solutions', 'PagesController@solutions')->name('pages.solutions');
    Route::get('/ourteam', 'TeamController@getAllTeamMembers')->name('pages.ourteam');
    Route::get('/ourpartners', 'PartnerController@getAllPartnerMembers')->name('pages.ourpartners');
    Route::get('/rasa', 'PagesController@rasa')->name('rasa.models');
    Route::post('contact',[ContactController::class ,'store'])->name('contact.store');
    
    // end frontend page routing

    Route::get('login', [CustomAuthController::class, 'index'])->name('login');
    Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
    Route::get('registre', [CustomAuthController::class, 'registration'])->name('register-user');
    Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
    Route::get('/TumerDetection', 'TumerDetectionController@index')->name('pages.tumer_detection')->middleware('auth');

Route::middleware("auth")->group(function () {
    Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
    Route::get('Myprofile',[CustomAuthController::class,'showProfile'])->name('profile.show');
    Route::put('profileEdit/{id}',[CustomAuthController::class,'update'])->name('profile.edit');
    Route::get('plans', [PlanController::class, 'index']);
    Route::get('plans/{plan}/', [PlanController::class, 'show'])->name("plans.show");
    Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");
    Route::get('caseHistory',[CaseHistoryController::class,'index'])->name('caseHistory.index');
    Route::post('weight',[WeightController::class,'store'])->name('weight.store');
    Route::post('glucose',[GlucoseController::class,'store'])->name('glucose.store');
    Route::post('bloodPressure',[BloodPressureController::class,'store'])->name('bloodPressure.store');
    Route::post('temperature',[TemperatureController::class,'store'])->name('temperature.store');
    Route::post('hemoglobin',[HemoglobinController::class,'store'])->name('hemoglobin.store');
    Route::post('heartRate',[HeartRateController::class,'store'])->name('heartRate.store');
   


}); 

Route::middleware("admin")->group( function(){
    Route::get('/team','TeamController@index')->name('team.index');
    Route::put('teamEdit','TeamController@update')->name('team.edit');
    Route::post('team', [TeamController::class, 'store'])->name('team.store');
    Route::get('/partner','PartnerController@index')->name('partner.index');
    Route::post('partner', [PartnerController::class, 'store'])->name('partner.store');
    Route::get('team/{id}',[TeamController::class, 'destroy' ])->name('team.destroy');
    Route::get('/doctor','DoctorController@index')->name('doctor.index');
    Route::put('/doctorEdit/{id}', 'DoctorController@update')->name('doctor.edit');

    Route::post('doctor', [DoctorController::class, 'store'])->name('doctor.store');
  
    Route::get('doctor/{id}',[DoctorController::class, 'destroy' ])->name('doctor.destroy');
    Route::get('partner/{id}',[PartnerController::class, 'destroy' ])->name('partner.destroy');
    Route::get('contact/{id}',[ContactController::class, 'destroy' ])->name('contact.destroy');
    Route::get('contacts',[ContactController::class,'index'])->name('contacts.index');
    Route::put('contactEdit','ContactController@update')->name('contacts.edit');
    Route::get('/department','DepartmentController@index')->name('department.index');
    Route::put('departmentEdit','DepartmentController@update')->name('department.edit');
    Route::post('department', [DepartmentController::class, 'store'])->name('department.store');
    Route::get('/departmentz', [DepartmentController::class, 'index'])->name('departments.show');
    Route::get('department/{id}',[DepartmentController::class, 'destroy' ])->name('department.destroy');
    Route::get('/departments/create', 'DepartmentController@create')->name('departments.create');
    Route::get('/admin/prices', [AdminPriceController::class, 'index'])->name('admin.prices.index');
    Route::get('/admin/prices/create', [AdminPriceController::class, 'create'])->name('admin.prices.create');
    Route::post('/admin/prices', [AdminPriceController::class, 'store'])->name('admin.prices.store');
    Route::get('/admin/prices/{category}/edit', [AdminPriceController::class, 'edit'])->name('admin.prices.edit');
    Route::put('/admin/prices/{category}', [AdminPriceController::class, 'update'])->name('admin.prices.update');
    Route::get('/admin/prices/{category}', [AdminPriceController::class, 'destroy'])->name('admin.prices.destroy');
   
    // Price Options (If needed)
    Route::get('/admin/prices/{category}/options/create', [AdminPriceOptionController::class, 'create'])->name('admin.prices.options.create');
    Route::post('/admin/prices/{category}/options', [AdminPriceOptionController::class, 'store'])->name('admin.prices.options.store');
    Route::get('/admin/prices/{category}/options/{option}/edit', [AdminPriceOptionController::class, 'edit'])->name('admin.prices.options.edit');
    Route::put('/admin/prices/{category}/options/{option}', [AdminPriceOptionController::class, 'update'])->name('admin.prices.options.update');
    Route::get('/admin/prices/{category}/options/{option}', [AdminPriceOptionController::class, 'destroy'])->name('admin.prices.options.destroy');
});
Route::middleware("doctor")->group(function () {
    Route::get('patient/create', [PatientController::class, 'create'])->name('patients.create');
    Route::post('patient', [PatientController::class, 'store'])->name('patient.store');
    Route::get('/patient', [PatientController::class, 'index'])->name('patients.index');
    Route::put('patient/{id}', [PatientController::class, 'update'])->name('patient.edit');
    Route::get('patient/{id}', [PatientController::class, 'destroy'])->name('patient.destroy');
    Route::get('/secretaries',[SecretaryController::class,'index'])->name('secreatries.index');
    Route::post('/secretaries',[SecretaryController::class,'store'])->name('secreatries.store');
    Route::get('secretary/{id}', [SecretaryController::class, 'destroy'])->name('secretary.destroy');
    Route::put('secretary/{id}', [SecretaryController::class, 'update'])->name('secretary.edit');

});

Route::middleware("manager")->group( function(){

});
Route::middleware("laboratory")->group( function(){

});
Route::middleware("secretary")->group( function(){

});


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

});
