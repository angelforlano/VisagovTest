<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function destroy($id)
    {
        $book = Book::find($id);
        
        if (!$book) {
            return redirect()->back()->withErrors(['error' => 'Libro no encontrado']);
        }

        $book->delete();

        return redirect('/')->with('success', 'Libro eliminado con éxito.');
    }

    // Mostrar el formulario de edicion
    public function edit_view($id)
    {
        $libro = Book::find($id);
        return view('editarLibro', compact('libro'));
    }

    // Mostrar el formulario de creación
    public function create_view()
    {
        return view('crearLibro');
    }

    public function update(Request $request, $id)
    {
        $libro = Book::find($id);
        $libro->title = $request->input('title');
        $libro->author = $request->input('author');
        $libro->save();
        
        return redirect('/')->with('success', 'Libro actualizado exitosamente');
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
        ]);

        $libro = new Book;
        $libro->title = $request->input('title');
        $libro->author = $request->input('author');
        $libro->save();

        return redirect('/')->with('success', 'Libro creado exitosamente');
    }   
}