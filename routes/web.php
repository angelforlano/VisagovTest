<?php

use App\Models\Book;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

use App\Http\Controllers\BookController;

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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localize' ]], function () {
    
    Route::get('/', function () {
        $libros = Book::all();
        //$libros = [];
        return view('index', compact('libros'));
    });

    Route::get('/libro/{id}/edit', [BookController::class, 'edit_view'])->name('libro.edit');
    Route::get('/libro/create', [BookController::class, 'create_view'])->name('libro.create');

});

// Extraer objeto Request para poder validar data del formulario
Route::post('/contacto', function (Request $request) {
    
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    // crear objeto insertar en la base de datos
    Message::create($data);

    return redirect('/')->with('success', 'Mensaje enviado con éxito.');
});

// Ruta para eliminar un libro segun su id
Route::delete('/libro/{id}', [BookController::class, 'destroy'])->name('libro.destroy');

// Ruta para editar un libro segun su id
Route::post('/libro/{id}', [BookController::class, 'update'])->name('libro.update');

// Ruta para crear un nuevo libro
Route::post('/books', [BookController::class, 'create'])->name('libro.create');