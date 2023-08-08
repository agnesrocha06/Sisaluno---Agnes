<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//disciplina.css">
    <title>Alterar Cadastro</title>
</head>
<body>

<?php
    require_once('conexao-disciplina.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM disciplina where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nomedisciplina = $array_retorno['nomedisciplina'];
   $ch = $array_retorno['ch'];
   $semestre = $array_retorno['semestre'];
   $idprofessor = $array_retorno['idprofessor'];
  
?>
    <header style="margin-bottom: 20px">
         <h2> Edição de Disciplinas </h2>
    </header>

  <form id="form-alt" method="POST" action=".//cruddisciplina.php">

        <div class="linha">
        <label for="nome">Nome</label>
        <input style="width:215px;" type="text" name="nomedisciplina" id=""  value="<?php echo $nomedisciplina; ?>" >
        
        <label for="ch">CH</label>
        <input style="width:75px;" type="text" name="ch" id="" value="<?php echo $ch; ?>" >
        </div>

        <div class="linha">
        <label for="semestre">Semestre</label>
        <input style="width:90px;" type="text" name="semestre" id="" value="<?php echo $semestre; ?>" >

        <label for="idprof">ID do professor</label> 
        <input style="width:90px;" type="text" name="idprofessor" id="" value="<?php echo $idprofessor; ?>" >
        </div>

        <div class="linha">
        <input type="hidden" name="id" id="" value="<?php echo $id; ?>" >
        
        <input id="btm-alt" type="submit" name="update" value="Alterar">
        </div>
  </form>
</body>
</html>