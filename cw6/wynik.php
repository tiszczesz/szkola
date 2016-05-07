<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="cw6.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
        <?php
        require_once './functions.php';
          if($_POST){
             
              if(isset($_POST['imie']) && trim($_POST['imie'])!="" &&
                 isset($_POST['nazwisko']) && trim($_POST['nazwisko'])!="" && 
                                isset($_POST['wiek']) && 
                                isset($_POST['plec'])){
                            $imie = $_POST['imie'];
                            $nazwisko = filter_input(INPUT_POST, 'nazwisko');
                            $wiek = intval($_POST['wiek']);
                            
                            $plec = $_POST['plec'];
                            if(isset($_POST['zainteresowania'])){
                                $zaint = $_POST['zainteresowania'];
                            }else{
                                $zaint = ["Brak wybranych zainteresowań"];
                            }
                            $htmlZaint = FromArrayToList($zaint, 'Zainteresowania');
                            $wyksztalcenie = $_POST['wyksztalcenie'];
                            echo<<<TEXT
   <div>Informacje z formularza </div>
   <div>Imię: {$imie} Nazwisko: {$nazwisko} Wiek: {$wiek} Płeć: {$plec}</div>
      <div>{$htmlZaint}</div>
      <div>Wykształcenie: {$wyksztalcenie}</div>
TEXT;
              }else{
                  echo "<p class='error'>Brak lub niepełne dane!!!!</p>";
              }
          }
        ?>
     
    </body>
</html>
