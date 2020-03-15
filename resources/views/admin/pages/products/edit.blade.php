@extends('admin.layout.app')

@section('title','Cadastrar Novo Produto')
@section('content')
<h1>Cadastro de novo produto: {{$id}}</h1>
<form action="{{ route('products.update', $id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="text" name="name" id="name" placeholder="Nome:">
        <input type="text" name="description" id="description" placeholder="Descrição:">
        <input type="file" name="filephoto" id="filephoto" placeholder="Descrição:">
        <button type="submit">Enviar</button>
    </form>
@endsection
