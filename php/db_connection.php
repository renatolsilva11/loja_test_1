<?php
// constante
$server = "localhost";
$username = "root";
$password = "";
$db = "DB_COMPANY";

// conexao com banco
$connection = mysqli_connect($server,$username,$password,$db);
mysqli_set_charset($connection, "utf8");

if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;

?>
