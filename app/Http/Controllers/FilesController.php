<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $files = File::all();
        return view('file.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('file.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048', // Añade reglas para la validación de archivos
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/files', $filename); // Almacena el archivo en la carpeta "storage/app/public/files"

            File::create([
                'filename' => $filename,
            ]);

            return redirect()->route('file.index')->with('success', 'Archivo subido exitosamente.');
        }

        return back()->with('error', 'No se pudo subir el archivo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(File $files)
    {
        return view('file.show', compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $files)
    {
        return view('file.edit', compact('file'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        $request->validate([
            'filename' => 'required',
        ]);

        $file->update([
            'filename' => $request->input('filename'),
        ]);

        return redirect()->route('file.index')->with('success', 'Archivo actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $files)
    {
        Storage::delete('public/files/' . $file->filename); // Elimina el archivo del almacenamiento

        $file->delete();

        return redirect()->route('file.index')->with('success', 'Archivo eliminado exitosamente.');
    }
}
