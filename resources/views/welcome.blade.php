<!doctype <html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>To Dos</h1>
        <ul>
            <?php foreach ($tasks as $task) : ?>
                <li><?= $task; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
