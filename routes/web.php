<?php

use App\Http\Controllers\{
    HomeController,
    MasterController,
    BrandsController,
    CategorysController,
    ProductgroupController,
    UnitofMeasureContraller,
    ProductContraller,
    ProductBomContraller,
    ProductBatchContraller,
    ProductSpecificationContraller,
    ProductStockeepingContraller,
    ProductVariantCodeContraller,
    PurchealineContraller,
    PurcheaOrderContraller,
    ReceiveOrderContraller,
    ReceiveOrderLineContraller,
    StockTransactionContraller,
    SuppliyerController,
    CurencyController,
    ExchangeRateController
};
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [MasterController::class, 'index']);
Route::get('{any}', function () {
    return view('master');
});

// Route::resource('brands',BrandsController::class);
// Route::resource('categorys',CategorysController::class);

// Route::resource('productgroup',ProductgroupController::class);
// Route::resource('unitofmeasure',UnitofMeasureContraller::class);
// Route::resource('product',ProductContraller::class);
// Route::resource('productbom',ProductBomContraller::class);
// Route::resource('productbatch',ProductBatchContraller::class);
// Route::resource('prospecification',ProductSpecificationContraller::class);
// Route::resource('stockkeeping',ProductStockeepingContraller::class);
// Route::resource('provariantcode',ProductVariantCodeContraller::class);
// Route::resource('purchealine',ProductVariantCodeContraller::class);
// Route::resource('purcheaorder',PurcheaOrderContraller::class);
// Route::resource('receiveorder',ReceiveOrderContraller::class);
// Route::resource('receiveline',ReceiveOrderLineContraller::class);
// Route::resource('stocktransaction',StockTransactionContraller::class);
// Route::resource('suppliyer',SuppliyerController::class);
// Route::resource('curency',CurencyController::class);
// Route::resource('exchangerate',ExchangeRateController::class);