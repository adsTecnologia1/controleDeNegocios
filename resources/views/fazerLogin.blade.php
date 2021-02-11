@extends('templates.template')

@section('content')



    <h5 class="text-center">Login</h5>
    <form name="f1" action="{{url('/entrarNoSistema')}}" method="post" style=" margin-bottom: 150px;">
    @csrf 

  <div class="container">
    <label for="uname"><b>CPF</b></label>
    <input onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" type="text" name="cpf"   required>
    <label for="email"><b>Email </b></label>
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
    <input type="password" placeholder="Entre com Password" name="senha" required>
    
    <label for="tipo"><b>Tipo de usuário</b></label>
    <p><select id="tipo" name="tipo">
     <option value="ADMIN">ADMIN</option>
     <option value="COLABORADOR">COLABORADOR</option>
     <option value="EMPRESA">EMPRESA</option>
  
</select></p>
    <button type="submit">Entrar</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    
    <span class="psw">Esqueceu   <a href="{{url('/recoverPassword')}}">dados de login?</a></span>
  </div>

</form>
@endsection