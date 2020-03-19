@extends('admin.layout.app')
{{-- @component('admin.components.card')
@slot('title_card')
    <h1>Título do card</h1>
@endslot
Card de exemplo para: admin.components.card
@endcomponent --}}
<div class="cadastro"><a href="{{ route('products.create') }}" class="btn btn-primary" >Cadastrar produto</a></div>
@include('admin.alerts.alert',['mensage_alert'=> 'Mensagem de alerta setada em admin.pages.products.index'])
@section('title')
        @isset($title)
            $title
        @else
            Index admin Controller
        @endisset
@endsection
@section('content')
        <table class="product table table-striped">
            <thead>
            <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $item)
        <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->price }}</td>
        <td><a href="{{ route('products.show', $item->id) }}" class="product_description">Detalhe</a></td>
        </tr>
        @endforeach
    </tbody>
        </table>
        {!! $products->links() !!}
@endsection

{{--
    @component('admin.components.card')
        @slot('title_card')
            Título do card
        @endslot
        Card de exemplo para: admin.components.card
    @endcomponent
    <div class="cadastro"><a href="{{ route('products.create') }}">Cadastrar produto</a></div>
    @include('admin.alerts.alert',['mensage_alert'=> 'Mensagem de alerta setada em admin.pages.products.index'])
    <div><span>{{ $teste }}</span></div>
@endsection
@section('teste2')
    @forelse ($teste2 as $item)
        <p>{{ $item }}</p>
    @empty
        <div><span>variavel '$teste2' não existe</span></div>
    @endforelse
@endsection

@push('style')
        body{
            backgound-color:#333;
        }
@endpush --}}
