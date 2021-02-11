@extends('templates.template')

@section('content')






<h5 class="text-center">Nova empresa</h5>
<form action="{{url('/criarNovaEmpresa')}}" method="post" style=" margin-bottom:150px;" name="f1">
 @csrf 

  <div class="container">
  
   <label for="name"><b>Nome da empresa</b></label>
    <input type="text" placeholder="Entre com nome da empresa" name="nomeEmpresa" required>
    <label for="name"><b>Nome proprietário da empresa</b></label>
    <input type="text" placeholder="Entre com nome do proprietário da empresa" name="nomeProprietario" required>
    <label for="cpf"><b>CPF proprietário</b></label>
    <input onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" type="text" name="cpfProprietario" required>
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
    

    <label for="telefone"><b>Telefone</b></label>
    
    <input type="text" name="telefone"   id="telefone" maxlength="15" required/>
    <label for="endereco"><b>Endereço</b></label>
    <input type="text" placeholder="Entre com endereço da empresa" name="endereco" required>
    
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Entre com Password" name="senha" required>
    <div>
    <label for="ramo"><b>ramo</b></label>
    <p><select id="ramo" name="ramo">
    <option value="alimentos">COMERCIO DE ALIMENTOS</option>
    <option value="eletronico">COMERCIO DE ELETRÔNICOS</option>
     <option value="vestuario">COMERCIO DE VESTUÁRIOS</option>
     
     
  
</select></p>
    </div>

    

    <button type="submit">Registrar empresa</button>
    
  </div>

  

</form>
@endsection