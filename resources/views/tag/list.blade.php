@extends('layouts.layout')

@section('title', 'Produtos')

@section('content')


    <div class="tags" style="padding: 10em 10em 10em; color: #FFFFFF; margin-top: -5em">
        <div class="table-content">
            <div class="add-purchase">
                <a href="{{url('/')}}" class="btn btn-primary"><i class="fas fa-arrow-left"> Voltar</i></a>
                <a href="{{url('tags/form')}}" class="btn btn-primary"><i class="fas fa-plus"> Novo</i></a>
            </div>
            <table class="table table-responsive mt-3">
                @csrf
                <thead>
                <tr>
                    <th>Código da Tag</th>
                    <th>Nome da Tag</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag['tag_id']}}</td>
                        <td>{{$tag['name']}}</td>
                        <td><a href="{{url('tags', $tag['tag_id'])}}"><i class="fas fa-edit"></i></a></td>
                        <td><a href="{{url('tags', $tag['tag_id'])}}" class="js-del-tags"><i class="fas fa-trash"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
