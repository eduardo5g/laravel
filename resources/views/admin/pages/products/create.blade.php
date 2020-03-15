@extends('admin.layout.app')

@section('title','Cadastrar Novo Produto')
@section('content')
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <ul class="error">
                <li class="err">
                    {{ $error }}
                </li>
            </ul>
        @endforeach
    @endif
    <h1>Cadastro de novo produto</h1>
<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição:">
        <input type="file" name="filephoto">
        <button type="submit">Enviar</button>
    </form>
@endsection
