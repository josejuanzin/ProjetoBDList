<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>To-Do List (MVC)</title>
    <style>
    </style>
</head>
<body>

    <h1>TO-DO List (MVC)</h1>

    <form action="index.php?action=criar" method="POST">
        <input type="text" name="descricao" placeholder="Descrição da tarefa">
        <button type="submit">Adicionar</button>
    </form>

    <h2>Suas tarefas</h2>
    <?php if (!empty($tarefas)): ?>
        <ul>
            <?php foreach ($tarefas as $tarefa): ?>
                <li>
                    <?php echo $tarefa['descricao']; ?>
                    <a href="index.php?action=excluir&id=<?php echo $tarefa['id']; ?>">Excluir</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Não há tarefas ainda!</p>
    <?php endif; ?>

</body>
</html