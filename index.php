<?php 
// Funções
require_once("Conexao.php");

$acao = $_GET["acao"] ?? "listar";

// Logica
$bd = Conexao::get();

if($acao == 'listar') {
    
    $query = $bd->prepare("SELECT * FROM jogos");
    $query->execute();
    $jogos = $query->fetchAll(PDO::FETCH_OBJ);

} else if($acao == 'gravar') {
    
    $query = $bd->prepare("INSERT INTO jogos(titulo, plataforma) VALUES(:titulo, :plataforma)");
    $query->bindParam(':titulo', $_POST['titulo']);
    $query->bindParam(':plataforma', $_POST['plataforma']);
    $query->execute();
    header('Location: /');

} else if($acao == 'remover') {
    $query = $bd->prepare("DELETE FROM jogos WHERE id = :id");
    $query->bindParam(':id', $_GET['id']);
    $query->execute();
    header('Location: /');
}

// UI
require_once("views.php");