<?php
use App\Http\Controllers\Dashboard\DashboardController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\SingleServiceController;
/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/Dashboard_Admin', [DashboardController::class, 'index']);

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        ///////////////////////////// Dashboard User///////////////////////////
        Route::get('/dashboard/user', function () {
            return view('Dashboard.User.dashboard');
        })->middleware(['auth'])->name('dashboard.user');
        
        //////////////////////////end Dashboard User//////////////////////////

        ///////////////////////////// Dashboard Admin///////////////////////////
        Route::get('/dashboard/admin', function () {
            return view('Dashboard.Admin.dashboard');
        })->middleware(['auth:admin'])->name('dashboard.admin');
         //////////////////////////end Dashboard Admin//////////////////////////
        

         //---------------------------------------------------------------------------------------------------------------


    Route::middleware(['auth:admin'])->group(function () {

        //############################# sections route ##########################################
    
            Route::resource('Sections', SectionController::class);
    
        //############################# end sections route ######################################

         //############################# Doctors route ##########################################
    
         Route::resource('Doctors', DoctorController::class);
         Route::post('update_password', [DoctorController::class, 'update_password'])->name('update_password');
         Route::post('update_status', [DoctorController::class, 'update_status'])->name('update_status');
    
         //############################# end Doctors route ######################################

         //############################# Service route ##########################################
    
         Route::resource('Service', SingleServiceController::class);
    
         //############################# end Service route ######################################

         //############################# GroupServices route ##########################################

        Route::view('Add_GroupServices','livewire.GroupServices.include_create')->name('Add_GroupServices');

        //############################# end GroupServices route ######################################
 
    });
        require __DIR__.'/auth.php';
    });

