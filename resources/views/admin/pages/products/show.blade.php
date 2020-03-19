@extends('admin.layout.app')

@section('title','Cadastrar Novo Produto')
@section('content')
<h1>Cadastro de novo produto: {{$product->id}}</h1>
<ul class="fa fa-list-ul" aria-hidden="true">
    <li>
      <strong>Nome: </strong> {{$product->name}}
    </li>
    <li>
        <strong>Preço: </strong> {{$product->price}}
    </li>
    <li>
        <strong>Descrição: </strong>{{$product->description}}
    </li>

</ul>
@endsection
