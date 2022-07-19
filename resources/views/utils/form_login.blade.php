<div id="container">

    <div class="form-control">

        <h3>Insira as suas credenciais</h3>

        <form action="{{ route('app.categoria') }}" method="POST" class="form-control">
            @csrf
            <input type="text" name="usuario" placeholder="Usuário" class="form-control form-text">
            <br />
            <input type="password" name="senha" placeholder="Senha" class="form-control form-text">
            <br />
            <button type="submit" class="form-control btn-success">ENTRAR</button>
        </form>

    </div>
</div>
