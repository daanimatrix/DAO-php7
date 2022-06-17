<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM mafiscred1.usuario;");

echo json_encode($usuarios);

?>