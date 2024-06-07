<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculadora;

class CalculadoraController extends Controller
{
    public function index() {
        $resultados = Calculadora::get();
        return view('index')->with('resultados', $resultados);
    }    

    public function create() {
        return view('formulario');
    }

    private function calculaResultado($num1, $operacao, $num2) {
        switch ($operacao) {
            case '+':
                return $num1 + $num2;
                break;
            case '-':
                return $num1 - $num2;
        }
    }

    public function store(Request $req) {
        $num1 = intval($req->num1);
        $num2 = intval($req->num2);
        $operacao = $req->operacao;
        $resultado = $this->calculaResultado($num1, $operacao, $num2);

        $calc = new Calculadora();
        $calc->num1 = $num1;
        $calc->operacao = $operacao;
        $calc->num2 = $num2;
        $calc->resultado = $resultado;
        $calc->save();

        return redirect('/');
    }

    public function delete(Request $req) {
        $calc = Calculadora::find($req->id);
        $calc->delete();
        
        return redirect('/');
    }

    public function edit($id) {
        $reg = Calculadora::find($id);
        return view('formularioedit')->with('reg', $reg);
    }

    public function update(Request $req) {
        $calculadora = Calculadora::find($req->id);
        $calculadora->num1 = $req->num1;
        $calculadora->num2 = $req->num2;
        $calculadora->operacao = $req->operacao;
        $calculadora->resultado = $this->calculaResultado($calculadora->num1,
            $calculadora->operacao,
            $calculadora->num2
        );
        $calculadora->save();

        return redirect('/');
    }

}
