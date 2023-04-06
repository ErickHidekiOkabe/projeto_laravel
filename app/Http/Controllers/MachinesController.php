<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MachinesController
{
    public function index()
    {
        //$machines = DB::select('SELECT id, name FROM machines');
        //dd($machines);

        $machines = Machine::all();

        return view('machines.index')->with('machines', $machines);
    }

    public function show($id)
    {
        echo "<h1>Vizualizar a máquina $id.</h1>";
    }

    public function create()
    {
        return view('machines.create');
    }

    public function store(Request $request)
    {
        //Exemplo basico
        //$machines = new Machine();
        //$machines->name = $request->name;
        //$machines->save();

        //dd($request->all());
        // Machine::create($request->all());

        // Somente o campo name
        Machine::create($request->only(['name']));

        return redirect('machines')->with('sucesso', 'Máquina cadastrada com sucesso!');
    }
}