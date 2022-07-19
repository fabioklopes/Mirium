@extends('utils.header')
@section('title', 'Página Inicial')
   

@include('utils.main_menu')
@section('content')    
    <div class="bg-img container-fluid p-5 bg-primary text-white text-center">
        <h1>Sistema Mirium</h1>
        <p>Gerenciamento completo de estoques</p>
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3">
                <h3>Estoque Atual</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-3">
                <h3>Produtos</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-3">
                <h3>Categorias</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-3">
                <h3>Usuários Cadastrados</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
        </div>
    </div>
@endsection