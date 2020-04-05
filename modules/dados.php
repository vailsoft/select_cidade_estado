<?php
    require_once '../classes/SqlManager.php';
    $manager = new SqlManager('cidade_estado');

    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    
    echo "ID do Estado Selecionado: ".$estado.'<br>';
    $manager->SelectQuery('nome', 'estado',"id = $estado");
    
    echo 'Nome do Estado Selecionado: ';
    $manager->echoData('nome');
    
    echo '<br>'."ID da Cidade Selecionada: ".$cidade;
    $manager->SelectQuery('nome', 'cidade',"cidade.id = $cidade");
    
    echo '<br>'."Nome da cidade Selecionada: ";
    $manager->echoData('nome');

    $manager->disconnect();

?>
<button><a href="../index.php">Voltar<a></button>