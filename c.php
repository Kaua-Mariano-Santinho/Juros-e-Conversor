<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <h1>Conversor de Temperatura</h1>
    <?php
        $tipo = $_POST['tipo'] ?? '';
        if($_POST){
            if($tipo == "cf" && isset($_POST['valor'])){
                $c = $_POST['valor'];
                $fc = ($c * 9/5) + 32;
                echo "Celsius para Fahrenheit: ".number_format($fc, 2, ",", ".")."<br>";
            }
            if($tipo == "fc" && isset($_POST['valor'])){
                $f = $_POST['valor'];
                $cf = ($f - 32) * 5/9; 
                echo "Fahrenheit para Celsius: ".number_format($cf, 2, ",", ".")."<br>"; 
            }
        }
    ?>
    <form action="" method="post"> 
        <label for="tipo">Escolha a conversão:</label>
        <select name="tipo" id="tipo" onchange="this.form.submit()">
            <option value="">Selecione</option>
            <option value="cf" <?php if($tipo=="cf") echo "selected"; ?>>Celsius para Fahrenheit</option>
            <option value="fc" <?php if($tipo=="fc") echo "selected"; ?>>Fahrenheit para Celsius</option>
        </select>
        <br><br>
        <?php if($tipo == "cf"): ?>
            <label for="valor">Celsius:</label>
            <input type="number" name="valor" id="valor" step="any" required>
        <?php elseif($tipo == "fc"): ?>
            <label for="valor">Fahrenheit:</label>
            <input type="number" name="valor" id="valor" step="any" required>
        <?php endif; ?>
        <br><br>
        <input type="submit" value="Converter">
        <input type="reset" value="Resetar">
    </form>
</body>
</html>