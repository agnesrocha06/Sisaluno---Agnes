<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//disciplina.css">
    <title>Página de Cadastro</title>
</head>
<body>
    
<header style="margin-bottom: 20px">
         <h2> Cadastro de Disciplinas </h2>
    </header>

    <div class="container" style="text-align: center;">
<?php

require_once('conexao-disciplina.php');

if(isset($_GET['cadastrar'])){
                $id = $_GET["id"];
                $nomedisciplina = $_GET["nomedisciplina"];
                $ch = $_GET["ch"];
                $semestre = $_GET["semestre"];
                $idprofessor = $_GET["idprofessor"];
                
                if(($ch >= 80) && ($ch))  {
                        $sql = "INSERT INTO disciplina(id, nomedisciplina,ch,semestre,idprofessor) 
                                VALUES('$id','$nomedisciplina','$ch','$semestre','$idprofessor')";

                        $sqlcombanco = $conexao-> prepare($sql);

                        if($sqlcombanco->execute())
                            {
                     
                                echo "<script> alert('Formulário enviado com sucesso!'); </script>";
                                   
                                echo "<p> <b> OK! </b> A disciplina $nomedisciplina foi incluida com sucesso no sistema!!! </p>";
                                echo "<br>" ; 
                                echo " <button class='button3'><a href='index.php'>voltar</a></button>";
                            }
                }
            else {
                    echo "Digite uma disciplina válida";
                }   
        }
        #######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nomedisciplina = $_POST["nomedisciplina"];
    $ch = $_POST["ch"];
    $semestre = $_POST["semestre"];
    $idprofessor = $_POST["idprofessor"];
    $id = $_POST["id"];
   
      ##codigo sql
    $sql = "UPDATE  disciplina SET nomedisciplina= :nomedisciplina, ch= :ch, semestre= :semestre, idprofessor= :idprofessor WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nomedisciplina',$nomedisciplina, PDO::PARAM_STR);
    $stmt->bindParam(':ch',$ch, PDO::PARAM_STR);
    $stmt->bindParam(':semestre',$semestre, PDO::PARAM_STR);
    $stmt->bindParam(':idprofessor',$idprofessor, PDO::PARAM_INT);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> A disciplina $nomedisciplina foi alterado com sucesso!!!"; 
            echo "<br>";
            echo " <button class='button3'><a href='listadisciplina.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `disciplina` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> A disciplina $id foi excluida!!!"; 
            echo "<br>";
            echo " <button class='button3'><a href='.//listadisciplina.php'>voltar</a></button>";
        }

}
    
?>
</div>
</body>
</html>
