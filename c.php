<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conversor de Tempreratura</h1>
    <?php
        if($_POST){
            if(isset($_POST['cf']) && $_POST['cf'] !== ""){
                $c = $_POST['cf'];
                $fc = ($c * 9/5) + 32;
                echo "Celsius para Fahrenheit: ".number_format($fc, 2, ",", ".")."<br>";
            }
            if(isset($_POST['fc']) && $_POST['fc'] !== ""){
                $f = $_POST['fc'];
                $cf = ($f - 32) * 5/9; 
                echo "Fahrenheit para Celsius: ".number_format($cf, 2, ",", ".")."<br>"; 
            }
        }
    ?>
    <form action="" method="post"> 
        <label for="cf">Celsius para Fahrenheit:</label>
        <input type="number" name="cf" id="cf" step="any">
        <br><br>
        <label for="fc">Fahrenheit para Celsius:</label>
        <input type="number" name="fc" id="fc" step="any">
        <br><br>
        <input type="submit" value="Converter">
    </form>
</body>
</html>