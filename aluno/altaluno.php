<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//aluno.css">
    <title>Document</title>
</head>
<body>

<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM aluno where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $idade = $array_retorno['idade'];
   $datanascimento = $array_retorno['datanascimento'];
   $endereco = $array_retorno['endereco'];
   $estatus = $array_retorno['estatus'];
   $curso = $array_retorno['curso'];
   $turma = $array_retorno['turma'];

   
?>
    <header style="margin-bottom: 20px">
         <h2> Edição de Alunos </h2>
    </header>

  <form id="form-alt" method="POST" action="crudaluno.php">

        <div class="linha">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id=""  value="<?php echo $nome; ?>" >
        
        <label for="idade">Idade</label>
        <input type="text" name="idade" id="" value="<?php echo $idade; ?>" >

        <label for="datanascimento">DN</label>
        <input type="text" name="datanascimento" id="" value="<?php echo $datanascimento; ?>" >

        </div>
        

        <div class="linha">
        <label for="endereco">Endereco</label>
        <input type="text" name="endereco" id="" value="<?php echo $endereco; ?>" >
        
        <label for="curso">Curso</label> 
        <input type="text" name="curso" id="" value="<?php echo $curso; ?>" >

        <label for="estatus">Status</label>
        <input type="text" name="estatus" id="" value="<?php echo $estatus; ?>" >
        
        <label for="turma">Turma</label>
        <input type="text" name="turma" id="" value="<?php echo $turma; ?>" >
        </div>

        <div class="linha">
        <input type="hidden" name="id" id="" value="<?php echo $id; ?>" >
        
        <input id="btm-alt" type="submit" name="update" value="Alterar">
        </div>
  </form>
</body>
</html>