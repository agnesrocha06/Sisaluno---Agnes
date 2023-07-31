<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//professor.css">
    <title>Página de Cadastro</title>
</head>
<body>

    <header>
         <h2> Cadastro de Professor </h2>
    </header>

    <div class="conteudo">
    <form method="GET" action="crudprofessor.php">
     <div class="linha">
     <label for="id">ID </label>
     <input id="input-id" type="number" name="id" required> <br>
     <label for="nomeprof">Nome</label>
     <input id="input-nome" type="text" name="nomeprof" placeholder=" Digite o nome do professor"  required><br>
    </div>

    <div class="linha">
     <label for="idade">Idade</label>
     <input id="input-idade" type="number" name="idade"> <br>
     <label for="email">Email</label>
     <input id="input-email" type="email" name="email" required maxlength="150"> <br>
    </div>

    <div class="linha">
     <label for="curso">Curso</label>
     <input id="input-curso" type="text" name="curso" required> <br>
     <label for="telefone">Telefone</label>
     <input id="input-telefone" type="text" name="telefone"> <br>
     <label for="disciplina">Disciplina</label>
     <input id="input-disciplina" type="text" name="disciplina"> <br>
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