<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $forma = $_POST["forma"];
    if ($forma == "quadrado") {
        header("Location: quadrado.php");
        exit;
    } else if ($forma == "retangulo") {
        header("Location: retangulo.php");
        exit;
    } else if ($forma == "circulo") {
        header("Location: circulo.php");
        exit;
    } else if ($forma == "triangulo") {
        header("Location: triangulo.php");
        exit;
    } else if ($forma == "trianguloeq") {
        header("Location: trianguloeq.php");
        exit;
    } else if ($forma == "trapezio") {
        header("Location: trapezio.php");
        exit;
    } else if ($forma == "losangulo") {
        header("Location: losangulo.php");
        exit;
    } else if ($forma == "paralelogramo") {
        header("Location: paralelogramo.php");
        exit;
    }
}
?>