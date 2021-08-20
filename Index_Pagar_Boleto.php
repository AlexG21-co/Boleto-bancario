<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Pague o Boleto que Você Deve!!!!!!!!</title>
</head>

<body>
    <div class="container">
    <h1 class="text-center">Dados do Boleto</h1>
    <h2 class="text-center">Data de Vencimento do Boleto:15/05/2021 </h2>
    <h2 class="text-center">Valor do Boleto: R$300</h2>
        <div class="mt-5">
            <form method="POST" action="Resultado_Boleto.php">
                Valor: <input type="number" class="form-control" name="val1" placeholder="Digite o valor do Boleto" required><br>
                Data: <input type="text" class="form-control" name="data" placeholder="Digite a data que você pagou o boleto" required> <br>
                <button type="submit" class="btn btn-sucess btn-block" value="Calcular">Calcular</button>
            </form>
        </div>
    </div>
</body>

</html>
