<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" href="style/php.css">
</head>

<body>
    <main>
        <div class="painel">
            <h2>
                Instruções
            </h2>
            <div class="conteudo-painel">
                <p>
                    Esta aplicação tem como finalidade demosntrar os valores que serão
                    gastos com combustível durante uma viagem, com base no consumo do seu
                    veiculo, e com a distancia determinada por você!
                </p>
                <ul>
                    <li><b>Álcool</b></li>
                    <li><b>Diesel</b></li>
                    <li><b>Gasolina</b></li>
                </ul>
            </div>
        </div>

        <div class="painel">
            <h2>
                Cálculo do valor (R$) do consumo
            </h2>
            <div class="conteudo-painel">
                <form action="calculo.php" method="POST">
                    <label for="distancia">
                        Distancia em Kilômetros a ser percorrida:
                    </label>
                    <input type="number" name="distancia" required value="1">
                    <label for="autonomia">
                        Consumo de combustível do veículo (Km/L):
                    </label>
                    <input type="number" name="autonomia" required value="1">

                    <button class="botao" type="submit">
                        Calcular
                    </button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>