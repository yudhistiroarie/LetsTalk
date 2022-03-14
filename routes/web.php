<?php

use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\AssuranceParamController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\DueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaintenanceParamsController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\POController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ServiceParamsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VehicleAdminBillingController;
use App\Http\Controllers\VehicleAssuranceBillingController;
use App\Http\Controllers\VehicleAssuranceController;
use App\Http\Controllers\VehicleBrandController;
use App\Http\Controllers\VehicleDetailsController;
use App\Http\Controllers\VehicleMaintenanceController;
use App\Http\Controllers\VehicleMasterController;
use App\Http\Controllers\VehicleModelController;
use App\Http\Controllers\VehicleRentBillingExtController;
use App\Http\Controllers\VehicleTrxPurchasedController;
use App\Http\Controllers\VehicleTrxRentBillingController;
use App\Http\Controllers\VehicleTrxRentController;
use App\Http\Controllers\VehicleTrxRentExtendedController;
use App\Http\Controllers\VehicleTrxSubstituteController;
use App\Http\Controllers\VehicleTypeController;
use Illuminate\Support\Facades\Auth;
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

Route::get("/", [HomeController::class, "index"])->name("index");

// Auth::routes();

// Route::group(["middleware" => "auth"], function() {
//     // Auth Logout
//     Route::get("/doLogout", [LoginController::class, "doLogout"])->name("doLogout");
    
//     // Home
//     Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    
//     // Approval
//     Route::resource("apvrtrxrent", ApprovalController::class);
//     // Route::get('/apvrtrxrent', [ApprovalController::class, 'apvrtrxrent'])->name('apvrtrxrent');
//     // Route::get('/apvrtrxrent/approve/{id}', [ApprovalController::class, 'approveTrxRent'])->name('apvrtrxrent.approve');
//     // Route::get('/apvrtrxrent/decline/{id}', [ApprovalController::class, 'declineTrxRent'])->name('apvrtrxrent.decline');
//     // Route::get('/apvrtrxrent/detail/{id}', [ApprovalController::class, 'detailTrxRent']);
    
//     // Assurance Parameter
//     Route::resource('assuranceparams', AssuranceParamController::class);
    
//     // Audit
//     Route::resource('audits', AuditController::class);
    
//     // Billing Approval
//     // Route::get('/apvrtrxrentbill', [ApprovalController::class, 'apvrtrxrentbill'])->name('apvrtrxrentbill');
//     // Route::get('/apvrtrxrentbill/approve/{id}', [ApprovalController::class, 'approvetrxrentbill'])->name('apvrtrxrentbill.approve');
//     // Route::get('/apvrtrxrentbill/decline/{id}', [ApprovalController::class, 'declinetrxrentbill'])->name('apvrtrxrentbill.decline');
    
//     // Customer
//     Route::resource('customers', CustomerController::class);
    
//     // Dashboard
//     Route::resource('dashboard', DashboardController::class);
    
//     // Dealer
//     Route::resource('dealers', DealerController::class);
    
//     // Due
//     Route::get('/dueassurance', [DueController::class, 'dueassurance'])->name('dueassurance');
//     Route::get('/duestnk', [DueController::class, 'duestnk'])->name('duestnk');
//     Route::get('/duerent', [DueController::class, 'duerent'])->name('duerent');
    
//     // Maintenance Parameter
//     // Route::resource('maintenanceParams', MaintenanceParamController::class);
//     Route::resource('maintenanceparams', MaintenanceParamsController::class);
    
//     // Permissions
//     Route::resource('permissions', PermissionsController::class);
    
//     // PO
//     Route::resource('pOS', POController::class);
    
//     // Role
//     Route::resource('roles', RolesController::class);
    
//     // Service Parameter
//     Route::resource('serviceparams', ServiceParamsController::class);
    
//     // Users
//     Route::resource('users', UsersController::class);
    
//     // Vehicle Admin Billing
//     Route::resource('vehicleadminbillings', VehicleAdminBillingController::class);
    
//     // Vehicle Assurance
//     Route::resource('vehicleassurances', VehicleAssuranceController::class);
    
//     // Vehicle Assurance Billing
//     Route::resource('vehicleassurancebillings', VehicleAssuranceBillingController::class);
    
//     // Vehicle Brand
//     Route::resource('vehiclebrands', VehicleBrandController::class);
    
//     // Vehicle Detail
//     Route::resource('vehicle_details', VehicleDetailsController::class);
    
//     // Vehicle Master
//     Route::resource('vehiclemasters', VehicleMasterController::class);
//     Route::get("findPlatNo", [VehicleMasterController::class, "findPlatNo"]);
//     Route::get('getModel', [VehicleMasterController::class, 'getModel']);
//     Route::get('getPO', [VehicleMasterController::class, 'getPO'])->name('getPO');
    
//     // Vehicle Maintenance
//     Route::resource('vehiclemaintenances', VehicleMaintenanceController::class);
//     Route::get("getMaintenanceParam", [VehicleMaintenanceController::class, "getMaintenanceParam"]);
    
//     // Vehicle Model
//     Route::resource('vehiclemodels', VehicleModelController::class);
    
//     // Vehicle Purchased
//     Route::resource('vehicletrxpurchaseds', VehicleTrxPurchasedController::class);
    
//     // Vehicle Rent
//     Route::resource('vehicletrxrents', VehicleTrxRentController::class);
//     Route::get("getRentedVehicles", [VehicleTrxRentController::class, "getRentedVehicles"]);
//     Route::get("getRentedDueDate", [VehicleTrxRentController::class, "getRentedDueDate"]);
    
//     // Vehicle Rent Billing
//     Route::resource('vehicletrxrentbillings', VehicleTrxRentBillingController::class);
//     Route::get("getRentCodes", [VehicleTrxRentBillingController::class, "getRentCodes"]);
    
//     // Vehicle Rent Extended
//     Route::resource('vehicletrxrentextendeds', VehicleTrxRentExtendedController::class);
//     Route::get("getExtTrxCodes", [VehicleTrxRentExtendedController::class, "getExtTrxCodes"]);
    
//     // Vehicle Rent Extended Billing
//     Route::resource('vehiclerentbillingexts', VehicleRentBillingExtController::class);
    
//     // Vehicle Substitute
//     Route::resource('vehicletrxsubstitutes', VehicleTrxSubstituteController::class);
//     Route::get("getRentedCars", [VehicleTrxSubstituteController::class, "getRentedCars"]);
    
//     // Vehicle Type
//     Route::resource('vehicletypes', VehicleTypeController::class);
    
//     // Vere
//     Route::resource('veres', App\Http\Controllers\VereController::class);
    
//     //Route::get('dropdownlist','App\Http\Controllers\vehiclemodelController@getCountries');
// });
