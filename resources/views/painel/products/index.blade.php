@extends('painel.app')

@section('title', 'Produtos')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">Produtos</h1>
        <div class="tollbar btn-toolbar mb-2 mb-md-0 float-right">
            <div class="btn-group mr-2">
                <a href="{{ route('products.create') }}" data-toggle="tooltip" data-placement="top" title="Novo" class="btn btn-dark"><i class="fas fa-user-plus"></i>
                    Novo</a>
            </div>
        </div>
    </div>

    <div id="toolbar">
        <div class="form-inline" role="form">

        </div>
    </div>

    <table data-toggle="table" id="table" class="table table-hover table-striped" data-search="true" data-show-refresh="true" data-show-fullscreen="true"
        data-show-columns="true" data-show-columns-toggle-all="true" data-show-export="true" data-click-to-select="true"
        data-pagination="true" data-id-field="id" data-page-list="[10, 25, 50, 100, all]" data-cookie="true"
        data-cookie-id-table="employee" data-toolbar="#toolbar" data-click-to-select="true" data-buttons-class="dark">
        <thead>
            <tr class="text-center">
                <th data-field="state" data-checkbox="true"></th>
                <th data-width="15" data-align="left">Imagem</th>
                <th data-align="left">Nome</th>

                <th>Ação</th>
            </tr>

        </thead>
        @foreach ($products as $product)
            <tr class="text-center">
                <td></td>
                <td style=""><img src="{{  asset('storage/' . $product->img_url) }}" alt="" class="img-fluid"></td>
                <td style="text-align:left">{{ $product->name }}</td>


                <td>
                    <a href="{{ route('products.show', $product->id) }}" data-toggle="tooltip" data-placement="top" title="Visualizar" class="btn btn-xs btn-dark ">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="JavaScript:void(0)" data-toggle="tooltip" data-placement="top" title="Deletar" data-href="{{ route('products.destroy', $product->id) }}" class="btn btn-xs btn-danger btn-delete">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
