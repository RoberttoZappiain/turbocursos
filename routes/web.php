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

Route::get('/', function () {
    return view('layouts.layout');
});

//REFERENCIA A RUTAS DE CARPETA CURSOS
//
Route::get('automotriz', function () {
    return view('components/breadcrumb', ['nombre' => 'automotriz']);
})->name('automotriz');

Route::get('cableadoredes', function () {
    return view('components/breadcrumb', ['nombre' => 'cableadoredes']);
})->name('cableadoredes');

Route::get('carpinteria', function () {
    return view('components/breadcrumb', ['nombre' => 'carpinteria']);
})->name('carpinteria');

Route::get('disenodigital', function () {
    return view('components/breadcrumb', ['nombre' => 'disenodigital']);
})->name('disenodigital');

Route::get('estructurasmetalicas', function () {
    return view('components/breadcrumb', ['nombre' => 'estructurasmetalicas']);
})->name('estructurasmetalicas');

Route::get('jardineria', function () {
    return view('components/breadcrumb', ['nombre' => 'jardineria']);
})->name('jardineria');

Route::get('saludmental', function () {
    return view('components/breadcrumb', ['nombre' => 'saludmental']);
})->name('saludmental');

Route::get('sexualidad', function () {
    return view('components/breadcrumb', ['nombre' => 'sexualidad']);
})->name('sexualidad');

Route::get('tecnologias', function () {
    return view('components/breadcrumb', ['nombre' => 'tecnologias']);
})->name('tecnologias');

Route::get('teoriamusical', function () {
    return view('components/breadcrumb', ['nombre' => 'teoriamusical']);
})->name('teoriamusical');


Route::get('todos', function () {
    return view('components/breadcrumb', ['nombre' => 'todos']);
})->name('todos');
//

//RUTA CARPETA Servicios
Route::get('servicio', function () {
    return view('components/breadcrumb', ['nombre' => 'servicio']);
})->name('servicio');

//RUTA CARPETA contacto
Route::get('contacto', function () {
    return view('components/breadcrumb', ['nombre' => 'contacto']);
})->name('contacto');
