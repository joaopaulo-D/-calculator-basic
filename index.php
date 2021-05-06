<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
    <form action="calcular.php" method="POST">
        <label>Digite o 1 valor:</label>
        <input type="text" name="numero1" size="5"/>
        <select name="opcions">
            <option value="0">somar</option>
            <option value="1">subtrair</option>
            <option value="2">multiplicar</option>
            <option value="3">dividir</option>
        </select><br/>
        <label>Digite o 2 valor:</label>
        <input type="text" name="numero2" size="5">
        <input type="submit" name="calcular" value="Calcular">
    </form>
</body>
</html>