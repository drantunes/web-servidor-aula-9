<div class="app">
    <div class="is-rounded">
        <h3 class="title"><i class="snes-jp-logo"></i> Novo usuário</h3>
        <form method="POST" action="/jogos/gravar">
            <div class="nes-field">
                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" class="nes-input">
            </div>
            <div class="nes-field mt-30">
                <label for="plataforma">Plataforma</label>
                <input type="text" name="plataforma" id="plataforma" class="nes-input">
            </div>
            <a href="/jogos/listar" class="nes-btn mt-30">Voltar aos jogos</a>
            <button class="nes-btn is-success mt-30">Cadastrar usuário</button>
        </form>
    </div>
</div>