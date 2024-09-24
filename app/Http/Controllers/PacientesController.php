<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Paciente;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Paciente::all();
        return view('pacientes.index', compact('datos')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pacientes.new'); //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'apellido' => 'required',
            'Tipo_Doc' => 'required',
            'Num_Doc' => 'required',
            'fecha_nacimiento' => 'required',
            'Email' => 'required',
            'tipo_sangre' => 'required',
            'fecha_exp_doc' => 'required',
            'alergias' => 'required',
            'sexo' => 'required',
            'genero' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        Paciente::create($request->all());
        return redirect()->back();   //
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
