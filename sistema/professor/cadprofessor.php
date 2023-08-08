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
     <label for="nomeprof">Nome</label>
     <input id="input-nome" type="text" name="nomeprof" placeholder=" Digite o nome do professor"  required><br>
     <label for="cpf">CPF</label>
     <input id="input-cpf" type="text" name="cpf" placeholder=" Apenas numeros"  required maxlength="11"><br>
    </div>

    <div class="linha">
     <label for="idade">Idade</label>
     <input id="input-idade" type="number" name="idade"> <br>
     <label for="datanascimento">Data de Nascimento</label>
     <input id="input-data" type="text" name="datanascimento"> <br>
     <label for="endereco">Endereco</label>
     <input id="input-endereco" style=" width: 295px;" type="text" name="endereco" required> <br>
    </div>

    <div class="linha">
     <label for="estatus">Status</label>
     <input id="input-estatus" type="text" name="estatus" required> <br>
     <label for="email">Email</label>
     <input id="input-email" style=" width: 592px;" type="email" name="email" required maxlength="150"> <br>
    </div>
    <label for="id"></label>
     <input id="id" type="hidden" name="id" value=" ">

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