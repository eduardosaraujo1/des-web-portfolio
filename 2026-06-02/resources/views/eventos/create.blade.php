<x-layout title="Eventos">
    <h1>Novo evento</h1>
    <form action="{{ route("eventos.store") }}" method="post">
        @csrf
        <label for="evento">Evento</label>
        <input type="text" name="nome" required>
        <br><br>
        
        <label for="preco">Preço</label>
        <input type="number" name="preco" step="0.01" required>
        <br><br>
        
        <label for="quantidade">Quantidade</label>
        <input type="number" name="quantidade" required>
        <br><br>

        <button class="btn btn-primary">Salvar</button>
    </form>
</x-layout>