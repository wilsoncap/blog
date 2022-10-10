<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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



//laravel va probando de arriba hacia abajo para ver que ruta se ajusta a la peticion
//por eso es bueno organizar el orden de las rutas para que ninguna se valla en otra peticion
Route::get('/', HomeController::class);

//Rutas sin agrupar
// Route::get('cursos', [CursoController::class, 'index']);
// Route::get('cursos/create', [CursoController::class, 'create']);
// Route::get('cursos/{curso}', [CursoController::class, 'show']);


//rutas agrupadas
    Route::controller(CursoController::class)->group(function(){
    Route::get('cursos',  'index')->name('cursos.index');
    Route::get('cursos/create',  'create')->name('cursos.create');
    Route::post('cursos', 'store')->name('cursos.store');
    Route::get('cursos/{curso}',  'show')->name('cursos.show');
    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
    Route::put('cursos/{curso}/', 'update')->name('cursos.update');
    Route::delete('cursos/{curso}/', 'destroy')->name('cursos.destroy');
});

//el signo ? al fianl de la variable indica que el parametro es opcional

// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null) {
//     if ($categoria) {
//         return "Bienvenido al curso $curso, de la categoria $categoria";
//     }else {
//         return "Bienvenido al curso: $curso";
//     }
// });

