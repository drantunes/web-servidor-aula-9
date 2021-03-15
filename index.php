<?php
    // Exemplo de rota: /jogos/listar

    // Quebramos a rota em um array 
    $rota = explode('/', substr($_SERVER['REQUEST_URI'], 1));
    // $rota[0] é o recurso | $rota[1] é a ação
    // Como não temos index, se o recurso for / então carregamos a página padrão "jogos" 
    $recurso = empty($rota[0]) ? 'jogos' : $rota[0];
    // Criarmos o controlador dinamicamente para o $recurso
    $controlador = "controllers/$recurso.controller.php";
    // Então, salvamos a ação. Caso não haja ação, o padrão é listar (index)
    $acao = empty($rota[1]) ? "listar" : $rota[1];

    if (file_exists($controlador)) {
        require($controlador);
    } else {
        require("controllers/404.controller.php");
    }