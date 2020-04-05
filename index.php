<?php 
    require_once 'classes/SqlManager.php';
    $manager = new SqlManager('cidade_estado');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Cidade do Estado</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <form action="modules/dados.php" method="post">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" onchange="change()">
                <option>Selecione o Estado</option>
                <?php
                    $manager->SelectQuery('*','estado',1);
                    $manager->fetchOptions('nome');
                ?>
            </select>

            <label for="cidade">Cidade</label>
            <select name="cidade" id="cidade">
                <option>Selecione a Cidade</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
        <script src="js/script.js"></script>
    </div>
</body>
</html>