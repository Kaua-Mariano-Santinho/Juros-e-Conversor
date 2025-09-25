<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Consultor de Juros</h1>
    <?php
        if($_POST){
            $c = $_POST['c'];
            $t = $_POST['t'];
            $i = $_POST['i'];
            
            $juros = $c * ($i/100) * $t;
            echo "O valor dos juros é: R$ ".number_format($juros, 2, ",", ".");
        }
    ?>
    <form action="" method="post">
        <label for="c">Capital:</label>
        <input type="number" name="c" id="c" required>
        <br><br>
        <label for="t">Tempo:</label>
        <input type="number" name="t" id="t" required>
        <br><br>
        <label for="i">Taxa de Juros:</label>
        <input type="number" name="i" id="i" required>
        <br><br>
        <input type="submit" value="Calcular Juros">
</body>
</html>