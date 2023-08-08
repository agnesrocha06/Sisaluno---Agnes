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

    <header>
         <h2> Cadastro de Disciplinas </h2>
    </header>

    <div class="conteudo">
    <form method="GET" action="cruddisciplina.php">
     <div class="linha">
     <label for="id"></label>
     <input id="id" type="hidden" name="id" value=" ">
     <label for="nomedisciplina">Nome</label>
     <input id="input-nome" type="text" name="nomedisciplina" placeholder=" Digite o nome da disciplina"  required><br> 
    </div>

    <div class="linha"> 
     <label for="CH">Carga Horária</label>
     <input id="input-ch" type="number" name="ch" required > <br>
     <label for="semestre">Semestre</label>
     <input id="input-semestre" type="number" name="semestre" required> <br>
     <label for="idprofessor">ID do Professor </label>
     <input id="input-id-prof" type="number" name="idprofessor" required> <br>
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