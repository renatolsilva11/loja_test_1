<?php
session_start();
require_once 'db_connection.php';

if(isset($_POST['btn-delete'])):

  $sql = "SELECT * FROM EMPLOYERS ";
  $result = mysqli_query($connection, $sql);
  while($data = mysqli_fetch_array($result)):
      $id = $data['ID_EMPLOYER'];

  $sql_dlt = "DELETE FROM employers WHERE id_employer = $id";
  endwhile;

	if(mysqli_query($connection, $sql_dlt)):
    $_SESSION['mensagem'] = "Deletado com sucesso!";
    header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar!";
    header('Location: ../index.php');
  
endif;
endif;