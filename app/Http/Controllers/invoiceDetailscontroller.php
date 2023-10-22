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
   
   // Muestra el formulario para crear un nuevo detalle de factura
   public function create()
   {
       $orders = order::all();
       $dishes = dishes::all();
       return view('invoiceDetails.create', compact('orders', 'dishes'));
   }

   // Almacena un nuevo detalle de factura en la base de dato
   
      public function store(Request $request)
    {
        $request->validate([
            'OrdenID' => 'required|integer',
            'PlatoID' => 'required|integer',
            'Cantidad' => 'required|integer',
            'PrecioUnitario' => 'required|numeric',
        ]);

        $reservationDetail = new ReservationDetail();
        $reservationDetail->OrdenID = $request->input('OrdenID');
        $reservationDetail->PlatoID = $request->input('PlatoID');
        $reservationDetail->Cantidad = $request->input('Cantidad');
        $reservationDetail->PrecioUnitario = $request->input('PrecioUnitario');
        $reservationDetail->save();

        return redirect()->route('reservationDetails.index')->with('success', 'Detalle de reserva creado con éxito.');
    }

    public function show(ReservationDetail $reservationDetail)
    {
        return view('reservationDetails.show', compact('reservationDetail'));
    }

    public function edit(ReservationDetail $reservationDetail)
    {
        $orders = Order::all();
        $dishes = Dish::all();
        return view('reservationDetails.edit', compact('reservationDetail', 'orders', 'dishes'));
    }

    public function update(Request $request, ReservationDetail $reservationDetail)
    {
        $request->validate([
            'OrdenID' => 'required|integer',
            'PlatoID' => 'required|integer',
            'Cantidad' => 'required|integer',
            'PrecioUnitario' => 'required|numeric',
        ]);

        $reservationDetail->update([
            'OrdenID' => $request->input('OrdenID'),
            'PlatoID' => $request->input('PlatoID'),
            'Cantidad' => $request->input('Cantidad'),
            'PrecioUnitario' => $request->input('PrecioUnitario'),
        ]);

        return redirect()->route('reservationDetails.index')->with('success', 'Detalle de reserva actualizado con éxito.');
    }

    public function destroy(ReservationDetail $reservationDetail)
    {
        $reservationDetail->delete();
        return redirect()->route('reservationDetails.index')->with('success', 'Detalle de reserva eliminado con éxito.');
    }
}

