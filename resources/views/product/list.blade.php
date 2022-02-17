@extends('layouts.layout')

@section('title', 'Produtos')

@section('content')


    <div class="products" style="padding: 10em 10em 10em; color: #FFFFFF; margin-top: -5em">
        <div class="table-content">
            <div class="add-purchase">
                <a href=""><i class="btn btn-primary fas fa-plus"> Novo</i></a>
            </div>
            <table class="table table-responsive mt-3">
                @csrf
                <thead>
                <tr>
                    <th scope="col">Código do Produto</th>
                    <th scope="col">Nome do Produto</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{$product['id']}}</td>
                        <td>{{$product['name']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
