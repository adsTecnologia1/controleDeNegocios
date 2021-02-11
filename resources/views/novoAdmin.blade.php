@extends('templates.template')

@section('content')






<h5 class="text-center">Novo administrador</h5>
<div class="container">
<form action="{{url('/criarNovoAdmin')}}" method="post" name="f1" >
 @csrf 

  
  
   <label for="name"><b>Nome</b></label>
    <input type="text" placeholder="Entre com nome" name="nome" required>
    
    <label for="cpf"><b>CPF</b></label>
    <input onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" type="text" name="cpf" required>
    <label for="email"><b>Email</b></label>
    <table>
<tr>
<td>

<input type="text" name="email" onblur="validacaoEmail(f1.email)"  maxlength="60" size='65'>
</td>
<td>
<div id="msgemail"></div>
</td>
</tr>
</table>
    
    
    
    <label for="psw"><b>Password</b></label>
    <p><input type="password" placeholder="Entre com Password" name="senha" required></p>
    

    

    <button type="submit">Criar novo usuário</button>
    
  

  

</form>
<div style="width: 100%;  margin-bottom: 150px;">
<button type="button" class="btn btn-primary" ><a style=" margin-bottom: 100px; font-size: 25px; color: #F0F8FF;" class="pac" id="pac" name="pac" href="{{url('/areaDoAdmin')}}"  >Voltar</a></button>
<button type="button" class="btn btn-danger"><a style=" margin-bottom: 100px; font-size: 25px; color: #F0F8FF;" class="pac" id="pac" name="pac" href="{{url('/')}}"  >Sair</a></button>
 </div> 
 </div>

</div>
@endsection