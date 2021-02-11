@extends('templates.template')
<style type="text/css">
.pac {
    font-size: 30px;
    color: #F0F8FF;
  }
</style>

@section('content')



    <h5 class="text-center">Termos de uso</h5>
    <div class="container">
    <form action="{{url('/apagarEmpresa')}}" method="post">
    @csrf 
    <div>
    <label for="escolha"><b>Selecionar opção</b></label>
    <p><select id="selecao" name="selecao">
    <option value="ACEITAR">ACEITAR</option>
    <option value="NEGAR">NEGAR</option>
    
     
     
  
</select></p>
    </div>
  
    
    <button type="submit">Enviar</button>
    
  

  
    
</form>



</div>
@endsection