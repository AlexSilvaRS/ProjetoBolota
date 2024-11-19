<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulario de Cadastro</title>
</head>

<body>
    <header>
        <h1>
            Formulario de Inscrição
        </h1>
    </header>
    <form
        action="#" method="post">

        <div class="nome">
            <input type="text" name="Nome" id="nome" placeholder="Digite seu nome" maxlength="100" required>
        </div><br>

        <div class="senha">
            <input type="password" name="Senha" id="senha" placeholder="senha">
        </div><br>

        <div class="idade">
            <input type="number" name="Idade" id="idade" placeholder="Idade">
        </div><br>

        <div class="altura">
            <input type="number" step="0.1" name="Altura" id="altura" placeholder="Altura">
        </div><br>

        <div class="email">
            <input type="email" name="Email" id="email" placeholder="email">
        </div><br>

        <div class="url">
            <input type="url" name="Site" id="site" placeholder="site">
        </div><br>

        <div class="data">
            <input type="date" name="DataNasc" id="DataNasc" placeholder="data">
        </div><br>

        <div class="botoes">
            <input type="submit" value="salvar" name="salvar" id="salvar"><br>
            <input type="reset" value="limpar" name="limpar" id="limpar"><br>
        </div>

    </form>
</body>

</html>