<?php

session_start();

$host = "localhost";
$dbname = "bdvendas";
$user = "root";
$pass = "";

$ligacao_bd = new mysqli($host,$user,$pass,$dbname);

if($ligacao_bd->connect_errno){
    echo ("Erro na ligação à base de dados!!! Erro: ".$ligacao_bd->connect_error);
    exit();
}

?>