
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//professor.css">
    <title>Lista de Professores</title>
</head>
<body>
    
<header style="margin-bottom: 20px">
         <h2> Lista de Professores </h2>
    </header>
    
    <?php 

  require_once('conexao-professor.php');

   
  $retorno = $conexao->prepare('SELECT * FROM professor');
  $retorno->execute();

?>       
        <table id="table-lista"> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>IDADE</th>
                    <th>EMAIL</th>
                    <th>CURSO</th>
                    <th>TELEFONE</th>
                    <th>DISCIPLINA</th>
                </tr>
            </thead>

            <tbody style="text-align: center; align-items:center;">
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td id="table-linhaum"> <?php echo $value['id'] ?>   </td> 
                            <td id="table-linhaum"> <?php echo $value['nome']?>  </td> 
                            <td id="table-linhaum"> <?php echo $value['idade']?> </td> 
                            <td id="table-linhaum"> <?php echo $value['email']?> </td> 
                            <td id="table-linhaum"> <?php echo $value['curso']?> </td> 
                            <td id="table-linhaum"> <?php echo $value['telefone']?> </td> 
                            <td id="table-linhaum"> <?php echo $value['disciplina']?> </td> 

                            <td>
                               <form method="POST" action=".//altprofessor.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button id="btm-form" name="alterar"  type="submit">Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action=".//crudprofessor.php">
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