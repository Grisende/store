@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')

    <div class="form">
        <div class="mt-5 p-5 w-50 mx-auto border">
            <form class="inline-form p-5" method="POST" action="{{url('product-tags/')}}">
                @csrf
                <div class="">
                    <label for="title">Product</label>
                    <select class="form-control" id="product_id" name="product_id" required>
                        @foreach($products as $product)
                            <option value="{{$product['product_id']}}">{{$product['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="title">Tag</label>
                    <select class="form-control" id="tag_id" name="tag_id" required>
                        @foreach($tags as $tag)
                            <option value="{{$tag['tag_id']}}">{{$tag['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group text-center mt-5">
                    <a href="{{ url('products/') }}" class="btn btn-primary">Cancelar</a>
                    <button class="btn btn-primary ml-3"> Salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
