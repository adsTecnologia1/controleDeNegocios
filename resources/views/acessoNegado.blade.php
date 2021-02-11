@extends('templates.template')

@section('content')
    <h5 id="negado2" name="negado2" class="text-center negado2" color="red">Ops não foi possível entrar no sistema!</h5>
    <button  id="negado" name="negado" class="negado"><a href="{{url('/fazerLogin')}}" id="negado3" name="negado3" class="negado3">Voltar</a></button>
@endsection