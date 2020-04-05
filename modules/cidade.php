 <?php
    require_once '../classes/SqlManager.php';
    $manager = new SqlManager('cidade_estado');
    $manager->SelectQuery('cidade.id, cidade.nome','cidade join estado', 'estado.id='.$_GET['estado'].' and cidade.estado='.$_GET['estado']);
    $manager->fetchOptions('nome');
?>
