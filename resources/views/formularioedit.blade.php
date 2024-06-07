@extends('layouts.app')

@section('conteudo')
<form action="/update" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $reg->id }}">
    @method('PUT')
    <p>
        <label for="num1">Número 1</label>
        <input type="number" id="num1" name="num1" value="{{ $reg->num1 }}">
    </p>
    <p>
        <label for="num2">Número 2</label>
        <input type="number" id="num2" name="num2" value="{{ $reg->num2 }}">
    </p>
    <p>
        <label for="operacao">Operação</label>
        <select id="operacao" name="operacao">
            <option value="+" {{ $reg->operacao == "+" ? "selected" : "" }}>+</option>
            <option value="-" {{ $reg->operacao == "-" ? "selected" : "" }}>-</option>
        </select>
    </p> 
    <p>
        <button type="submit">Calcular e Salvar</button>
    </p>
</form>
@endsection
