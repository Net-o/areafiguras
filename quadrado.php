<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Quadrado</title>
</head>
<body>
<div class="meio">  
        <form action="quadrado.php" method="post">

            <label for="lado">Lado do quadrado:</label><br>
            <input type="text" id="lado" name="lado" required><br><br>

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
        if (isset($_POST["lado"]) && isset($_POST["unidade"])) {
            $lado = $_POST["lado"];
            $unidade = $_POST["unidade"];

            $area = $lado * $lado;
            echo "A área do quadrado é: " . $area . " " . $unidade . "<sup>2</sup>";
        }
    }
    ?>
    </div>
</body>
</html>