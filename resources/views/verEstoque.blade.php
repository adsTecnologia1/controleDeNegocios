@extends('templates.template')

@section('content')

<h5 class="text-center">Visualização de estoque</h5>
<div class="container" style="width: 100%;  margin-bottom: 150px;">
    <table class="table table-sm table-dark">
  <thead>
    <tr>
      
      <th class="text-center" scope="col">Código</th>
      <th class="text-center" class="text-center" scope="col">Tipo</th>
      <th class="text-center" scope="col">Quantidade</th>
      <th class="text-center" scope="col">Tamanho</th>
      <th class="text-center" scope="col">Cor</th>
      <th class="text-center" scope="col">Data entrada</th>
    </tr>
  </thead>
  <?php foreach ($_SESSION['estoqueBanco'] as $value){ $data = date('d/m/Y', strtotime($value->dataEntrada));?>
  <tbody>
    <tr>
      
      <td class="text-center"><?php echo $value->codigo;  ?></td>
      <td class="text-center"><?php  echo $value->tipo;  ?></td>
      <td class="text-center"><?php echo $value->qtd;  ?></td>
      <td class="text-center"><?php echo $value->tamanho;  ?></td>
      <td class="text-center"><?php echo $value->cor;  ?></td>
      <td class="text-center"><?php echo $data;  ?></td>
    </tr>
    
  </tbody>
  <?php } ?>
</table>
<button type="button" class="btn btn-primary" ><a style=" margin-bottom: 100px; font-size: 25px; color: #F0F8FF;" class="pac" id="pac" name="pac" href="{{url('/areaDaEmpresa')}}"  >Voltar</a></button>
<button type="button" class="btn btn-danger"><a style=" margin-bottom: 150px; font-size: 25px; color: #F0F8FF;" class="pac" id="pac" name="pac" href="{{url('/')}}"  >Sair</a></button>  
</div>
@endsection


