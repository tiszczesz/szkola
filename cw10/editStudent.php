<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="cw10.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        require_once './libs/SQLRepositoryUczniowie.php';
        require_once './libs/StudentToHtml.php';
        if(filter_has_var(INPUT_GET, 'id')){
            $id = intval(filter_input(INPUT_GET, 'id'));
            $conn = new SQLRepositoryUczniowie();
            $student = $conn->getStudent($id);
            echo StudentToHtml::StudentForm($student,true);
        } else {
           echo '<p>Błedny id!!!!</p>';
        }
        ?>
    </body>
</html>
