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

    public function show(Machine $machine)
    {
        return view('machines.show')->with('machine', $machine);
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

    public function edit(Machine $machine)
    {
        return view('machines.edit', compact('machine'));
    }

    public function update(Request $request, Machine $machine)
    {
        $machine->fill($request->all())->save();

        return redirect()->route('machines.index')->with('sucesso', 'Máquina editada com sucesso!');
    }
}