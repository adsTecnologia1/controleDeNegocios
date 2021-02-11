@extends('templates.template')

@section('content')
    <?php if($_SESSION['usuario'] == "ADMIN"){ ?>
    <h5 id="negado2" name="negado2" class="text-center negado2" color="red">Ops o adminstrador não foi salvo no sistema!</h5>
    <button  id="negado" name="negado" class="negado"><a href="{{url('/areaDoAdmin')}}" id="negado3" name="negado3" class="negado3">Voltar</a></button>

    <?php }else if($_SESSION['usuario'] == "COLABORADOR"){ ?>
        <h5 id="negado2" name="negado2" class="text-center negado2" color="red">Ops o novo usuário não foi salvo no sistema!</h5>
    <button  id="negado" name="negado" class="negado"><a href="{{url('/areaDoColaborador')}}" id="negado3" name="negado3" class="negado3">Voltar</a></button>
    <?php }else if($_SESSION['usuario'] == "EMPRESA"){ ?>
        <h5 id="negado2" name="negado2" class="text-center negado2" color="red">Ops o novo usuário não foi salvo no sistema!</h5>
    <button  id="negado" name="negado" class="negado"><a href="{{url('/areaDaEmpresa')}}" id="negado3" name="negado3" class="negado3">Voltar</a></button>
    <?php } ?>
    
    
@endsection