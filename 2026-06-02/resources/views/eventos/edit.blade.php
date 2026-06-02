<x-layout title="Eventos">
    <h1>Editar evento</h1>
    <form action="{{ route("eventos.update", ['evento' => $evento->id]) }}" method="post">
        @csrf
        @method('PUT')

        <label for="evento">Evento</label>
        <input type="text" name="nome" value="{{ $evento->nome }}" required>
        <br><br>
        
        <label for="preco">Preço</label>
        <input type="number" name="preco" step="0.01" value="{{ $evento->preco }}" required>
        <br><br>
        
        <label for="quantidade">Quantidade</label>
        <input type="number" name="quantidade" value="{{ $evento->quantidade }}" required>
        <br><br>

        <button class="btn btn-primary">Salvar</button>
    </form>
</x-layout>