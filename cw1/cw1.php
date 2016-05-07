<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Pętle w php</h1>
        <h3>Pętla for</h3>
        <?php
//        for($i=1;$i<=6;$i++){
//            echo "<h{$i}>Nagłówek typu h{$i}</h{$i}>\n";
//        }
        ?>
        
        <h3>Petla do...while</h3>
        <?php
        $i=0;
        do{
            echo rand(0, 20).' ';
        }while($i++<10);
        echo '<br><hr>';
        $losowa = 0;
        $licznik = 0;
        do{
            $losowa = rand(0, 20).' ';
            $licznik++;
            echo $losowa.' ';
        }while($losowa != 10);
        echo "<p>Wylosowano za {$licznik} razem</p>\n";
        ?>
        <hr>
        <h3>Pętla while(...) {....}</h3>
        <?php
        $suma = 0;
        $first = true;
        
        while($suma<100){
            $losowa = rand(0, 50);
            $suma += $losowa;
            if(!$first) {
                echo '+';
            }
            echo $losowa; 
            $first = false;
        }
        echo '='.$suma;   
        ?>  
        <br>
    </body>
</html>
 