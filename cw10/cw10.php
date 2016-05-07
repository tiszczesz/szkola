<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="cw10.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>
            <a href="addNewStudent.php">Dodaj nowegu ucznia</a>
        </div>
        <?php
        require_once './libs/SQLRepositoryUczniowie.php';
        require_once './libs/StudentToHtml.php';
        $sql = new SQLRepositoryUczniowie();
        //$sql->getAll();
        $students = $sql->getAll();
        echo StudentToHtml::AllToTab($students);
        ?>
        
    </body>
</html>
