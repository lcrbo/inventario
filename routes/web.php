<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BalanzaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\IndicadorkpiController;

use App\Http\Controllers\EstadoactivoController;
use App\Http\Controllers\MotivocambioestadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\TipodocumentoController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\ActivoController;
use App\Http\Controllers\HistorialmovimientoController;
use App\Http\Controllers\MovimientoingresoController;
use App\Http\Controllers\ProveedoreController;

use App\Http\Controllers\PresolicitudController;
use App\Http\Controllers\DespachoController;
use App\Http\Controllers\BultoController;
use App\Http\Controllers\MotivodespachoController;

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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/balanza', [App\Http\Controllers\balanzaController::class, 'index'])->name('balanza');
Route::get('/kpi2', [App\Http\Controllers\HomeController::class, 'index'])->name('kpi2');

/* --Route::get('/indicadorkpi', [App\Http\Controllers\IndicadorkpiController::class, 'index'])->name('indicadorkpi'); */
Route::middleware(['auth', 'verified'])->get('indicadorkpi', [IndicadorkpiController::class, 'index'])->name('indicadorkpi');
Route::middleware(['auth', 'verified'])->get('indicadorkpi/index', [IndicadorkpiController::class, 'index'])->name('indicadorkpi.index');
Route::middleware(['auth', 'verified'])->get('indicadorkpi/create', [IndicadorkpiController::class, 'create'])->name('indicadorkpi.create');
Route::middleware(['auth', 'verified'])->get('indicadorkpi/store', [IndicadorkpiController::class, 'store'])->name('indicadorkpi.store');


Route::middleware(['auth', 'verified'])->get('categorias', [CategoriaController::class, 'index'])->name('categorias');
Route::middleware(['auth', 'verified'])->get('categorias/index', [CategoriaController::class, 'index'])->name('categorias.index');
Route::middleware(['auth', 'verified'])->get('categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::middleware(['auth', 'verified'])->post('categorias/store', [CategoriaController::class, 'store'])->name('categorias.store');
Route::middleware(['auth', 'verified'])->get('categorias/store', [CategoriaController::class, 'store'])->name('categorias.store');
Route::middleware(['auth', 'verified'])->get('categorias/destroy', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
Route::middleware(['auth', 'verified'])->get('categorias/show/{id}', [CategoriaController::class, 'show'])->name('categorias.show');
Route::middleware(['auth', 'verified'])->get('categorias/edit/{id}', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::middleware(['auth', 'verified'])->get('categorias/update/{id}', [CategoriaController::class, 'edit'])->name('categorias.update');
Route::middleware(['auth', 'verified'])->put('categorias/update/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::middleware(['auth', 'verified'])->delete('categorias/destroy/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');


Route::middleware(['auth', 'verified'])->get('subcategorias', [SubcategoriaController::class, 'index'])->name('subcategorias');
Route::middleware(['auth', 'verified'])->get('subcategorias/index', [SubcategoriaController::class, 'index'])->name('subcategorias.index');
Route::middleware(['auth', 'verified'])->get('subcategorias/create', [SubcategoriaController::class, 'create'])->name('subcategorias.create');
Route::middleware(['auth', 'verified'])->post('subcategorias/store', [SubcategoriaController::class, 'store'])->name('subcategorias.store');
Route::middleware(['auth', 'verified'])->get('subcategorias/store', [SubcategoriaController::class, 'store'])->name('subcategorias.store');
Route::middleware(['auth', 'verified'])->get('subcategorias/destroy', [SubcategoriaController::class, 'destroy'])->name('subcategorias.destroy');
Route::middleware(['auth', 'verified'])->get('subcategorias/edit/{id}', [SubcategoriaController::class, 'edit'])->name('subcategorias.edit');
Route::middleware(['auth', 'verified'])->get('subcategorias/update/{id}', [SubcategoriaController::class, 'edit'])->name('subcategorias.update');
Route::middleware(['auth', 'verified'])->put('subcategorias/update/{subcategoria}', [SubcategoriaController::class, 'update'])->name('subcategorias.update');
Route::middleware(['auth', 'verified'])->delete('subcategorias/destroy/{subcategoria}', [SubcategoriaController::class, 'destroy'])->name('subcategorias.destroy');

Route::middleware(['auth', 'verified'])->get('productos', [ProductoController::class, 'index'])->name('productos');
Route::middleware(['auth', 'verified'])->get('productos/index', [ProductoController::class, 'index'])->name('productos.index');
Route::middleware(['auth', 'verified'])->get('productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::middleware(['auth', 'verified'])->post('productos/store', [ProductoController::class, 'store'])->name('productos.store');
Route::middleware(['auth', 'verified'])->get('productos/store', [ProductoController::class, 'store'])->name('productos.store');
Route::middleware(['auth', 'verified'])->get('productos/destroy', [ProductoController::class, 'destroy'])->name('productos.destroy');
Route::middleware(['auth', 'verified'])->get('productos/show/{id}', [ProductoController::class, 'show'])->name('productos.show');
Route::middleware(['auth', 'verified'])->get('productos/edit/{id}', [ProductoController::class, 'edit'])->name('productos.edit');
Route::middleware(['auth', 'verified'])->get('productos/update/{id}', [ProductoController::class, 'edit'])->name('productos.update');
Route::middleware(['auth', 'verified'])->put('productos/update/{producto}', [ProductoController::class, 'update'])->name('productos.update');
Route::middleware(['auth', 'verified'])->delete('productos/destroy/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');

/* estadoactivos */
Route::middleware(['auth', 'verified'])->get('estadoactivos', [EstadoactivoController::class, 'index'])->name('estadoactivos');
Route::middleware(['auth', 'verified'])->get('estadoactivos/index', [EstadoactivoController::class, 'index'])->name('estadoactivos.index');
Route::middleware(['auth', 'verified'])->get('estadoactivos/create', [EstadoactivoController::class, 'create'])->name('estadoactivos.create');
Route::middleware(['auth', 'verified'])->post('estadoactivos/store', [EstadoactivoController::class, 'store'])->name('estadoactivos.store');
Route::middleware(['auth', 'verified'])->get('estadoactivos/store', [EstadoactivoController::class, 'store'])->name('estadoactivos.store');
Route::middleware(['auth', 'verified'])->get('estadoactivos/destroy', [EstadoactivoController::class, 'destroy'])->name('estadoactivos.destroy');
Route::middleware(['auth', 'verified'])->get('estadoactivos/show/{id}', [EstadoactivoController::class, 'show'])->name('estadoactivos.show');
Route::middleware(['auth', 'verified'])->get('estadoactivos/edit/{id}', [EstadoactivoController::class, 'edit'])->name('estadoactivos.edit');
Route::middleware(['auth', 'verified'])->get('estadoactivos/update/{id}', [EstadoactivoController::class, 'edit'])->name('estadoactivos.update');
Route::middleware(['auth', 'verified'])->put('estadoactivos/update/{estadoactivo}', [EstadoactivoController::class, 'update'])->name('estadoactivos.update');
Route::middleware(['auth', 'verified'])->delete('estadoactivos/destroy/{estadoactivo}', [EstadoactivoController::class, 'destroy'])->name('estadoactivos.destroy');


Route::middleware(['auth', 'verified'])->get('tipodocumentos', [TipodocumentoController::class, 'index'])->name('tipodocumentos');
Route::middleware(['auth', 'verified'])->get('tipodocumentos/index', [TipodocumentoController::class, 'index'])->name('tipodocumentos.index');
Route::middleware(['auth', 'verified'])->get('tipodocumentos/create', [TipodocumentoController::class, 'create'])->name('tipodocumentos.create');
Route::middleware(['auth', 'verified'])->post('tipodocumentos/store', [TipodocumentoController::class, 'store'])->name('tipodocumentos.store');
Route::middleware(['auth', 'verified'])->get('tipodocumentos/store', [TipodocumentoController::class, 'store'])->name('tipodocumentos.store');
Route::middleware(['auth', 'verified'])->get('tipodocumentos/destroy', [TipodocumentoController::class, 'destroy'])->name('tipodocumentos.destroy');
Route::middleware(['auth', 'verified'])->get('tipodocumentos/show/{id}', [TipodocumentoController::class, 'show'])->name('tipodocumentos.show');
Route::middleware(['auth', 'verified'])->get('tipodocumentos/edit/{id}', [TipodocumentoController::class, 'edit'])->name('tipodocumentos.edit');
Route::middleware(['auth', 'verified'])->get('tipodocumentos/update/{id}', [TipodocumentoController::class, 'edit'])->name('tipodocumentos.update');
Route::middleware(['auth', 'verified'])->put('tipodocumentos/update/{tipodocumento}', [TipodocumentoController::class, 'update'])->name('tipodocumentos.update');
Route::middleware(['auth', 'verified'])->delete('tipodocumentos/destroy/{tipodocumento}', [TipodocumentoController::class, 'destroy'])->name('tipodocumentos.destroy');

/* motivocambioestados */
Route::middleware(['auth', 'verified'])->get('motivocambioestados', [MotivocambioestadoController::class, 'index'])->name('motivocambioestados');
Route::middleware(['auth', 'verified'])->get('motivocambioestados/index', [MotivocambioestadoController::class, 'index'])->name('motivocambioestados.index');
Route::middleware(['auth', 'verified'])->get('motivocambioestados/create', [MotivocambioestadoController::class, 'create'])->name('motivocambioestados.create');
Route::middleware(['auth', 'verified'])->post('motivocambioestados/store', [MotivocambioestadoController::class, 'store'])->name('motivocambioestados.store');
Route::middleware(['auth', 'verified'])->get('motivocambioestados/store', [MotivocambioestadoController::class, 'store'])->name('motivocambioestados.store');
Route::middleware(['auth', 'verified'])->get('motivocambioestados/destroy', [MotivocambioestadoController::class, 'destroy'])->name('motivocambioestados.destroy');
Route::middleware(['auth', 'verified'])->get('motivocambioestados/show/{id}', [MotivocambioestadoController::class, 'show'])->name('motivocambioestados.show');
Route::middleware(['auth', 'verified'])->get('motivocambioestados/edit/{id}', [MotivocambioestadoController::class, 'edit'])->name('motivocambioestados.edit');
Route::middleware(['auth', 'verified'])->get('motivocambioestados/update/{id}', [MotivocambioestadoController::class, 'edit'])->name('motivocambioestados.update');
Route::middleware(['auth', 'verified'])->put('motivocambioestados/update/{motivocambioestado}', [MotivocambioestadoController::class, 'update'])->name('motivocambioestados.update');
Route::middleware(['auth', 'verified'])->delete('motivocambioestados/destroy/{motivocambioestado}', [MotivocambioestadoController::class, 'destroy'])->name('motivocambioestados.destroy');

/* ubicacion */
Route::middleware(['auth', 'verified'])->get('ubicacions', [UbicacionController::class, 'index'])->name('ubicacions');
Route::middleware(['auth', 'verified'])->get('ubicacions/index', [UbicacionController::class, 'index'])->name('ubicacions.index');
Route::middleware(['auth', 'verified'])->get('ubicacions/create', [UbicacionController::class, 'create'])->name('ubicacions.create');
Route::middleware(['auth', 'verified'])->post('ubicacions/store', [UbicacionController::class, 'store'])->name('ubicacions.store');
Route::middleware(['auth', 'verified'])->get('ubicacions/store', [UbicacionController::class, 'store'])->name('ubicacions.store');
Route::middleware(['auth', 'verified'])->get('ubicacions/destroy', [UbicacionController::class, 'destroy'])->name('ubicacions.destroy');
Route::middleware(['auth', 'verified'])->get('ubicacions/show/{id}', [UbicacionController::class, 'show'])->name('ubicacions.show');
Route::middleware(['auth', 'verified'])->get('ubicacions/edit/{id}', [UbicacionController::class, 'edit'])->name('ubicacions.edit');
Route::middleware(['auth', 'verified'])->get('ubicacions/update/{id}', [UbicacionController::class, 'edit'])->name('ubicacions.update');
Route::middleware(['auth', 'verified'])->put('ubicacions/update/{ubicacion}', [UbicacionController::class, 'update'])->name('ubicacions.update');
Route::middleware(['auth', 'verified'])->delete('ubicacions/destroy/{ubicacion}', [UbicacionController::class, 'destroy'])->name('ubicacions.destroy');

/* activos */
Route::middleware(['auth', 'verified'])->get('activos', [ActivoController::class, 'index'])->name('activos');
Route::middleware(['auth', 'verified'])->get('activos/index', [ActivoController::class, 'index'])->name('activos.index');
Route::middleware(['auth', 'verified'])->get('activos/create', [ActivoController::class, 'create'])->name('activos.create');
Route::middleware(['auth', 'verified'])->post('activos/store', [ActivoController::class, 'store'])->name('activos.store');
Route::middleware(['auth', 'verified'])->get('activos/store', [ActivoController::class, 'store'])->name('activos.store');
Route::middleware(['auth', 'verified'])->get('activos/destroy', [ActivoController::class, 'destroy'])->name('activos.destroy');
Route::middleware(['auth', 'verified'])->get('activos/show/{id}', [ActivoController::class, 'show'])->name('activos.show');
Route::middleware(['auth', 'verified'])->get('activos/edit/{id}', [ActivoController::class, 'edit'])->name('activos.edit');
Route::middleware(['auth', 'verified'])->get('activos/update/{id}', [ActivoController::class, 'edit'])->name('activos.update');
Route::middleware(['auth', 'verified'])->put('activos/update/{activo}', [ActivoController::class, 'update'])->name('activos.update');
Route::middleware(['auth', 'verified'])->delete('activos/destroy/{activo}', [ActivoController::class, 'destroy'])->name('activos.destroy');

Route::middleware(['auth', 'verified'])->get('activos/stock/{id}', [ActivoController::class, 'stock'])->name('activos.stock');

Route::middleware(['auth', 'verified'])->get('historialmovimientos/index/{id}', [HistorialmovimientoController::class, 'index'])->name('historialmovimientos.index');

/* activos */
Route::middleware(['auth', 'verified'])->get('proveedores', [ProveedoreController::class, 'index'])->name('proveedores');
Route::middleware(['auth', 'verified'])->get('proveedores/index', [ProveedoreController::class, 'index'])->name('proveedores.index');
Route::middleware(['auth', 'verified'])->get('proveedores/create', [ProveedoreController::class, 'create'])->name('proveedores.create');
Route::middleware(['auth', 'verified'])->post('proveedores/store', [ProveedoreController::class, 'store'])->name('proveedores.store');
Route::middleware(['auth', 'verified'])->get('proveedores/store', [ProveedoreController::class, 'store'])->name('proveedores.store');
Route::middleware(['auth', 'verified'])->get('proveedores/destroy', [ProveedoreController::class, 'destroy'])->name('proveedores.destroy');
Route::middleware(['auth', 'verified'])->get('proveedores/show/{id}', [ProveedoreController::class, 'show'])->name('proveedores.show');
Route::middleware(['auth', 'verified'])->get('proveedores/edit/{id}', [ProveedoreController::class, 'edit'])->name('proveedores.edit');
Route::middleware(['auth', 'verified'])->get('proveedores/update/{id}', [ProveedoreController::class, 'edit'])->name('proveedores.update');
Route::middleware(['auth', 'verified'])->put('proveedores/update/{proveedore}', [ProveedoreController::class, 'update'])->name('proveedores.update');
Route::middleware(['auth', 'verified'])->delete('proveedores/destroy/{proveedore}', [ProveedoreController::class, 'destroy'])->name('proveedores.destroy');

/* movimientoingresos */
Route::middleware(['auth', 'verified'])->get('movimientoingresos', [MovimientoingresoController::class, 'index'])->name('movimientoingresos');
Route::middleware(['auth', 'verified'])->get('movimientoingresos/index', [MovimientoingresoController::class, 'index'])->name('movimientoingresos.index');
Route::middleware(['auth', 'verified'])->get('movimientoingresos/create', [MovimientoingresoController::class, 'create'])->name('movimientoingresos.create');
Route::middleware(['auth', 'verified'])->get('movimientoingresos/createusado', [MovimientoingresoController::class, 'createusado'])->name('movimientoingresos.createusado');
Route::middleware(['auth', 'verified'])->post('movimientoingresos/storeusado', [MovimientoingresoController::class, 'storeusado'])->name('movimientoingresos.storeusado');

Route::middleware(['auth', 'verified'])->post('movimientoingresos/store', [MovimientoingresoController::class, 'store'])->name('movimientoingresos.store');
Route::middleware(['auth', 'verified'])->get('movimientoingresos/destroy', [MovimientoingresoController::class, 'destroy'])->name('movimientoingresos.destroy');
Route::middleware(['auth', 'verified'])->get('movimientoingresos/show/{id}', [MovimientoingresoController::class, 'show'])->name('movimientoingresos.show');
Route::middleware(['auth', 'verified'])->get('movimientoingresos/edit/{id}', [MovimientoingresoController::class, 'edit'])->name('movimientoingresos.edit');
Route::middleware(['auth', 'verified'])->get('movimientoingresos/update/{id}', [MovimientoingresoController::class, 'edit'])->name('movimientoingresos.update');
Route::middleware(['auth', 'verified'])->put('movimientoingresos/update/{movimientoingreso}', [MovimientoingresoController::class, 'update'])->name('movimientoingresos.update');
Route::middleware(['auth', 'verified'])->delete('movimientoingresos/destroy/{movimientoingreso}', [MovimientoingresoController::class, 'destroy'])->name('movimientoingresos.destroy');

Route::middleware(['auth', 'verified'])->get('presolicitud', [PresolicitudController::class, 'index'])->name('presolicitud');
Route::middleware(['auth', 'verified'])->get('presolicitud/index', [PresolicitudController::class, 'index'])->name('presolicitud.index');
Route::middleware(['auth', 'verified'])->get('presolicitud/create', [PresolicitudController::class, 'create'])->name('presolicitud.create');
Route::middleware(['auth', 'verified'])->post('presolicitud/store', [PresolicitudController::class, 'store'])->name('presolicitud.store');
Route::middleware(['auth', 'verified'])->get('presolicitud/destroy', [PresolicitudController::class, 'destroy'])->name('presolicitud.destroy');
Route::middleware(['auth', 'verified'])->get('presolicitud/show/{id}', [PresolicitudController::class, 'show'])->name('presolicitud.show');
Route::middleware(['auth', 'verified'])->get('presolicitud/edit/{id}', [PresolicitudController::class, 'edit'])->name('presolicitud.edit');
Route::middleware(['auth', 'verified'])->get('presolicitud/update/{id}', [PresolicitudController::class, 'edit'])->name('presolicitud.update');
Route::middleware(['auth', 'verified'])->put('presolicitud/update/{movimientoingreso}', [PresolicitudController::class, 'update'])->name('presolicitud.update');
Route::middleware(['auth', 'verified'])->delete('presolicitud/destroy/{movimientoingreso}', [PresolicitudController::class, 'destroy'])->name('presolicitud.destroy');


Route::middleware(['auth', 'verified'])->get('despacho', [DespachoController::class, 'index'])->name('despacho');
Route::middleware(['auth', 'verified'])->get('despacho/index', [DespachoController::class, 'index'])->name('despacho.index');
Route::middleware(['auth', 'verified'])->get('despacho/create', [DespachoController::class, 'create'])->name('despacho.create');
Route::middleware(['auth', 'verified'])->post('despacho/store', [DespachoController::class, 'store'])->name('despacho.store');
Route::middleware(['auth', 'verified'])->get('despacho/destroy', [DespachoController::class, 'destroy'])->name('despacho.destroy');
Route::middleware(['auth', 'verified'])->get('despacho/show/{id}', [DespachoController::class, 'show'])->name('despacho.show');
Route::middleware(['auth', 'verified'])->get('despacho/edit/{id}', [DespachoController::class, 'edit'])->name('despacho.edit');
Route::middleware(['auth', 'verified'])->get('despacho/update/{id}', [DespachoController::class, 'edit'])->name('despacho.update');
Route::middleware(['auth', 'verified'])->put('despacho/update/{movimientoingreso}', [DespachoController::class, 'update'])->name('despacho.update');
Route::middleware(['auth', 'verified'])->delete('despacho/destroy/{movimientoingreso}', [DespachoController::class, 'destroy'])->name('despacho.destroy');

Route::middleware(['auth', 'verified'])->get('bulto', [BultoController::class, 'index'])->name('bulto');
Route::middleware(['auth', 'verified'])->get('bulto/index', [BultoController::class, 'index'])->name('bulto.index');
Route::middleware(['auth', 'verified'])->get('bulto/create', [BultoController::class, 'create'])->name('bulto.create');
Route::middleware(['auth', 'verified'])->post('bulto/store', [BultoController::class, 'store'])->name('bulto.store');
Route::middleware(['auth', 'verified'])->get('bulto/destroy', [DespachoController::class, 'destroy'])->name('bulto.destroy');
Route::middleware(['auth', 'verified'])->get('bulto/show/{id}', [BultoController::class, 'show'])->name('bulto.show');
Route::middleware(['auth', 'verified'])->get('bulto/edit/{id}', [BultoController::class, 'edit'])->name('bulto.edit');
Route::middleware(['auth', 'verified'])->get('bulto/update/{id}', [BultoController::class, 'edit'])->name('bulto.update');
Route::middleware(['auth', 'verified'])->put('bulto/update/{movimientoingreso}', [BultoController::class, 'update'])->name('bulto.update');
Route::middleware(['auth', 'verified'])->delete('bulto/destroy/{movimientoingreso}', [BultoController::class, 'destroy'])->name('bulto.destroy');


Route::middleware(['auth', 'verified'])->get('conversion', [MovimientoingresoController::class, 'indexC'])->name('conversion');
Route::middleware(['auth', 'verified'])->get('conversion/index', [MovimientoingresoController::class, 'indexC'])->name('conversion.index');
Route::middleware(['auth', 'verified'])->get('conversion/create', [MovimientoingresoController::class, 'create'])->name('conversion.create');
Route::middleware(['auth', 'verified'])->post('conversion/store', [MovimientoingresoController::class, 'store'])->name('conversion.store');
Route::middleware(['auth', 'verified'])->get('conversion/destroy', [MovimientoingresoController::class, 'destroy'])->name('conversion.destroy');
Route::middleware(['auth', 'verified'])->get('conversion/show/{id}', [MovimientoingresoController::class, 'show'])->name('conversion.show');
Route::middleware(['auth', 'verified'])->get('conversion/edit/{id}', [MovimientoingresoController::class, 'edit'])->name('conversion.edit');
Route::middleware(['auth', 'verified'])->get('conversion/update/{id}', [MovimientoingresoController::class, 'edit'])->name('conversion.update');
Route::middleware(['auth', 'verified'])->put('conversion/update/{movimientoingreso}', [MovimientoingresoController::class, 'update'])->name('conversion.update');
Route::middleware(['auth', 'verified'])->delete('conversion/destroy/{movimientoingreso}', [MovimientoingresoController::class, 'destroy'])->name('conversion.destroy');



Route::middleware(['auth', 'verified'])->get('reportes', [ActivoController::class, 'indexR'])->name('reportes');
Route::middleware(['auth', 'verified'])->get('reportes/index', [ActivoController::class, 'indexR'])->name('reportes.index');
Route::middleware(['auth', 'verified'])->get('reportes/create', [ActivoController::class, 'create'])->name('reportes.create');
Route::middleware(['auth', 'verified'])->post('reportes/store', [ActivoController::class, 'store'])->name('reportes.store');
Route::middleware(['auth', 'verified'])->get('reportes/destroy', [ActivoController::class, 'destroy'])->name('reportes.destroy');
Route::middleware(['auth', 'verified'])->get('reportes/show/{id}', [ActivoController::class, 'show'])->name('reportes.show');
Route::middleware(['auth', 'verified'])->get('reportes/edit/{id}', [ActivoController::class, 'edit'])->name('reportes.edit');
Route::middleware(['auth', 'verified'])->get('reportes/update/{id}', [ActivoController::class, 'edit'])->name('reportes.update');
Route::middleware(['auth', 'verified'])->put('reportes/update/{movimientoingreso}', [ActivoController::class, 'update'])->name('reportes.update');
Route::middleware(['auth', 'verified'])->delete('reportes/destroy/{movimientoingreso}', [ActivoController::class, 'destroy'])->name('reporreporteste.destroy');

Route::middleware(['auth', 'verified'])->get('motivodespachos', [MotivodespachoController::class, 'index'])->name('motivodespachos');
Route::middleware(['auth', 'verified'])->get('motivodespachos/index', [MotivodespachoController::class, 'index'])->name('motivodespachos.index');
Route::middleware(['auth', 'verified'])->get('motivodespachos/create', [MotivodespachoController::class, 'create'])->name('motivodespachos.create');
Route::middleware(['auth', 'verified'])->post('motivodespachos/store', [MotivodespachoController::class, 'store'])->name('motivodespachos.store');
Route::middleware(['auth', 'verified'])->get('motivodespachos/store', [MotivodespachoController::class, 'store'])->name('motivodespachos.store');
Route::middleware(['auth', 'verified'])->get('motivodespachos/destroy', [MotivodespachoController::class, 'destroy'])->name('motivodespachos.destroy');
Route::middleware(['auth', 'verified'])->get('motivodespachos/show/{id}', [MotivodespachoController::class, 'show'])->name('motivodespachos.show');
Route::middleware(['auth', 'verified'])->get('motivodespachos/edit/{id}', [MotivodespachoController::class, 'edit'])->name('motivodespachos.edit');
Route::middleware(['auth', 'verified'])->get('motivodespachos/update/{id}', [MotivodespachoController::class, 'edit'])->name('motivodespachos.update');
Route::middleware(['auth', 'verified'])->put('motivodespachos/update/{motivocambioestado}', [MotivodespachoController::class, 'update'])->name('motivodespachos.update');
Route::middleware(['auth', 'verified'])->delete('motivodespachos/destroy/{motivocambioestado}', [MotivodespachoController::class, 'destroy'])->name('motivodespachos.destroy');
