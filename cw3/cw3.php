<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>NWD Iteracyjnie</h1>
        <?php
        require_once './functions.php';
        $a = 14;
        $b = 35;
        $wynik1 = NWDIteracyjnie($a, $b);
        echo "<p>NWD({$a},{$b})={$wynik1}</p>";
        ?>
        <h1>NWD Rekurencyjnie</h1>
        <?php
        $wynik2 = NWDRekurencyjnie($a, $b);
        echo "<p>NWD({$a},{$b})={$wynik2}</p>";
        ?>
    </body>
</html>
