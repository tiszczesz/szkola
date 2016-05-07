<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="GET" action="cw5.php"> a = 
            <input type="text" name="a" id="a" /><br>
            b = 
            <input type="text" name="b" id="b" /><br>
            <input type="submit" value="wyślij"/> 
        </form>

        <?php
        if (isset($_GET['a']) && isset($_GET['b'])) {
            $a = $_GET['a'];
            $b = $_GET['b'];
            echo "<p>a = {$a}</p>";            
            echo "<p>b = {$b}</p>";
        }
        if(filter_has_var(INPUT_GET, 'a') 
                && filter_has_var(INPUT_GET, 'b')){
            $a = filter_input(INPUT_GET, 'a');
            $b = filter_input(INPUT_GET, 'b');
        }
          
        ?>
    </body>
</html>
