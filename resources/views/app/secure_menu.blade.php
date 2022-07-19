<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                
                <li class="nav-item" align="center">
                    <a class="nav-link" href=""> <span class="material-symbols-rounded">house</span><br />Principal</a>
                </li>
                <li class="nav-item" align="center">
                    <a class="nav-link" href="{{ route('app.categoria') }}"> <span class="material-symbols-rounded">category</span><br />Categorias</a>
                </li>
                <li class="nav-item" align="center">
                    <a class="nav-link" href=""><span class="material-symbols-rounded">qr_code_2</span><br />Produtos</a>
                </li>
                <li class="nav-item" align="center">
                    <a class="nav-link" href=""><span class="material-symbols-rounded">inventory</span><br />Estoque</a>
                </li>
                <li class="nav-item" align="center">
                    <a class="nav-link" href=""><span class="material-symbols-rounded">point_of_sale</span><br />Fluxo de Caixa</a>
                </li>
                <li class="nav-item" align="center">
                    <a class="nav-link" href=""><span class="material-symbols-rounded">payments</span><br />Vendas</a>
                </li>


                <li class="nav-item dropdown" align="center">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span class="material-symbols-rounded">handyman</span><br />Ferramentas</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href=""> <span class="material-symbols-rounded">manage_accounts</span> Gerenciamento de Usuários</a></li>
                        <li><a class="dropdown-item" href=""> <span class="material-symbols-rounded">workspace_premium</span> Controle de Acesso</a></li>
                        <hr>
                        <li><a class="dropdown-item" href=""> <span class="material-symbols-rounded">password</span> Gerenciamento de Senhas</a></li>
                        <li><a class="dropdown-item" href=""> <span class="material-symbols-rounded">lock_reset</span> Reset de Cadastro</a></li>
                    </ul>
                </li>
                
                
                <li class="nav-item" align="center">
                    <a class="nav-link" href="{{ route('principal') }}"><span class="material-symbols-rounded">logout</span><br /> Logout</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>