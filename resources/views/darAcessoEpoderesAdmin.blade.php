@extends('templates.template')

@section('content')






<h5 class="text-center">Liberação de acesso e super poderes de admin</h5>
<div class="container">
<form action="{{url('/criarLiberacaoEprevilegios')}}" method="post" name="f1" >
 @csrf 

  
  
   
    
    <label for="cpf"><b>CPF</b></label>
    <input onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" type="text" name="cpf" required>
    
    
    
    
    <div>
    <label for="poder"><b>Super poderes</b></label>
    <p><select id="superPoderes" name="superPoderes">
    <option value="SIM">SIM</option>
    <option value="NAO">NÂO</option>
    </select></p>

    <label for="status"><b>Status</b></label>
    <p><select id="status" name="status">
    <option value="ATIVO">ATIVO</option>
    <option value="DESATIVADO">DESATIVADO</option>
    
     
     
  
</select></p>
    </div>
    

    

    <button type="submit">Alterar</button>
    
  

  

</form>
<div style="width: 100%;  margin-bottom: 150px;">
<button type="button" class="btn btn-primary" ><a style=" margin-bottom: 100px; font-size: 25px; color: #F0F8FF;" class="pac" id="pac" name="pac" href="{{url('/areaDoAdmin')}}"  >Voltar</a></button>
<button type="button" class="btn btn-danger"><a style=" margin-bottom: 100px; font-size: 25px; color: #F0F8FF;" class="pac" id="pac" name="pac" href="{{url('/')}}"  >Sair</a></button>
 </div> 
 </div>

</div
@endsection