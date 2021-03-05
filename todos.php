<?php
    $url = 'https://jsonplaceholder.typicode.com/todos/';
    $json = file_get_contents($url);
    $obj = json_decode($json);
?>
<!doctype html>
<html>
    <head>
        <title>Desafio Frame - Como se tornar um padawan</title>
        <meta charset="utf-8" />
        <meta name="author" content="Amanda Lima"/>
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
    </head>
    <body>
        <div id="wrap">
            <div class="barra-superior">
                <a href="index.php" class="btn btn-voltar">Voltar</a>
            </div>
            <h1>TO-DOs</h1>
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>userId</th>
                        <th>title</th>
                        <th>completed</th>
                    </tr>
                </thead>
                <?php foreach ($obj as $dados) : ?>
                <tr>
                    <td><?php echo $dados->id; ?></td>
                    <td><?php echo $dados->userId; ?></td>
                    <td><?php echo $dados->title; ?></td>
                    <td><?php echo ($dados->completed)? "true":"false"; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </body>
</html>