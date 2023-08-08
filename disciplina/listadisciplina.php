
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//disciplina.css">
    <title>Lista de Disciplinas</title>
</head>
<body>
    
<header style="margin-bottom: 20px">
         <h2> Lista de Disciplinas </h2>
    </header>
    
    <?php 

  require_once('conexao-disciplina.php');

   
  $retorno = $conexao->prepare('SELECT * FROM disciplina');
  $retorno->execute();

?>       
        <table id="table-lista"> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>CH</th>
                    <th>SEMESTRE</th>
                    <th>ID PROF</th>
                </tr>
            </thead>

            <tbody style="text-align: center; align-items:center;">
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td id="table-linhaum"> <?php echo $value['id'] ?>   </td> 
                            <td id="table-linhaum"> <?php echo $value['nomedisciplina']?>  </td> 
                            <td id="table-linhaum"> <?php echo $value['ch']?> </td> 
                            <td id="table-linhaum"> <?php echo $value['semestre']?> </td> 
                            <td id="table-linhaum"> <?php echo $value['idprofessor']?> </td> 
                            <td>
                               <form method="POST" action=".//altdisciplina.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button id="btm-form" name="alterar"  type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action=".//cruddisciplina.php">
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