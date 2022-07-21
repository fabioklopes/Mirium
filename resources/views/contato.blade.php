@extends('utils.header')
@section('title', 'Contato')


@include('utils.main_menu')
@section('content')

    <div class="{{ $class }}">
        <strong>
            <h1>Contato</h1>
        </strong>
        <p>
            Entre em contato para solicitar um orçamento ou tirar alguma dúvida
        </p>
    </div>


    <div class="main">

        <h3 class="subtitle">Veja o que o seu novo sistema pode te oferecer</h3>

        <div class="cards-group">

            <div class="card">
                <span class="material-symbols-rounded icon-home">inventory</span>
                <p class="card-title"><strong>Estoques</strong></p>
                <hr class="separator">
                <p class="card-text">
                    Controle de estoque
                    <hr class="separator">
                    Sistema de compartilhamento de estoques
                    <hr class="separator">
                    Relatório geral ou por centro de custo
                    <hr class="separator">
                    Gestão de armazéns compartilhados
                </p>
            </div>

            <div class="card">
                <span class="material-symbols-rounded icon-home">qr_code_2</span>
                <p class="card-title"><strong>Produtos</strong></p>
                <hr class="separator">
                <p class="card-text">
                    Gestão de prazos de validade
                    <hr class="separator">
                    F.I.F.O.
                    <hr class="separator">
                    Inbound/Outbound
                    <hr class="separator">
                    ASM - Gerenciador do Sistema de Alertas
                </p>
            </div>

            <div class="card">
                <span class="material-symbols-rounded icon-home">category</span>
                <p class="card-title"><strong>Categorias</strong></p>
                <hr class="separator">
                <p class="card-text">
                    Criação de grupos ou categorias
                    <hr class="separator">
                    Filtros automáticos
                    <hr class="separator">
                    Classificação de prioridade
                </p>
            </div>

            <div class="card">
                <span class="material-symbols-rounded icon-home">groups</span>
                <p class="card-title"><strong>Grupo de Trabalho</strong></p>
                <hr class="separator">
                <p class="card-text">
                    Gerenciamento de projetos
                    <hr class="separator">
                    Organização de setores
                    <hr class="separator">
                    Administração de departamentos
                </p>
            </div>

            <div class="card">
                <span class="material-symbols-rounded icon-home">request_quote</span>
                <p class="card-title"><strong>Controle de Caixa</strong></p>
                <hr class="separator">
                <p class="card-text">
                    Controle de entrada e saída de notas fiscais
                    <hr class="separator">
                    Contas a pagar / Contas a receber
                    <hr class="separator">
                    Controle de forma de pagamento
                    <hr class="separator">
                    Controle de vendas
                    <hr class="separator">
                    Relatório de vendas por grupos / produtos
                </p>
            </div>









        </div>
    </div>
@endsection
