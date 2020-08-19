<?php
include_once 'includes/header.php';


?>

<div class="row"> 
    <div class="col s12 m6 push-m3">
        <h3 class="light">Cadastrar Funcionário</h3>
        <form action = "php/insert.php" method="POST">
            <div class="input-field col s12">
              <input type="text" name="employer_name">
              <label for="employer_name"> Nome </label>
            </div>

            <div class="input-field col s12">
              <input type="date" name="birth_date">
              <label for="birth_date"> Data de Nascimento </label>
            </div>

            <div class="input-field col s12">
              <input type="date" name="admission_date">
              <label for="admission_date"> Data de Admissão </label>
            </div>

            <div class="input-field col s12">
             <select name="employer_post">
                <option value="developer">Desenvolvedor</option>
                <option value="manager">Gerente</option>
                <option value="auxiliary">Auxiliar</option>
             </select>
             <label>Cargo</label> 
            </div>
            <button type="submit" name="btn-insert" class="btn green">Cadastrar</button>
            <a href="index.php" class="btn light-blue darken-4" >Lista de Funcionários</a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php'
?> 