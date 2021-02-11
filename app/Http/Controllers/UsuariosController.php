<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Usuario;
use App\Admin;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
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
            return view("novoUsuario");
        }else{
            return redirect("/acessoNegado");
        }
        
    }

    public function index2()
    {
        //
    }

    public function index3()
    {
        session_start();
        $_SESSION['usuario'] = "VISITANTE";
        return view("fazerLogin");
    }

    public function index4()
    {
        session_start();
        if(isset($_SESSION['usuario']) && $_SESSION['usuario'] == "ADMIN"){
            return view("areaDoAdmin");
        }else{
            return redirect("/acessoNegado");
        }
        
    }

    public function index5()
    {
        session_start();
        if(isset($_SESSION['usuario']) && $_SESSION['usuario'] == "COLABORADOR"){
            return view("areaDoColaborador");
        }else{
            return redirect("/acessoNegado");
        }
    }

    public function index6()
    {
        session_start();
        if(isset($_SESSION['usuario']) && $_SESSION['usuario'] == "EMPRESA"){
            return view("areaDaEmpresa");
        }else{
            return redirect("/acessoNegado");
        }
    }

    public function index7()
    {
        session_start();
        $_SESSION['usuario'] = "VISITANTE";
        return view("novaEmpresa");
    }

    public function index8()
    {
        session_start();
        $_SESSION['usuario'] = "VISITANTE";
        return view("cpfCadastrado");
    }

    public function index9()
    {
        session_start();
        $_SESSION['usuario'] = "VISITANTE";
        return view("termoDeUso");
    }

    public function index10()
    {
        session_start();
        
        return view("usuarioNaoCadastrado");
    }

    public function index11()
    {
        session_start();
        if(isset($_SESSION['usuario']) && $_SESSION['usuario'] == "ADMIN"){
            return view("novoAdmin");
        }else{
            return redirect("/acessoNegado");
        }
       
    }

    public function index12()
    {
        session_start();
        $_SESSION['usuario'] = "VISITANTE";
        return view("acessoNegado");
    }

    public function index13()
    {
        session_start();
        if(isset($_SESSION['usuario']) && $_SESSION['usuario'] == "ADMIN"){
            return view("darAcessoEpoderesAdmin");
        }else{
            return redirect("/acessoNegado");
        }
       
    }

    public function index14()
    {
        session_start();
        if(isset($_SESSION['usuario']) && $_SESSION['usuario'] == "ADMIN"){
            return view("darAcessoEmpresa");
        }else{
            return redirect("/acessoNegado");
        }
       
    }

    public function index15()
    {
        session_start();
        if(isset($_SESSION['usuario']) && $_SESSION['usuario'] == "EMPRESA"){
            return view("darAcessoColaborador");
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
        $empresa = new Empresa;
        $empresaBanco = new Empresa;
        $empresa->nomeEmpresa = strtoupper($request->nomeEmpresa);
        $empresa->cpfProprietario = $request->cpfProprietario;
        $empresa->nomeProprietario = strtoupper($request->nomeProprietario);
        $empresa->telefone = $request->telefone;
        $empresa->email = $request->email;
        $empresa->endereco = strtoupper($request->endereco);
        $empresa->ramo = strtoupper($request->ramo);
        $empresa->status = "DESATIVADO";
        $empresa->senha = base64_encode($request->senha);
        $empresaBanco = DB::table('empresas')->where('cpfProprietario', $empresa->cpfProprietario)->value('cpfProprietario', 'nomeProprietario', 'email', 'ramo');
        if($empresaBanco != null){
            return redirect("/cpfExistente");
        }else{
            session_start();
            $_SESSION['criarEmpresa'] = $empresa;
            return redirect("/termoResponsabilidade");
        }
        
    }

    public function create2(Request $request)
    {
        $selecao = $request->selecao;

        if($selecao == "ACEITAR"){
            session_start();
            $empresa = new Empresa;
            $empresa =  $_SESSION['criarEmpresa'];
           $empresa->save();
            $_SESSION['criarEmpresa'] == null;
           return redirect("/fazerLogin");

        }else{
            return redirect("/");
        }
        echo $selecao;
    }

    public function create3(Request $request)
    { 
        session_start();
        $usuario = new Usuario;
        $usuarioBanco = new Usuario;
        $empresaBanco = new Empresa;
        $usuario->cpf = $request->cpf;
        $request->cpfProprietario = $_SESSION['cpfProprietario'];
        $usuario->cpfProprietarioEmpresa = $request->cpfProprietario;
        $usuario->nome = strtoupper($request->nome);
        $usuario->status = "DESATIVADO";
        $usuario->email = $request->email;
        $usuario->senha = base64_encode($request->senha);
        $usuarioBanco = DB::table('usuarios')->where('cpf', $usuario->cpf)->value('cpf', 'nome', 'cpfProprietarioEmpresa', 'nomeEmpresa');
        $empresaBanco = DB::table('empresas')->where('cpfProprietario', $usuario->cpfProprietarioEmpresa)->value('nomeEmpresa', 'cpfProprietario',  'email', 'ramo');
        $usuario->nomeEmpresa = strtoupper($empresaBanco);
        if($empresaBanco != null && $usuarioBanco == null){
            $usuario->save();
            return redirect("areaDaEmpresa");
        }else{
            return redirect("/usuarioNaoCadastrado");
        }
        
    }

    public function create4(Request $request)
    {
        $admin = new Admin;
        $adminBanco = new Admin;
        $admin->nome = strtoupper($request->nome);
        $admin->cpf = $request->cpf;
        $admin->email = $request->email;
        $admin->status = "DESATIVADO";
        $admin->superPoderes = "NAO";
        $admin->senha = base64_encode($request->senha);
        $adminBanco = DB::table('admins')->where('cpf', $admin->cpf)->value('cpf', 'nome',  'email', 'status');
        if($adminBanco != null){
             return redirect("/cpfExistente");
        }else{
            $admin->save();
            return redirect("/fazerLogin");
        }
        echo $admin, " ", $adminBanco;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cpf = $request->cpf;
        $email = $request->email;
        $senha = base64_encode($request->senha);
        $tipo = $request->tipo;
        session_start();
        if($tipo == "ADMIN"){
            $adminCpfBanco = DB::table('admins')->where('cpf', $cpf)->value('cpf');
            $adminEmailBanco = DB::table('admins')->where('cpf', $cpf)->value('email');
            $adminSenhaBanco = DB::table('admins')->where('cpf', $cpf)->value('senha');
            $adminStatusBanco = DB::table('admins')->where('cpf', $cpf)->value('status');
            $adminNomeBanco = DB::table('admins')->where('cpf', $cpf)->value('nome');
            $adminSuperPoderesBanco = DB::table('admins')->where('cpf', $cpf)->value('superPoderes');
            if($adminCpfBanco == $cpf && $adminEmailBanco == $email && $adminSenhaBanco == $senha && $adminStatusBanco == "ATIVO"){
                $_SESSION['usuario'] = "ADMIN";
                $_SESSION['pessoa'] =  $adminNomeBanco; 
                $_SESSION['superPoderes'] =  $adminSuperPoderesBanco; 
                return redirect("/areaDoAdmin");
            }else{
                return redirect("/acessoNegado");
            }
        }else if($tipo == "COLABORADOR"){
            $colaboradorCpfBanco = DB::table('usuarios')->where('cpf', $cpf)->value('cpf');
            $colaboradorEmailBanco = DB::table('usuarios')->where('cpf', $cpf)->value('email');
            $colaboradorSenhaBanco = DB::table('usuarios')->where('cpf', $cpf)->value('senha');
            $colaboradorStatusBanco = DB::table('usuarios')->where('cpf', $cpf)->value('status');
            $colaboradorNomeBanco = DB::table('usuarios')->where('cpf', $cpf)->value('nome');
            $colaboradorCpfProprietarioEmpresaBanco = DB::table('usuarios')->where('cpf', $cpf)->value('cpfProprietarioEmpresa');
            $statusEmpresaBanco = DB::table('empresas')->where('cpfProprietario', $colaboradorCpfProprietarioEmpresaBanco)->value('status');
            if($statusEmpresaBanco == "ATIVO" && $colaboradorCpfBanco == $cpf && $colaboradorEmailBanco == $email && $colaboradorSenhaBanco == $senha && $colaboradorStatusBanco == "ATIVO"){
                $_SESSION['usuario'] = "COLABORADOR";
                $_SESSION['pessoa'] =  $colaboradorNomeBanco; 
                 
                return redirect("/areaDoColaborador");
            }else{
                return redirect("/acessoNegado");
            }
            }else if($tipo == "EMPRESA"){
            $empresaCpfBanco = DB::table('empresas')->where('cpfProprietario', $cpf)->value('cpfProprietario');
            $empresaEmailBanco = DB::table('empresas')->where('cpfProprietario', $cpf)->value('email');
            $empresaSenhaBanco = DB::table('empresas')->where('cpfProprietario', $cpf)->value('senha');
            $empresaStatusBanco = DB::table('empresas')->where('cpfProprietario', $cpf)->value('status');
            $empresaNomeBanco = DB::table('empresas')->where('cpfProprietario', $cpf)->value('nomeEmpresa');
           
            
            if($empresaCpfBanco == $cpf && $empresaEmailBanco == $email && $empresaSenhaBanco == $senha && $empresaStatusBanco == "ATIVO"){
                $_SESSION['usuario'] = "EMPRESA";
                $_SESSION['pessoa'] =  $empresaNomeBanco;
                $_SESSION['cpfProprietario'] = $empresaCpfBanco; 
                return redirect("/areaDaEmpresa");
            }else{
                return redirect("/acessoNegado");
            }

        }



        $empresaBanco = Empresa::where('cpfProprietario', 'LIKE',$cpf)->get();
        $usuarioBanco = Usuario::where('cpf', 'LIKE',$cpf)->get();
        
        
        
    }

    /**
     * Display the specified resource.
     *
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
    public function edit(Request $request)
    {
        $cpf = $request->cpf;
        $status = $request->status;
        $superPoderes = $request->superPoderes;
        $adminBanco = new Admin;
        $adminBanco = DB::table('admins')->where('cpf', $cpf)->value('cpf');
        if($adminBanco == null){
            return redirect("/usuarioNaoCadastrado");
        }else{
            DB::table('admins')->where('cpf', $cpf)->update(['status' => $status]);
            DB::table('admins')->where('cpf', $cpf)->update(['superPoderes' => $superPoderes]);
            return redirect("areaDoAdmin");
        }
        
        
    }

    public function edit2(Request $request)
    {
        $cpf = $request->cpf;
        $status = $request->status;
       
        $empresaBanco = new Admin;
        $empresaBanco = DB::table('empresas')->where('cpfProprietario', $cpf)->value('cpfProprietario');
        if($empresaBanco == null){
            return redirect("/usuarioNaoCadastrado");
        }else{
            DB::table('empresas')->where('cpfProprietario', $cpf)->update(['status' => $status]);
            return redirect("areaDoAdmin");
        }
        
        
    }

    public function edit3(Request $request)
    {
        $cpf = $request->cpf;
        $status = $request->status;
       
        $colaboradorBanco = new Usuario;
        $colaboradorBanco = DB::table('usuarios')->where('cpf', $cpf)->value('cpf');
        if($colaboradorBanco == null){
            return redirect("/usuarioNaoCadastrado");
        }else{
            DB::table('usuarios')->where('cpf', $cpf)->update(['status' => $status]);
            return redirect("areaDaEmpresa");
        }
        
        
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
