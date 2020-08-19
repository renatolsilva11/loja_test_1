<?php
include_once 'includes/header.php';

include_once 'php/db_connection.php';

include_once 'includes/message.php';
?>

<div class="row"> 
    <div class="col s12 m6 push-m3">
        <h3 class="light">Funcionários</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome: </th>
                    <th>Data de nascimento: </th>
                    <th>Data de admissão: </th>
                    <th>Cargo: </th>
                </tr>
            </thead>

            <tbody>
            <?php
                $sql = "SELECT * FROM EMPLOYERS ";
                $result = mysqli_query($connection, $sql);
                
                if(mysqli_num_rows($result) > 0):

                while($data = mysqli_fetch_array($result)):
                    $datetime = date_create($data['BIRTH_DATE'])->format('d/m/Y');
                    $datetime2 = date_create($data['ADMISSION_DATE'])->format('d/m/Y');
                    //$nameemp = $data['ID_EMPLOYER'];
            ?>
            <tr>
                <td><?php echo $data['EMPLOYER_NAME']; ?></td>
                <td><?php echo $datetime; ?></td>
                <td><?php echo $datetime2; ?></td>
                <td><?php echo $data['OCCUPATION']; ?></td>
                <td> <a href="edit_employer.php?id=<?php echo $data['ID_EMPLOYER']; ?>" 
                class="btn-floating light-blue"/><i class="material-icons">edit</i></td>

                <td> <a href="#modal<?php echo $data['ID_EMPLOYER'];?>" class="btn-floating red modal-trigger"/>
                   <i class="material-icons">delete</i></td>
                   
                <div id="modal<?php echo $data['ID_EMPLOYER']; ?>" class="modal">
                <div class="modal-content">
                <h4>ATENÇÃO!</h4>
                <p>DESEJA REALMENTE EXCLUIR O REGISTRO?</p>
                </div>
                <div class="modal-footer">
                <form action = "php/delete.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $data['ID_EMPLOYER']; ?>">
                  <button type="submit" name="btn-delete" class="btn red">Sim, deletar</button>
                  <a href="#!" class="modal-action modal-close waves-effect 
                  waves-green btn-flat">Não, cancelar</a>
                </form>
</div>
    </div>
            </tr>
            <?php 
             endwhile;
             else :?>
             <tr>
               <td>-</td>
               <td>-</td>
               <td>-</td>
               <td>-</td>
             </tr>
            <?php
             endif;
            ?>

            </tbody>
                
        </table>
    <p>
    <a href="employer_add.php" class="btn">Adicionar Funcionário</a>
    </div>
</div>


<?php
include_once 'includes/footer.php'
?> 