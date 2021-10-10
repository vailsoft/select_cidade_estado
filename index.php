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
    <!-- CSS only -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <form action="modules/dados.php" method="post">
            
            <!--SELECT ESTADOS-->
        
            <select name="estado" id="estado" onchange="change()">
                <option>Selecione o Estado</option>
                <?php
                    $manager->SelectQuery('*','estado',1);
                    $manager->fetchOptions('nome');
                ?>
            </select>
            
            <!--SELECT CIDADES-->
            <select name="cidade" id="cidade">
                <option>Selecione a Cidade</option>
            </select>
            <input type="submit" class="buton_enviar" value="Enviar">
        </form>
        <!-- JavaScript Bundle with Popper -->
        <script src="js/script.js"></script>
</body>
</html>
