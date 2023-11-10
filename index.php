<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Base trapezio</title>
</head>
<body>
    <div class="meio">
        
        <form action="forma.php" method="post">
            
            <h2>Escolha a forma geometrica para calcular a area:</h2>

            <input type="radio" id="quadrado" name="forma" value="quadrado">
            <label for="quadrado">Quadrado</label><br>

            <input type="radio" id="retangulo" name="forma" value="retangulo">
            <label for="retangulo">Retângulo</label><br>

            <input type="radio" id="circulo" name="forma" value="circulo">
            <label for="circulo">Circulo</label><br>

            <input type="radio" id="triangulo" name="forma" value="triangulo">
            <label for="triangulo">Triangulo</label><br>

            <input type="radio" id="trianguloeq" name="forma" value="trianguloeq">
            <label for="trianguloeq">Triangulo Equilatero</label><br>

            <input type="radio" id="trapezio" name="forma" value="trapezio">
            <label for="trapezio">Trapezio</label><br>

            <input type="radio" id="losangulo" name="forma" value="losangulo">
            <label for="losangulo">Losangulo</label><br>

            <input type="radio" id="paralelogramo" name="forma" value="paralelogramo">
            <label for="paralelogramo">Paralelogramo</label><br>
         

            <center><input type="submit" value="Calcular"></center>
        </form>
        <form action=""></form>
    </div>
</form>
</body>
</html>