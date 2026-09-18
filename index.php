<?php
    require_once __DIR__ . '/app/controllers/controller.php';

    $controller = new tarefaController();

    $action = $_GET['action'] ?? 'index';

    switch ($action) {
        case 'criar':
            $controller->criar();
            break;
        case 'excluir':
            $controller->excluir();
            break;
        default:
            $controller->index(); 
    }
?>