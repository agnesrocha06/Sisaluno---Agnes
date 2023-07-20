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

    <header>
         <h2> Cadastro de Alunos </h2>
    </header>

    <div class="conteudo">
    <form method="GET" action="crudaluno.php">
     <div class="linha">
     <label for="id">Matricula</label>
     <input id="input-id" type="text" name="id" required> <br>
     <label for="nomealuno">Nome</label>
     <input id="input-nome" type="text" name="nomealuno" placeholder=" Digite o nome do aluno"  required><br>
    </div>

    <div class="linha">
     <label for="idadealuno">Idade</label>
     <input id="input-idade" type="number" name="idade"> <br>
     <label for="endereco">Endereço</label>
     <input id="input-endereco" type="text" name="endereco" required> <br>
    </div>

    <div class="linha">
     <label for="curso">Curso</label>
     <input id="input-curso" type="text" name="curso" required> <br>
     <label for="telefone">Telefone</label>
     <input id="input-telefone" type="text" name="telefone"> <br>
     <label for="turma">Turma</label>
     <input id="input-turma" type="text" name="turma"> <br>
    </div>

    <div class="linha-final">
     <input id="input-cadastrar" type="submit" name="cadastrar" value="Cadastrar">
     </form>

     <button id="btm-back" class="button"><a href="index.php">Voltar</a></button>
    </div>
</div>

     <script>
    function exibeAlert(){
        alert("Agora você já sabe\ncomo pular linha\nnos métodos: \nalert, confirm e prompt!");
    }
</script>


</body>
</html>