<x-layout title="Listar as Máquinas">

    <a href="{{route('machines.create')}}">Cadastrar</a>

    <h1>Listar as Máquinas</h1>

    @include('components/flash-message')

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($machines as $machine)
            <tr>
                <td>{{$machine->id}}</td>
                <td>{{$machine->name}}</td>
                <td><a href="{{ route('machines.show', $machine->id)}}"> Visualizar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>
