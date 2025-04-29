@if (isset($pedido->id))
    <form method="POST" action="{{ route('pedido.update', ['pedido' => $pedido->id]) }}">
        @method('PUT')
        @csrf
    @else
        <form method="POST" action="{{ route('pedido.store') }}">
            @csrf
@endif

<select name="cliente_id">
    <option>-- Selecione um cliente --</option>

    @foreach ($clientes as $cliente)
        <option value="{{ $cliente->id }}"
            {{ ($pedido->cliente_id ?? old('cliente_id')) == $cliente->id ? 'selected' : '' }}>
            {{ $cliente->nome }}</option>
    @endforeach
</select>

<button type="submit" class="borda-preta">Cadastrar</button>
</form>
