<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">

        <h1>Cadastro de Cliente</h1>

        <form action="cadastro.php" method="POST">

	        <label for="idnome"> Nome: </label>
	  		<input type="text" id="idnome" name="nome" 
	  	     placeholder="Insira seu nome" 
	  		 maxlength="50" required autofocus><br>


            <label>E-mail</label>
            <input type="email" name="email" 
            placeholder="Insira seu E-mail"
            maxlength="50"><br>


            <label>Idade</label>
            <input type="text" name="idade" 
            placeholder="Insira sua Idade"><br>

            <label>Cidade</label>
            <input type="text" name="cidade"
            placeholder="Digite sua Cidade"
            maxlength="50"><br>

            <label>Sexo</label>
            <select name="sexo">
                <option value="">Selecione</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option><br>
            </select>

            <label>Observações</label>
            <textarea name="observacoes"></textarea>

            <button type="submit">Enviar</button>

        </form>

    </div>

</body>
</html>