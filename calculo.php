<?php

$mensagem = '';

if ($_POST) {
    $distancia = $_POST ["distancia"];
    $autonomia = $_POST ["autonomia"];
    if (is_numeric($distancia) && is_numeric($autonomia)) {
        $gasolina = 4.80;
        $diesel = 3.90;
        $alcool = 3.80;

        if ($distancia == null || $distancia == 0) {
            $mensagem .= "<div class='error'>";
            $mensagem .= "<p>Distancia não informada</p>";
            $mensagem .= "</div>";
        }
        else if ($autonomia == null || $autonomia == 0) {
            $mensagem .= "<div class='error'>";
            $mensagem .= "<p>Autonomia não informada</p>";
            $mensagem .= "</div>";
        }
        else if ($autonomia == null && $distancia == null || $distancia == 0 && $autonomia == 0) {
            $mensagem .= "<div class='error'>";
            $mensagem .= "<p>Informações não fornecidas!</p>";
            $mensagem .= "</div>";
        }
        else {
            $preco_gasolina = ($distancia / $autonomia) * $gasolina;
            $preco_gasolina = number_format($preco_gasolina, 2, ',','.');
            $preco_diesel = ($distancia / $autonomia) * $diesel;
            $preco_diesel = number_format($preco_diesel, 2, ',','.');
            $preco_alcool = ($distancia / $autonomia) * $alcool;
            $preco_alcool = number_format($preco_alcool, 2, ',','.');
            $mensagem = $mensagem . '<ul>';
            $mensagem = $mensagem . "<li>O consumo utilizando <strong>Gasolina</strong>: R$".$preco_gasolina."</li>";
            $mensagem = $mensagem . "<li>O consumo utilizando <strong>Diesel</strong>: R$".$preco_diesel."</li>";
            $mensagem = $mensagem . "<li>O consumo utilizando <strong>Alcool</strong>: R$".$preco_alcool."</li>";
            $mensagem = $mensagem . '</ul>';
        }
    } else {
        $mensagem .= "<div class='error'>";
        $mensagem .= "<p>O valor recebido não é númerico!</p>";
        $mensagem .= "</div>";
    }
} else {
    $mensagem .= "<div class='error'>";
    $mensagem .= "Nenhum dado foi fornicido";
    $mensagem .= "</div>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/calculo.css">
    <title>Calculo</title>
</head>
<body>
    <main>
        <div class="painel">
            <h2>
                Resultado do Cálculo de Consumo
            </h2>
            <div class="conteudo-painel">
                <?php
                     echo $mensagem;
                ?>
            </div>
            <a class="botao" href="index.html">
                Voltar
            </a>
        </div>
    </main>
</body>
</html>