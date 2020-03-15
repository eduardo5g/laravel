@extends('admin.layout.app')
@section('title')
    {{-- @if ($title=== null)
        $title
    @else
        Index admin Controler
    @endif --}}
        @isset($title)
            $title
        @else
            Index admin Controller
        @endisset
@endsection
@section('content')
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
@endpush
