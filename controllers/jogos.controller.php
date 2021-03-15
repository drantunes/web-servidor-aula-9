<?php
    // Banco de Dados
    require_once("Conexao.php");
    $bd = Conexao::get();

    // Ações
    if ($acao == 'listar') {

        $query = $bd->prepare("SELECT * FROM jogos");
        $query->execute();
        $jogos = $query->fetchAll(PDO::FETCH_OBJ);

    } else if ($acao == 'gravar') {

        $query = $bd->prepare("INSERT INTO jogos(titulo, plataforma) VALUES(:titulo, :plataforma)");
        $query->bindParam(':titulo', $_POST['titulo']);
        $query->bindParam(':plataforma', $_POST['plataforma']);
        $query->execute();
        header('Location: /jogos/listar');

    } else if ($acao == 'remover') {
        $query = $bd->prepare("DELETE FROM jogos WHERE id = :id");
        $query->bindParam(':id', $_GET['id']);
        $query->execute();

        header('Location: /jogos/listar');
    }



    // Lógica do Controller

    // Renderiza a View
    require_once("views.php");
