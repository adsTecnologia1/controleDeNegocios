@extends('templates.template')

@section('content')
<script type="text/javascript"> 
function verifica(){
	var option = document.getElementById("opcoes").value;
  if(option == 0){
    document.getElementById("codigo").disabled = true ;
    document.getElementById("tipo").disabled = true;
    document.getElementById("cor").disabled = true;
    document.getElementById("tamanho").disabled = true;
  }else if(option == 1){
    document.getElementById("codigo").disabled = false;
    document.getElementById("tipo").disabled = true;
    document.getElementById("cor").disabled = true;
    document.getElementById("tamanho").disabled = true;
    
  }else if(option == 2){
    document.getElementById("codigo").disabled = false;
    document.getElementById("tipo").disabled = false;
    document.getElementById("cor").disabled = false;
    document.getElementById("tamanho").disabled =false;
  }else if(option == 3){
    document.getElementById("codigo").disabled = false;
    document.getElementById("tipo").disabled = false;
    document.getElementById("cor").disabled = true;
    document.getElementById("tamanho").disabled =false;
  }else if(option == 4){
    document.getElementById("codigo").disabled = false;
    document.getElementById("tipo").disabled = false;
    document.getElementById("cor").disabled = false;
    document.getElementById("tamanho").disabled = true;
  }else if(option == 5){
    document.getElementById("codigo").disabled = false;
    document.getElementById("tipo").disabled = false;
    document.getElementById("cor").disabled = true;
    document.getElementById("tamanho").disabled =true;
  }
};
</script>


    <h5 class="text-center">Buscar estoque</h5>
    <div class="container">
    <form name="f1" action="{{url('/mostrarEstoque')}}" method="post" 
    >
    @csrf 
    <label for="tipoBusca"><b>Filtro de busca </b></label>
    <p><select size="1" id="opcoes" name="opcoes" onchange="verifica()">
            <option value="0">Buscar todas mercadorias do estoque</option>  
            <option value="1">Busca todas mercadoria com mesmo código</option> 
            <option value="2">Busca de mercadoria por cores, tamanho e tipo</option>
            <option value="3">Busca de mercadoria por  tipo e tamanho</option>
            <option value="4">Busca de mercadoria por  tipo e cor</option> 
            <option value="5">Busca de mercadoria por  tipo</option>  
                       
        </select></p>
    <div id="divCodigo">
    <label for="codigo"><b>Codigo da mercadoria </b></label>
    <input type="text" name="codigo" id="codigo" placeholder="Entre com código da mercadoria" disabled required>
    </div>
    <div id="divTipo">
    <label for="tipo"><b>Tipo da mercadoria ou modelo </b></label>
    <input type="text" name="tipo" id="tipo" placeholder="Entre com tipo ou modelo da mercadoria" disabled required>
    </div^>
    <div id="divTamanho">
    <label for="tamanho"><b>Tamanho da mercadoria  </b></label>
    <input type="text" name="tamanho" id="tamanho" placeholder="Entre com tamanho da mercadoria" disabled  required>
    </div>
    <div id="divCor">
    <label for="cor"><b>Cor da mercadoria  </b></label>
    <input type="text" name="cor" id="cor" placeholder="Entre com cor da mercadoria" disabled required>
    </div>
    <button type="submit">Buscar</button>
    
</form>
<div style="width: 100%;  margin-bottom: 150px;" id="btn">
<?php if($_SESSION['usuario'] == "COLABORADOR"){ ?>
<button type="button" class="btn btn-primary" ><a style=" margin-bottom: 100px; font-size: 25px; color: #F0F8FF;" class="pac" id="pac" name="pac"  href="{{url('/areaDoColaborador')}} " >Voltar</a></button>
<?php }else if($_SESSION['usuario'] == "EMPRESA"){ ?>
<button type="button" class="btn btn-primary" ><a style=" margin-bottom: 100px; font-size: 25px; color: #F0F8FF;" class="pac" id="pac" name="pac"  href="{{url('/areaDaEmpresa')}} " >Voltar</a></button>
<?php } ?>
<button type="button" class="btn btn-danger"><a style=" margin-bottom: 100px; font-size: 25px; color: #F0F8FF;" class="pac" id="pac" name="pac" href="{{url('/')}}"  >Sair</a></button>
 </div> 
 </div>

</div>
</div>
@endsection