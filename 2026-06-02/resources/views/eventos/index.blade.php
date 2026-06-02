<x-layout title="Eventos">
    <h1>Eventos</h1>
    @if ($eventos->isEmpty())
        <p>Nenhum evento cadastrado.</p>
    @else
        <table border=1>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Evento</th>
                    <th>Preco</th>
                    <th>Quantidade</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($eventos as $evento)
                        <tr>
                            <td>{{$evento->id}}</td>
                            <td>{{$evento->nome}}</td>
                            <td>R${{ number_format($evento->preco,2,',','.') }}</td>
                            <td>{{ $evento->quantidade }}</td>
                            <td>
                                <a href="{{ route('eventos.edit', ['evento' => $evento->id]) }}" class="btn-icon btn-primary">
                                    <x-icon.edit />
                                </a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('eventos.destroy', ['evento' => $evento->id]) }}">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn-icon btn-danger" onclick="return confirm('Deseja excluir esse evento?');">
                                        <x-icon.delete />
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    @endif
    <br>
    <a class="btn btn-primary" href="{{ route("eventos.create") }}">Adicionar</a>
</x-layout>