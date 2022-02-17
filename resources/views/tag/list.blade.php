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
                    <th scope="col">Código da Tag</th>
                    <th scope="col">Nome da Tag</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag['id']}}</td>
                        <td>{{$tag['name']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
