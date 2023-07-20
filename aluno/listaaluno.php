
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//aluno.css">
    <title>Lista de Alunos</title>
</head>
<body>
    
<header style="margin-bottom: 20px">
         <h2> Lista de Alunos </h2>
    </header>
    
    <?php 

  require_once( 'conexao.php');

   
  $retorno = $conexao->prepare('SELECT * FROM aluno');
  $retorno->execute();

?>       
        <table id="table-lista"> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>IDADE</th>
                    <th>ENDERECO</th>
                    <th>CURSO</th>
                    <th>TELEFONE</th>
                    <th>TURMA</th>
                </tr>
            </thead>

            <tbody style="text-align: center; align-items:center;">
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td id="table-linhaum"> <?php echo $value['id'] ?>   </td> 
                            <td id="table-linhaum"> <?php echo $value['nome']?>  </td> 
                            <td id="table-linhaum"> <?php echo $value['idade']?> </td> 
                            <td id="table-linhaum"> <?php echo $value['endereco']?> </td> 
                            <td id="table-linhaum"> <?php echo $value['curso']?> </td> 
                            <td id="table-linhaum"> <?php echo $value['telefone']?> </td> 
                            <td id="table-linhaum"> <?php echo $value['turma']?> </td> 

                            <td>
                               <form method="POST" action="altaluno.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button id="btm-form" name="alterar"  type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action=".//crudaluno.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button id="btm-form" name="excluir"  type="submit">Excluir</button>
                                </form>

                             </td> 
                             <div class="btm-voltar"></div>
                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>

        <div class="rodape">
            <?php         
                echo"<br>";
                echo "<button class='button3'><a href='index.php'>Voltar</a></button>";
            ?>
        </div>
</body>
</html>