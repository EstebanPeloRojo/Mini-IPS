<?php

namespace App\Http\Controllers;
use App\Models\factura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class facturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('factura.create');   //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tipoServicio' => 'required',
            'fechaElaboracionFactura' => 'requierd',
            'estado' => 'required',
            'tipoDoc' => 'required',
            'numDoc' => 'required',
            'totalDinero' => 'required',
            'totalCantidad' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        factura::create($request->all());
        return redirect()->back(); //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
