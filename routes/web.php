<?php

use App\Http\Controllers\ApprovingSignatoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ChnageTypeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DisabilityStatusController;
use App\Http\Controllers\DutyController;
use App\Http\Controllers\EmploymentChangeController;
use App\Http\Controllers\EmploymentDetailController;
use App\Http\Controllers\EmploymentTermController;
use App\Http\Controllers\EthnicityController;

use App\Http\Controllers\InstitutionnController;
use App\Http\Controllers\JobGradeController;
use App\Http\Controllers\JobTitleController;
use App\Http\Controllers\PayslipController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PersonalDetailController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProbationStatusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RelationshipController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/forms', function () {
    return view('forms');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/password-update/{userId}', [ProfileController::class, 'updatePassword'])->name('profile.update_password');
    Route::any('/profile/profile-update/{userId}', [ProfileController::class, 'updateProfile'])->name('profile.update_profile');
    Route::any('/profile/avatar-update/{userId}', [ProfileController::class, 'updateAvatar'])->name('profile.update_avatar');
   
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::prefix('personal')->group(function () {
        Route::get('index', [PersonalDetailController::class, 'index'])->name('personal.details.index');
        Route::get('create', [PersonalDetailController::class, 'create'])->name('personal.details.create');
        Route::get('edit/{detail}', [PersonalDetailController::class, 'edit'])->name('personal.details.edit');
        Route::post('store', [PersonalDetailController::class, 'store'])->name('personal.details.store');
        Route::put('update/{detail}', [PersonalDetailController::class, 'update'])->name('personal.details.update');
    });
  
  
    Route::resource('department', DepartmentController::class);

    Route::resource('payslip', PayslipController::class);
    
    Route::resource('ethnicity', EthnicityController::class);

    Route::resource('institution', InstitutionnController::class);

    Route::resource('position', PositionController::class);

    Route::resource('course', CourseController::class);

    Route::resource('certificate', CertificateController::class);

    Route::resource('duty', DutyController::class);

    Route::group(['prefix' => 'disability', 'as' => 'disability.'], function () {
        Route::resource('status', DisabilityStatusController::class);
    });

    Route::group(['prefix' => 'changetype', 'as' => 'change.'], function () {
        Route::resource('type', ChnageTypeController::class);
    });

    Route::group(['prefix' => 'approvingsupervisor', 'as' => 'approving.'], function () {
        Route::resource('supervisor', ApprovingSignatoryController::class);
    });

    Route::group(['prefix' => 'probation', 'as' => 'probation.'], function () {
        Route::resource('status', ProbationStatusController::class);
    });
   
   
    Route::group(['prefix' => 'jobgrade', 'as' => 'job.'], function () {
        Route::resource('grade', JobGradeController::class);
    });

    Route::group(['prefix' => 'jobtitle', 'as' => 'job.'], function () {
        Route::resource('title', JobTitleController::class);
    });

    Route::group(['prefix' => 'employmentterm', 'as' => 'employment.'], function () {
        Route::resource('term', EmploymentTermController::class);
    });

    Route::group(['prefix' => 'employmentchange', 'as' => 'employment.'], function () {
        // Route::resource('change', EmploymentChangeController::class);
        Route::get('next/{id}', [EmploymentChangeController::class, 'create'])->name('change.next');
        Route::post('store/{id}', [EmploymentChangeController::class, 'store'])->name('change.store');
        Route::post('update/{change}', [EmploymentChangeController::class, 'update'])->name('change.update');
    });
   
    Route::group(['prefix' => 'employment', 'as' => 'employment.'], function () {
        // Route::resource('details', EmploymentDetailController::class);
        Route::get('next/{id}', [EmploymentDetailController::class, 'create'])->name('details.next');
        Route::post('store/{id}', [EmploymentDetailController::class, 'store'])->name('details.store');
        Route::post('update/{detail}', [EmploymentDetailController::class, 'update'])->name('details.update');

    });

    Route::group(['prefix' => 'access', 'as' => 'access.'], function () {
        Route::resources([
            'roles' => RoleController::class,
            'permissions' => PermissionController::class,
            'users' => UserController::class,
            

        ]);
      //activate
    });


   
   
   

 

   

  

  
   

    
});


require __DIR__.'/auth.php';
