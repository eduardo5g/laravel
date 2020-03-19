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
        <input type="text" name="name" placeholder="Nome:" value="{{ old('name') }}">
        <input type="text" name="description" placeholder="Descrição:" value="{{ old('description') }}">
        <input type="file" name="filephoto">
        <button type="submit">Enviar</button>
    </form>
@endsection
