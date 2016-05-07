<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        
        <?php
        var_dump($_GET);
        $tab = [12,2323,343,"wewe",true,["wew","wew"]];
        
        var_dump($tab);
        $tab[]= "inny element tab";
        $tab[12] = "eleemnt 12";
        var_dump($tab);
        echo "Rozmiar tablicy: ".  count($tab);
        for($i=0;$i<count($tab);$i++){
            print_r($tab[$i]);
            echo "<br>";
        }
        foreach ($tab as $elem) {
             print_r($elem);
            echo "<br>";
        }
        $person = [
            "imie" => "Jan",
            "nazwisko" => "Nowak",
            "wiek" => 44,
            "plec" => "M"
        ];
        print_r($person);
        ksort($person);
        print_r($person);
        asort($person);
         print_r($person);
        ?>
        </pre>
    </body>
</html>
