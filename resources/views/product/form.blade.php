@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')

    <div class="form">
        <div class="mt-5 p-5 w-50 mx-auto border">
            <form class="inline-form p-5" method="POST" action="{{ url('products/') }}">
                @csrf
                <div class="">
                    <label for="title">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mt-3">
                    <label for="title">Tag</label>
                    <select class="form-control" id="payment_method" name="payment_method" required>
                        <option value="{{$tag['name'] ?? ''}}">{{$tag['name'] ?? ''}}</option>
                        @foreach($tags as $tag)
                            <option value="{{$tag['name']}}">{{$tag['name']}}</option>
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
