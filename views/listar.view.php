<div class="app">
    <div class="nes-table-responsive">
        <div class="flex top">
            <h3 class="title"><i class="snes-jp-logo"></i> Lista de Jogos</h3>
            <a href="index.php?acao=cadastrar" class="nes-btn is-success mt-30">Cadastrar Jogo</a>
        </div>
            <?php if(sizeof($jogos) == 0): ?>
                <section class="message -left">
                    <div class="nes-balloon from-left">
                        <p>Não há jogos cadastrados!</p>
                    </div>
                </section>
            <?php else: ?>
            <table class="nes-table is-bordered is-centered mt-30">
                <thead>
                    <tr>
                        <th class="w-70">Jogo</th>
                        <th>Plataforma</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($jogos as $jogo): ?>
                        <tr>
                            <td><?= $jogo->titulo; ?></td>
                            <td><?= $jogo->plataforma; ?></td>
                            <td>
                                <div class="flex">
                                    <a href="#" class="nes-btn is-warning">Editar</a> &nbsp;
                                    <a href="index.php?acao=remover&id=<?= $jogo->id; ?>" class="nes-btn is-error white">X</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>