<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Circulo</title>
</head>
<body>
<div class="meio">  
        <form action="circulo.php" method="post">

            <label for="raio">Raio do circulo:</label><br>
            <input type="text" id="raio" name="raio" required><br><br>

            <label for="unidade">Unidade de medida:</label><br>
            <select id="unidade" name="unidade">
                <option value="cm">cm</option>
                <option value="m">m</option>
                <option value="km">km</option>
            </select><br><br>

            <input type="submit" value="Calcular">

        </form>
        <br><br>

        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["raio"]) && isset($_POST["unidade"])) {
            $raio = $_POST["raio"];
            $unidade = $_POST["unidade"];

            $area = pow($raio, 2) * 3.14;
            echo "A área do circulo é: " . $area . " " . $unidade . "<sup>2</sup>";
        }
    }
    ?>
    </div>
</body>
</html>