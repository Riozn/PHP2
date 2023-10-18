<?php

namespace App\Http\Controllers;
use App\Models\dishes;
use Illuminate\Http\Request;


class dishesController extends Controller
{
    /**
     * Display a listing of the dishes.
     */
    public function index()
    {
        $dish = dishes::all();
        return view('dish.index', compact('dish'));
    }

    /**
     * Show the form for creating a new dish.
     */
    public function create()
    {
        return view('dish.create');
    }

    /**
     * Store a newly created dish in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'Nombre' => 'required|string|max:100',
            'Descripcion' => 'required|string|max:200',
            'Precio' => 'required|numeric',
        ]);

        // Crear un nuevo plato en la base de datos
        dishes::create([
            'Nombre' => $request->input('Nombre'),
            'Descripcion' => $request->input('Descripcion'),
            'Precio' => $request->input('Precio'),
        ]);

        // Redirigir a la página de lista de platos
        return redirect()->route('dish.index')->with('success', 'Plato creado con éxito.');
    }

    /**
     * Display the specified dish.
     */
    public function show(dishes $dish)
    {
        return view('dish.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified dish.
     */
    public function edit(dishes $dish)
    {
        return view('dish.edit', compact('dish'));
    }

    /**
     * Update the specified dish in storage.
     */
    public function update(Request $request, dishes $dish)
    {
        // Validar y actualizar los datos del plato
        $request->validate([
            'Nombre' => 'required|string|max:100',
            'Descripcion' => 'required|string|max:200',
            'Precio' => 'required|numeric',
        ]);

        $dish->update([
            'Nombre' => $request->input('Nombre'),
            'Descripcion' => $request->input('Descripcion'),
            'Precio' => $request->input('Precio'),
        ]);

        // Redirigir a la página de lista de platos
        return redirect()->route('dish.index')->with('success', 'Plato actualizado con éxito.');
    }

    /**
     * Remove the specified dish from storage.
     */
    public function destroy(dishes $dish)
    {
        if ($dish) {
            // Eliminar el plato de la base de datos
            $dish->delete();
    
            // Redirigir a la página de lista de platos
            return redirect()->route('dish.index')->with('success', 'Plato eliminado con éxito.');
        }
    }
}