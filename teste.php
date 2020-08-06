<?php

require_once("Conexao.php");

$bd->query("UPDATE usuarios SET nome = 'Andre 1' WHERE id = 2");