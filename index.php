<?php

require_once("config.php");
 #==========================================================================================================

#$sql = new Sql();

#$usuarios = $sql->select("SELECT * FROM tb_usuarios"); //mostra todas as tabelas.

#echo json_encode($usuarios);

#===========================================================================================================

#Carrega apenas um usuario

//$consulta = new Usuario();

//$consulta->loadById(2);

//echo $consulta;

#===========================================================================================================

#Carrrega todos ususarios do banco

//$lista = Usuario::getList();

//echo json_encode($lista);

#===========================================================================================================

#Carrega uma lista de usuarios buscando pelo login

//$search = Usuario::search("all");

//echo json_encode($search);

#===========================================================================================================

#Carrega um usuario com login e senha

$usuario = new Usuario();
$usuario->login("root","!@#$%");

echo $usuario;
?>