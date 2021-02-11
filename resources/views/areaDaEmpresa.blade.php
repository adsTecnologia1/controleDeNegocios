
@extends('templates.template')

@section('content')
<style type="text/css">
    .pac {
    font-size: 30px;
    color: #F0F8FF;
  }
</style>


    <h5 class="text-center">Área da empresa</h5>
    <div style="width: 100%;  margin-bottom: 150px;" class="container">
    <button type="button" class="btn btn-primary"><a class="pac" id="pac" name="pac" href="{{url('/adicionarEstoque')}}"  >Adicionar mercadoria no estoque </a></button>
    <button type="button" class="btn btn-primary"><a class="pac" id="pac" name="pac" href="{{url('/novoUsuario')}}"  >Adicionar novo colaborador</a></button>
    <button type="button" class="btn btn-primary"><a class="pac" id="pac" name="pac" href="{{url('/buscaDeEstoque')}}"  >Buscar mercadoria em estoque </a></button>
    <button type="button" class="btn btn-primary"><a class="pac" id="pac" name="pac" href="{{url('/liberarAcessoColaborador')}}"  > Liberar acesso de colaborador</a></button>
    
    
   
    
    <button type="button" class="btn btn-danger"><a class="pac" id="pac" name="pac" href="{{url('/')}}"  >Sair</a></button>
    
        
    </div> 

@endsection





    



    
    
  
    
  

