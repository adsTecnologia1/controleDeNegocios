
@extends('templates.template')

@section('content')
<style type="text/css">
    .pac {
    font-size: 30px;
    color: #F0F8FF;
  }
</style>


    <h5 class="text-center">Área do colaborador</h5>
    <div style="width: 100%;  margin-bottom: 150px;" class="container">
    <button type="button" class="btn btn-primary"><a class="pac" id="pac" name="pac" href="{{url('/newVaccines')}}"  >Liberação ou bloqueio de acessos</a></button>
    <button type="button" class="btn btn-primary"><a class="pac" id="pac" name="pac" href="{{url('/buscarVacinaCpf')}}"  > Visualizar empresas em atraso</a></button>
    <button type="button" class="btn btn-primary"><a class="pac" id="pac" name="pac" href="{{url('/novoAdmin')}}"  >Adicionar um novo administrador </a></button>
    <button type="button" class="btn btn-danger"><a class="pac" id="pac" name="pac" href="{{url('/')}}"  >Sair</a></button>
    
        
    </div> 

@endsection





    



    
    
  
    
  

