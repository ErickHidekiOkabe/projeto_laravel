<x-layout title="Listar as Máquinas">

    <h1>Listar as Máquinas</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($machines as $machine)
            <tr>
                <td>{{$machine->id}}</td>
                <td>{{$machine->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>
