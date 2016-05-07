<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="cw10.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
       
        <?php
        require_once './libs/StudentToHtml.php';
        echo StudentToHtml::StudentForm();
        ?>
    </body>
</html>
