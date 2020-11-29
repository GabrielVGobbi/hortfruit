@extends('painel.app')

@section('title', 'Cadastrar Produto')

@section('content')
    <div class="container">
        <h1 class="text-center">Novo Produto</h1>
        <div class="card mt-3">
            <form role="form" class="needs-validation" novalidate id="form" enctype="multipart/form-data" autocomplete="off" novalidate="novalidate"
                action="{{ route('products.store') }}" method="POST">
                @include('painel._partials.form_products')
            </form>
        </div>
    </div>
@stop
