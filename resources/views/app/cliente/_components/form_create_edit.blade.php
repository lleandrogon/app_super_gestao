@if (isset($cliente->id))
    <form method="POST" action="{{ route('cliente.update', ['cliente' => $cliente->id]) }}">
        @method('PUT')
        @csrf
    @else
        <form method="POST" action="{{ route('cliente.store') }}">
            @csrf
@endif

<input type="text" name="nome" value="{{ $cliente->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">

<button type="submit" class="borda-preta">Cadastrar</button>
</form>
