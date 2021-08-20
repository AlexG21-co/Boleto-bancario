<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Resultado do Pagamento</title>
</head>

<body>
    <div class="container">
        <h1>Resultado</h1>
        <div class="mt-5">
            <?php
            $v1 = $_POST["val1"];
            $data = $_POST["data"];
            if (date($data) > "15/05/2021") {
                $datalimite = $v1 * 1.50;
                echo ("Você pagou o boleto atrasado, por isso tem juros de 50%, e o valor fica de: " . $datalimite);
            } elseif(date($data) < "15/05/2021") {
                $datalimite = $v1 * 0.20;
                $vf= $v1-$datalimite;
                echo ("Você pagou o boleto antes da data de vencimento, por isso tem desconto de 20%, e o valor final fica: " .$vf);
            }elseif (date($data) == "15/05/2021") {
                echo("Você pagou o boleto no dia do vencimento, por isso não tem desconto, sinto muito...");
            }
            ?>
        </div>
    </div>
</body>

</html>