@if (isset($produto_detalhe->id))
    <form method="POST" action="{{ route('produto-detalhe.update', ['produto_detalhe' => $produto_detalhe->id]) }}">
        @csrf
        @method('PUT')
    @else
        <form method="POST" action="{{ route('produto-detalhe.store') }}">
            @csrf
@endif

<input type="text" name="produto_id" value="{{ $produto_detalhe->produto_id ?? old('produto_id') }}" placeholder="ID do Produto" class="borda-preta">

<input type="text" name="comprimento" value="{{ $produto_detalhe->comprimento ?? old('comprimento') }}" placeholder="Comprimento"
    class="borda-preta">

<input type="text" name="largura" value="{{ $produto_detalhe->largura ?? old('largura') }}" placeholder="Largura" class="borda-preta">

<input type="text" name="altura" value="{{ $produto_detalhe->altura ?? old('altura') }}" placeholder="Altura" class="borda-preta">

<select name="unidade_id">
    <option>-- Selecione a Unidade de Medida --</option>

    @foreach ($unidades as $unidade)
        <option value="{{ $unidade->id }}"
            {{ ($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>
            {{ $unidade->descricao }}</option>
    @endforeach
</select>

<button type="submit" class="borda-preta">Cadastrar</button>
</form>
