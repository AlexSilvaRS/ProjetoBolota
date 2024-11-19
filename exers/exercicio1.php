<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultório da Dr.Bolota</title>
</head>

<body>
<h1>Consultório da Dr.Bolota</h1>
    <form  method="POST" action="script.php">
        
        <label for="Nome">Nome completo</label><br>
        <input type="text" name="Nome"><br>
        <label for="DataNasc">Data de Nasciomento</label><br>
        <input type="date" name="DataNasc"><br>
        <label for="peso">Peso</label><br>
        <input type="number" name="peso" step="0.01"><br>
        <label for="altura">Altura</label><br>
        <input type="number" name="altura" step="0.01"><br>
        <label for="sexo">Sexo</label><br>
        <input type="radio" name="sexo" value="masculino">Maculino
        <input type="radio" name="sexo" value="feminino">feminino <br><br>
        <input type="submit" value="Salvar">
    </form>
</body>

</html>