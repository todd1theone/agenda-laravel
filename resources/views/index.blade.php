@extends('layouts.app')

@section('conteudo')
<div>
    <h2>Calculadora</h2>
    <a href="/create">Criar Novo</a>
</div>
<table>
    <tr>
        <td>Número 1</td>
        <td>Operador</td>
        <td>Número 2</td>
        <td>Resultado</td>
        <td>-<td>
        <td>-<td>
    </tr>
    @foreach($resultados as $resultado)
    <tr>
        <td>{{ $resultado->num1 }}</td>
        <td>{{ $resultado->operacao }}</td>
        <td>{{ $resultado->num2 }}</td>
        <td>{{ $resultado->resultado }}</td>
        <td>
            <a href="/edit/{{ $resultado->id }}">Editar</a>
        </td>
        <td>
            <form action="/delete" method="post" id="form-delete-{{ $resultado->id }}">
                @csrf                
                <input type="hidden" name="id" value="{{ $resultado->id }}">
                @method('DELETE')
                <a href="javascript:var c = confirm('Deseja excluir o registro?'); if (c) { document.getElementById('form-delete-{{ $resultado->id }}').submit(); }">Excluir</a>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection