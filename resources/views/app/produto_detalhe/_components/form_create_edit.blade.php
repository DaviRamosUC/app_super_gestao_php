@if (isset($produto_detalhe_detalhe->id))
    <form action="{{ route('produto.update', ['produto' => $produto_detalhe->id]) }}" method="post">
        @csrf
        @method('PUT')
    @else
        <form action="{{ route('produto-detalhe.store') }}" method="post">
            @csrf
@endif
<input type="text" name="produto_id" value="{{ $produto_detalhe->nome ?? old('produto_id') }}" placeholder="Produto id"
    class="borda-preta">
{{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}

<input type="text" name="comprimento" value="{{ $produto_detalhe->descricao ?? old('comprimento') }}"
    placeholder="Comprimento" class="borda-preta">
{{ $errors->has('comprimento') ? $errors->first('comprimento') : '' }}

<input type="text" name="largura" value="{{ $produto_detalhe->peso ?? old('largura') }}" placeholder="Largura"
    class="borda-preta">
{{ $errors->has('largura') ? $errors->first('largura') : '' }}

<input type="text" name="altura" value="{{ $produto_detalhe->peso ?? old('altura') }}" placeholder="Altura"
    class="borda-preta">
{{ $errors->has('altura') ? $errors->first('altura') : '' }}

<select name="unidade_id">
    <option value="">-- Selecione a Unidade de Medida --</option>
    @foreach ($unidades as $unidade)
        <option value="{{ $unidade->id }}"
            {{ ($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>
            {{ $unidade->descricao }}</option>
    @endforeach
</select>
{{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}
<button type="submit" class="borda-preta">{{ isset($produto_detalhe->id) ? 'Atualizar' : 'Cadastrar' }}</button>
</form>