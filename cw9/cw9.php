<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="cw9.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Pobranie wszystkich</h1>
        <?php
        require_once './Repository.php';
        require_once './functions.php';
        PrintAll(Repository::GetAll());
        foreach (Repository::GetAll() as $item) {
            echo "<p>Abstrakcyjna: " . $item->Abstrakcyjna() . "</p>\n";
        }
        GetAllSalary(Repository::GetAll());
        ?>
    </body>
</html>
