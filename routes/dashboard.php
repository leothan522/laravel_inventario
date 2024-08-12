<?php

use App\Http\Controllers\Dashboard\PruebaController;
use App\Http\Controllers\FCM\FcmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ParametrosController;
use App\Http\Controllers\Dashboard\UsuariosController;
use App\Http\Controllers\Chat\ChatController;
use App\Http\Controllers\Dashboard\EmpresasController;
use App\Http\Controllers\Dashboard\ArticulosController;
use App\Http\Controllers\Dashboard\StockController;
use App\Http\Controllers\Dashboard\CompartirController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'user.admin',
    'user.estatus',
    'user.permisos'
])->prefix('/dashboard')->group(function (){

    Route::get('fcm', [FcmController::class, 'index'])->name('fcm.index');

    Route::get('parametros', [ParametrosController::class, 'index'])->name('parametros.index');
    Route::get('usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
    Route::get('export/usuarios/{buscar?}', [UsuariosController::class, 'export'])->name('usuarios.excel');
    Route::get('pruebas', [PruebaController::class, 'index'])->name('pruebas.index');
    Route::get('empresas', [EmpresasController::class, 'index'])->name('empresas.index');
    Route::get('articulos', [ArticulosController::class, 'index'])->name('articulos.index');
    Route::post('export/articulos', [ArticulosController::class, 'reporteArticulos'])->name('articulos.reportes');
    Route::get('stock', [StockController::class, 'index'])->name('stock.index');
    Route::get('print/ajuste/{id?}', [StockController::class, 'printAjustes'])->name('ajustes.print');
    Route::post('export/stock', [StockController::class, 'reporteStock'])->name('stock.reportes');
    Route::post('export/ajustes', [StockController::class, 'reporteAjustes'])->name('ajustes.reportes');

});

Route::get('dashboard/perfil', [UsuariosController::class, 'perfil'])->middleware('auth')->name('usuarios.perfil');
Route::get('chat-directo/{id?}', [ChatController::class, 'index'])->middleware(['user.android'])->name('chat.directo');
Route::get('export/{almacen}/{empresa}/{limit}/movimientos/', [CompartirController::class, 'reporteMovimientos'])->name('movimientos.reportes');



