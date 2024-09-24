<?php

namespace App\Http\Controllers;
use App\Models\Iventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class IventariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Iventario::all();
        return view('inventarios.index', compact('datos')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('inventario.create'); //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cantidad' => 'required',
            'fechaIngreso' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        Iventario::create($request->all());
        return redirect()->back();  //
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
