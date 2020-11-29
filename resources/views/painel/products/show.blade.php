@extends('painel.app')

@section('title', 'Editar Produto')

@section('content')
    <div class="container">
        <h1 class="text-center">Editar Produto</h1>
        <div class="card mt-3">
            <form role="form" class="needs-validation" novalidate id="form" enctype="multipart/form-data" autocomplete="off" novalidate="novalidate"
                action="{{ route('products.update', $product->id) }}" method="POST">
                @method('PUT')
                @include('painel._partials.form_products')
            </form>
        </div>
    </div>
@stop
