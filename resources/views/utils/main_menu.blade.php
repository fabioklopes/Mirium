<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('principal') }}">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servicos') }}">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contato') }}">Contato</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Área
                        Segura</a>
                    <ul class="dropdown-menu">
                        {{-- <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Login</a></li> --}}
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                        <li>
                            <hr>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('cadastro') }}">Cadastre-se</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Área Segura</h4>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> --}}
            </div>

            <div class="modal-body">
                O sistema de login está em manutenção. Retorne mais tarde e se o problema ainda persistir, por favor,
                informe o administrador.
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
            </div>

        </div>
    </div>
</div>
