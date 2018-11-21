<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculadora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="resultado.php">
        <label for="num1">Primeiro número</label>
        <input type="number" name="num1" id="num1"><br><br>
        <label for="num2">Segundo número</label>
        <input type="number" name="num2" id="num2"><br><br>
        <label for="op">Operação</label>
        <select name="op">
            <option value="som">Soma</option>
            <option value="sub">Subtração</option>
            <option value="mul">Multiplicação</option>
            <option value="div">Divisão</option>
        </select> <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>