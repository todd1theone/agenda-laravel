@extends('layouts.app')

@section('conteudo')
<form action="/store" method="post">
    @csrf
    <p>
        <label for="num1">Número 1</label>
        <input type="number" id="num1" name="num1" value="">
    </p>
    <p>
        <label for="num2">Número 2</label>
        <input type="number" id="num2" name="num2" value="">
    </p>
    <p>
        <label for="operacao">Operação</label>
        <select id="operacao" name="operacao">
            <option value="+">+</option>
            <option value="-">-</option>
        </select>
    </p> 
    <p>
        <button type="submit">Calcular e Salvar</button>
    </p>
</form>
@endsection
