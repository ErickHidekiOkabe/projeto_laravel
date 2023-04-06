<x-layout title="Visualizar Máquina">

    <a href="{{route('machines.index')}}">Listar</a>

    <h1>Visualizar a Máquina</h1>
    
    <p>ID: {{$machine->id}}</p>
    <p>Nome: {{$machine->name}}</p>

</x-layout>
