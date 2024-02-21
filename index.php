<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Poder de voto - Eleições</title>
</head>
<body>
    <h2>Idade para votação</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];
        ?>">
        Insira sua idade: <input type="number" name="idade"><br><br>
        <input type="submit" value="Somar">
    </form>

    <?php
    // verif se nums foram enviados no form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // verif se campos foram preenchidos

        if (!empty($_POST['idade'])) {
            $idade = $_POST['idade'];
            
            if ($idade < 16) {
                echo "Você possui $idade anos de idade e ainda não pode votar!";
            } else if ($idade >= 16 && $idade < 18) {
                echo "Você possui $idade anos de idade e pode votar de forma facultativa!";
            } else if ($idade >= 18 && $idade < 60) {
                echo "Você possui $idade anos de idade e deve votar!";
            } else {
                echo "Você possui $idade anos de idade e pode votar de forma facultativa!";
            }
        } else {
            // caso algum campo n seja preenchido, exibe mensagem erro
            echo "<h3>É necessário inserir sua idade.";
        };
    }
?>
</body>
</html>