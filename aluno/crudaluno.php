<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//aluno.css">
    <title>Página de Cadastro</title>
</head>
<body>
    
<header style="margin-bottom: 20px">
         <h2> Cadastro de Alunos </h2>
    </header>

<?php

require_once('conexao.php');

if(isset($_GET['cadastrar'])){
                $id = $_GET["id"];
                $nome = $_GET["nomealuno"];
                $idade = $_GET["idade"];
                $endereco = $_GET["endereco"];
                $curso = $_GET["curso"];
                $telefone = $_GET["telefone"];
                $turma = $_GET["turma"];
                
                if(($idade >= 18) && ($idade))  {
                        $sql = "INSERT INTO aluno(id,nome,idade, endereco,curso,telefone,turma) 
                                VALUES('$id','$nome','$idade','$endereco','$curso','$telefone','$turma')";

                        $sqlcombanco = $conexao-> prepare($sql);

                        if($sqlcombanco->execute())
                            {
                     
                                echo "<script> alert('Formulário enviado com sucesso!'); </script>";
                                   
                                echo "<p> <b> OK! </b> O aluno $nome foi incluido com sucesso no sistema!!! </p>";
                                echo "<br>" ; 
                                echo " <button class='button3'><a href='index.php'>voltar</a></button>";
                            }
                }
            else {
                    echo "Digite uma idade válida";
                }   
        }
        #######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $endereco = $_POST["endereco"];
    $curso = $_POST["curso"];
    $telefone = $_POST["telefone"];
    $turma = $_POST["turma"];
    $id = $_POST["id"];
   
      ##codigo sql
    $sql = "UPDATE  aluno SET nome= :nome, idade= :idade, endereco= :endereco, curso= :curso, telefone= :telefone, turma= :turma WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':curso',$curso, PDO::PARAM_STR);
    $stmt->bindParam(':telefone',$telefone, PDO::PARAM_INT);
    $stmt->bindParam(':turma',$turma, PDO::PARAM_STR);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O(A) aluno(a) $nome foi alterado com sucesso!!!"; 
            echo "<br>";
            echo " <button class='button3'><a href='../listaaluno.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `aluno` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> O(A) aluno(a) $id foi excluido!!!"; 
            echo "<br>";
            echo " <button class='button3'><a href='listaalunos.php'>voltar</a></button>";
        }

}
    
?>

</body>
</html>
