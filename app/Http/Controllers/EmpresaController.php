<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Estoque;
use App\Empresa;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session_start();
        if(isset($_SESSION['usuario']) && $_SESSION['usuario'] == "EMPRESA"){
            return view("adicionarEstoque");
        }else{
            return redirect("/acessoNegado");
        }

        
        //
    }

    public function index2()
    {
        session_start();
        if(isset($_SESSION['usuario']) && $_SESSION['usuario'] == "EMPRESA"){
            return view("buscaDeEstoque");
        }else{
            return redirect("/acessoNegado");
        }
    }

    public function index3()
    {
        session_start();
        if(isset($_SESSION['usuario']) && $_SESSION['usuario'] == "EMPRESA"){
            return view("verEstoque");
        }else{
            return redirect("/acessoNegado");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        session_start();
        $estoque = new Estoque;
        $empresa = new Empresa;
        
        $estoque->codigo = $request->codigo;
        $estoque->tipo = strtoupper($request->tipo);
        $estoque->qtd = $request->qtd;
        $estoque->tamanho = strtoupper($request->tamanho);
        $estoque->cor = strtoupper($request->cor);
        $estoque->nomeEmpresa = $_SESSION['pessoa'];
        $estoque->cpfEmpresa = $_SESSION['cpfProprietario'];
        $estoque->dataEntrada = date('y/m/d');
        $empresa = DB::table('empresas')->where('cpfProprietario', $_SESSION['cpfProprietario'])->value('cpfProprietario');
        if($empresa == null){
             return redirect("/cpfExistente");
        }else if($empresa != null){
            $estoque->save();
            return redirect("/areaDaEmpresa");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session_start();
        $estoque = new Estoque;
        $opcoes = $request->opcoes;
        if($opcoes == 0){
            $estoque = DB::select('select * from estoques where cpfEmpresa = ?', [$_SESSION['cpfProprietario']]);
        }else if($opcoes == 1){
            $codigo = $request->codigo;
            $estoque = DB::select('select * from estoques where codigo = ? and cpfEmpresa = ?', [$codigo, $_SESSION['cpfProprietario']]);
        }else if($opcoes == 2){
            $codigo = $request->codigo;
            $tipo = strtoupper($request->tipo);
            $cor = strtoupper($request->cor);
            $tamanho = strtoupper($request->tamanho);
            $estoque = DB::select('select * from estoques where codigo = ? and cpfEmpresa = ? and tipo = ? and tamanho = ? and cor = ?', [$codigo, $_SESSION['cpfProprietario'], $tipo, $tamanho, $cor]);
        }else if($opcoes == 3){
            $codigo = $request->codigo;
            $tipo = strtoupper($request->tipo);
            $tamanho = strtoupper($request->tamanho);
            $estoque = DB::select('select * from estoques where codigo = ? and cpfEmpresa = ? and tipo = ? and tamanho = ? ', [$codigo, $_SESSION['cpfProprietario'], $tipo, $tamanho]);
        }else if($opcoes == 4){
            $codigo = $request->codigo;
            $tipo = strtoupper($request->tipo);
            $cor = strtoupper($request->cor);
            $estoque = DB::select('select * from estoques where codigo = ? and cpfEmpresa = ? and tipo = ? and cor = ? ', [$codigo, $_SESSION['cpfProprietario'], $tipo, $cor]);
        }else if($opcoes == 5){
            $codigo = $request->codigo;
            $tipo = strtoupper($request->tipo);
            $estoque = DB::select('select * from estoques where codigo = ? and cpfEmpresa = ? and tipo = ?  ', [$codigo, $_SESSION['cpfProprietario'], $tipo ]);
        }
        
        
        $_SESSION['estoqueBanco'] = $estoque;
        return redirect('verEstoque');
    }

    /**
     * Display the specified resource.
     
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
