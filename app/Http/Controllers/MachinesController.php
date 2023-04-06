<?php

namespace App\Http\Controllers;

class MachinesController
{
    public function index()
    {
        echo "<h1>Listar as máquinas</h1>";
    }

    public function show($id)
    {
        echo "<h1>Vizualizar a máquina $id.</h1>";
    }
}