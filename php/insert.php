<?php
session_start();
   require_once 'db_connection.php';

   if(isset($_POST['btn-insert'])):
    $name = mysqli_escape_string($connection, $_POST['employer_name']);
    $birth_date = mysqli_escape_string($connection, $_POST['birth_date']);
    $admission_date = mysqli_escape_string($connection, $_POST['admission_date']);


    if(!empty($_POST['employer_post'])) {
        $selected = $_POST['employer_post'];
        $selected_text = null;
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


    $sql = "INSERT INTO DB_COMPANY.EMPLOYERS (EMPLOYER_NAME, BIRTH_DATE, ADMISSION_DATE, OCCUPATION)
    VALUES ('$name', '$birth_date', '$admission_date', '$post')";

   if(mysqli_query($connection, $sql)) {
       $_SESSION['mensagem'] = "Cadastrado com sucesso!";
     header('Location: ../index.php?sucesso');
    }
   else {
    $_SESSION['mensagem'] = "Erro ao cadastrar!";
     header('Location: ../index.php?erro');
    }
   endif;

?>