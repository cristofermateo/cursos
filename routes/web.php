<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\CursoController;
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

Route::get("/", NoticiaController::class);

Route::get("cursos", [CursoController::class, 'index']);

Route::get("cursos/create", [CursoController::class, 'create']);

Route::get("cursos/{curso}", [CursoController::class, 'show']);

/*
Route::get("cursos/{curso}/{categoria}",function($curso , $categoria = null){

dif($categoria){

    return "bienvenido al curso: $curso, de la categoria $categoria";
}else{
    return "bienvenido al curso: $curso";
}



    return "bienvenido al curso: $curso, de la categoria $categoria";
});
*/



