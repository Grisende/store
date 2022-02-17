@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')

    <div class="mt-5 p-5">
        <div class="row p-3">
            <div class="col-sm-4">
                <div class="card bg-primary">
                    <h5 class="text-center mt-2" style="color: #FFFFFF"><i class="fas fa-cubes"> Produtos</i></h5>
                    <div class="card-body text-center">
                        <a href="/" class="btn btn-primary"><i class="fas fa-plus"> Adicionar</i></a>
                        <a href="{{url('products/')}}" class="btn btn-primary"><i class="fas fa-list"> Listar</i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-primary">
                    <h5 class="text-center mt-2" style="color: #FFFFFF"><i class="fas fa-tags"> Tags</i></h5>
                    <div class="card-body text-center">
                        <a href="#" class="btn btn-primary"><i class="fas fa-plus"> Adicionar</i></a>
                        <a href="#" class="btn btn-primary"><i class="fas fa-list"> Listar</i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-primary">
                    <h5 class="text-center mt-2" style="color: #FFFFFF"><i class="fas fa-file"> Relatórios</i></h5>
                    <div class="card-body text-center">
                        <div class="row">
                            <a href="#" class="btn btn-primary col-4"><i class="fas fa-file-export"> Produtos</i></a>
                            <a href="#" class="btn btn-primary col-4"><i class="fas fa-file-export"> Tags</i></a>
                            <a href="#" class="btn btn-primary col-4"><i class="fas fa-file-export"> Relevância</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
