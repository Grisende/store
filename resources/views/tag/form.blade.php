@extends('layouts.layout')

@section('title', 'Tags')

@section('content')

    <div class="form">
        <div class="mt-5 p-5 w-50 mx-auto border">
            @if(isset($tag))
                <form class="inline-form p-5" method="post" action="{{url('tags', $tag['tag_id'])}}">
                @method('PUT')
            @else
                <form class="inline-form p-5" method="POST" action="{{url('tags/')}}">
            @endif
            @csrf
                <div class="">
                    <label for="title">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$tag['name'] ?? ''}}" required>
                </div>
                <div class="form-group text-center mt-5">
                    <a href="{{ url('tags/') }}" class="btn btn-primary">Cancelar</a>
                    <button class="btn btn-primary ml-3"> Salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection

