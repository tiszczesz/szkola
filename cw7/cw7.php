<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="cw7.css"/>
    </head>
    <body>
       
            <?php
            require_once './functions.php';
            $dane = LoadFromFile("dane.txt");
            
           
            echo ArrayToHtmlTable($dane);
            
            ?>
        <h2><a href="AddWorker.html">Dodaj nowego pracownika</a></h2>
    </body>
</html>
