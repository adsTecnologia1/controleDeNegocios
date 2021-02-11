@extends('templates.template')

@section('content')






<h5 class="text-center">Adicionar mercadoria ao estoque</h5>
<div class="container">
<form action="{{url('/criarEstoque')}}" method="post"  name="f1">
 @csrf 

  
  
   <label for="codigo"><b>Código</b></label>
    <input type="text" placeholder="Entre com código" name="codigo" required>
    
    <label for="tipo"><b>Tipo</b></label>
    <input  type="text" name="tipo" placeholder="Entre com tipo de mercadoria" required>
    <label for="qtd"><b>Quantidade</b></label>
    <input type="text" id="qtd" name="qtd" placeholder="Entre com a quantidade">
    <label for="tamanho"><b>Tamanho</b></label>
    
    <input type="text" name="tamanho" placeholder="Entre com tamanho " >

    
    <label for="cor"><b>Cor</b></label>
    <input type="text" placeholder="Entre com a cor" name="cor" required>
    

    

    <button type="submit">Enviar</button>
    
 

  

</form>
<div style="width: 100%;  margin-bottom: 150px;">
<button type="button" class="btn btn-primary" ><a style=" margin-bottom: 100px; font-size: 25px; color: #F0F8FF;" class="pac" id="pac" name="pac" href="{{url('/areaDaEmpresa')}}"  >Voltar</a></button>
<button type="button" class="btn btn-danger"><a style=" margin-bottom: 100px; font-size: 25px; color: #F0F8FF;" class="pac" id="pac" name="pac" href="{{url('/')}}"  >Sair</a></button>
 </div> 
 </div>
@endsection