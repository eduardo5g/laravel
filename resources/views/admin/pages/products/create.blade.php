@extends('admin.layout.app')

@section('title','Cadastrar Novo Produto')
@section('content')
    <h1>Cadastro de novo produto</h1>
<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data"
        @csrf
        <input type="text" name="name" id="name" placeholder="Nome:">
        <input type="text" name="description" id="description" placeholder="Descrição:">
        <button type="submit">Enviar</button>
    </form>
@endsection
