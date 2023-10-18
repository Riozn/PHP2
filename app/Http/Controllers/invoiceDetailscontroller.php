<?php



namespace App\Http\Controllers;

use App\Models\InvoiceDetail;
use App\Models\order;
use App\Models\dishes;
use Illuminate\Http\Request;

class InvoiceDetailsController extends Controller
{
    /**
     * Display a listing of the invoice details.
     */
    public function index()
    {
        $invoiceDetails = InvoiceDetail::all();
        return view('invoiceDetails.index', compact('invoiceDetails'));
    }

    /**
     * Show the form for creating a new invoice detail.
     */
    public function create()
    {
        return view('invoiceDetails.create');
    }

    /**
     * Store a newly created invoice detail in storage.
     */
    public function store(Request $request)
    {
        // Validamos los datos del formulario
        $request->validate([
            'OrderID' => 'required|integer',
            'DishID' => 'required|integer',
            'Cantidad' => 'required|integer',
            'PrecioUnitario' => 'required|numeric',
            // Agrega reglas de validación para otros campos si es necesario
        ]);

        // Creamos un nuevo detalle de factura en la base de datos
        $invoiceDetail = new InvoiceDetail();
        $invoiceDetail->OrderID = $request->input('OrderID');
        $invoiceDetail->DishID = $request->input('DishID');
        $invoiceDetail->Cantidad = $request->input('Cantidad');
        $invoiceDetail->PrecioUnitario = $request->input('PrecioUnitario');
        // Asigna otros campos aquí si es necesario

        $invoiceDetail->save(); // Guardamos el detalle de factura en la base de datos

        // Redirigimos a la vista de lista de detalles de factura con un mensaje de éxito
        return redirect()->route('invoiceDetails.index')->with('success', 'Detalle de factura creado con éxito.');
    }
    

    /**
     * Display the specified invoice detail.
     */
    public function show(InvoiceDetail $invoiceDetail)
    {
        return view('invoiceDetails.show', compact('invoiceDetail'));
    }

    /**
     * Show the form for editing the specified invoice detail.
     */
    public function edit(InvoiceDetail $invoiceDetail)
    {
        return view('invoiceDetails.edit', compact('invoiceDetail'));
    }

    /**
     * Update the specified invoice detail in storage.
     */
    public function update(Request $request, InvoiceDetail $invoiceDetail)
    {
        // Validar y actualizar los datos del detalle de factura
        $request->validate([
            'OrderID' => 'required|integer',
            'DishID' => 'required|integer',
            'Cantidad' => 'required|integer',
            'PrecioUnitario' => 'required|numeric',
        ]);

        $invoiceDetail->update([
            'OrderID' => $request->input('OrderID'),
            'DishID' => $request->input('DishID'),
            'Cantidad' => $request->input('Cantidad'),
            'PrecioUnitario' => $request->input('PrecioUnitario'),
        ]);

        // Redirigir a la página de lista de detalles de factura
        return redirect()->route('invoiceDetails.index')->with('success', 'Detalle de factura actualizado con éxito.');
    }

    /**
     * Remove the specified invoice detail from storage.
     */
    public function destroy(InvoiceDetail $invoiceDetail)
    {
        // Eliminar el detalle de factura de la base de datos
        $invoiceDetail->delete();

        // Redirigir a la página de lista de detalles de factura
        return redirect()->route('invoiceDetails.index')->with('success', 'Detalle de factura eliminado con éxito.');
    }
}