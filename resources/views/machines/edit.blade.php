<x-layout title="Editar a Máquina">

    <a href="{{route('machines.index')}}">Listar</a>

    <h1>Editar a Máquina</h1>

    <form action="{{route('machines.update', $machine->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label>Nome:</label>
        <input type="text" name="name" id="name" placeholder="Nome da Máquina" value="{{$machine->name}}"><br><br>

        <button type="submit">Editar Máquina</button>
    </form>

</x-layout>
