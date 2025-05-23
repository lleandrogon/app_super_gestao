<form method="POST" action="{{ route('pedido-produto.store', ['pedido' => $pedido]) }}">
    @csrf

    <select name="produto_id">
        <option>-- Selecione um Produto --</option>

        @foreach ($produtos as $produto)
            <option value="{{ $produto->id }}"
                {{ old('cliente_id') == $produto->id ? 'selected' : '' }}>
                {{ $produto->nome }}</option>
        @endforeach
    </select>

    <input type="number" name="quantidade" value="{{ old('quantidade') ? old('quantidade') : '' }}" placeholder="Quantidade" class="borda-preta">

    <button type="submit" class="borda-preta">Cadastrar</button>
</form>
