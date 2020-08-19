<?php
session_start();
   require_once 'db_connection.php';

   if(isset($_POST['btn-update'])):
          $birth_date = mysqli_escape_string($connection, $_POST['birth_date']);
          $admission_date = mysqli_escape_string($connection, $_POST['admission_date']);
          $name = mysqli_escape_string($connection, $_POST['employer_name']);
          $id = mysqli_escape_string($connection, $_POST['id']);
          if(!empty($_POST['employer_post'])) {
              $selected = $_POST['employer_post'];
              if($selected == 'developer') {
                  $selected_text = "Desenvolvedor";
              }
              else if($selected == 'manager'){
                  $selected_text = "Gerente";
              }
              else if($selected == 'auxiliary') {
                  $selected_text = "Auxiliar";
              }
          } else {
              $selected_text = "Cargo Não Informado";
          }
          $post = mysqli_escape_string($connection, $selected_text); 
          $birth_date = mysqli_escape_string($connection, $_POST['birth_date']);
          $admission_date = mysqli_escape_string($connection, $_POST['admission_date']);

      $sql_updt = "UPDATE EMPLOYERS SET EMPLOYER_NAME = '$name', BIRTH_DATE = '$birth_date',
      ADMISSION_DATE = '$admission_date', OCCUPATION = '$post' WHERE id_employer = $id";

    
        if(mysqli_query($connection, $sql_updt)){
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php');
        }
        else{
            $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location: ../index.php');
        } 
    endif;
?>