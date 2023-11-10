<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Paralelogramo</title>
</head>
<body>
<div class="meio">  
        <form action="paralelogramo.php" method="post">
            <label for="lado">Base do paralelogramo:</label><br>
            <input type="text" id="base" name="base" required><br><br>

            <label for="lado">Altura do paralelogramo:</label><br>
            <input type="text" id="altura" name="altura" required><br><br>
            
            
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
        if (isset($_POST["base"]) && isset($_POST["unidade"])) {
            $base = $_POST["base"];
            $altura = $_POST["altura"];
            $unidade = $_POST["unidade"];

            $area = $base * $altura;
            echo "A área do paralelogramo é: " . $area . " " . $unidade. "<sup>2</sup>";
        }
    }
    ?>
    </div>
</body>
</html>