<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="styl1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Funkcje w PHP</h1>
        <?php
        require_once './functions.php';
        $dane = GetData(20);
        GetMaxMin($dane);
        echo TabToHtmlTab($dane);
        
        ?>
    </body>
</html>
