<?php
include_once 'php/db_connection.php';

include_once 'includes/header.php';

if(isset($_GET['id'])):
  $id = mysqli_escape_string($connection, $_GET['id']);
  $sql = "SELECT * FROM EMPLOYERS WHERE ID_EMPLOYER = '$id'";
  $result = mysqli_query($connection, $sql);
  $data = mysqli_fetch_array($result);
  $select_position = $data['OCCUPATION'];

endif;
?>

<div class="row"> 
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Funcionário</h3>
        <form action = "php/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['ID_EMPLOYER'] ?>">
            <div class="input-field col s12">
              <input type="text" name="employer_name" value="<?php echo $data['EMPLOYER_NAME'];?>">
              <label for="employer_name"> Nome </label>
            </div>

            <div class="input-field col s12">
              <input type="date" name="birth_date" value=<?php echo $data['BIRTH_DATE']; ?>">
              <label for="birth_date"> Data de Nascimento </label>
            </div>

            <div class="input-field col s12">
              <input type="date" name="admission_date" value=<?php echo $data['ADMISSION_DATE']; ?>">
              <label for="admission_date"> Data de Admissão </label>
            </div>

            <div class="input-field col s12">
             <select name="employer_post">
             <option value="developer" <?php if( $data['OCCUPATION'] == 'Desenvolvedor'): ?>
             selected = "selected" <?php endif; ?> > Desenvolvedor</option>
             <option value="manager" <?php if( $data['OCCUPATION'] == 'Gerente'): ?>
             selected = "selected" <?php endif; ?> > Gerente</option>
             <option value="auxiliary" <?php if($data['OCCUPATION'] == 'Auxiliar'): ?>
             selected = "selected" <?php endif; ?> >Auxiliar</option>
             </select>
             <label>Cargo</label> 
            </div>
            <button type="submit" name="btn-update" class="btn green">Atualizar</button>
            <a href="index.php" class="btn light-blue darken-4" >Lista de Funcionários</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?> 