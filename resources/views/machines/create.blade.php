<x-layout title="Cadastrar a Máquina">

    <h1>Cadastrar a Máquina</h1>

    <form action="/cadastrar-maquina" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="name" id="name" placeholder="Nome da Máquina"><br><br>

        <button type="submit">Cadastrar Máquina</button>
    </form>

</x-layout>
