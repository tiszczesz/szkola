<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once './Book.php';
            $b1 = new Book();
            //$b1->SetTitle("Alicja w krainie czarów");
            $b1->SetAll("pierwszy", "dwa");

            var_dump($b1);
            $b2 = new Book();
            $b2->SetAll();
            echo $b2;

            echo Book::Inna("fffff");
            $b3 = new Book();
            echo "id=" . $b1->GetId() . "<br>";
            echo "id=" . $b2->GetId() . "<br>";
            echo "id=" . $b3->GetId() . "<br>";
            var_dump($b1);
            var_dump($b2);
            var_dump($b3);
            ?>
        </pre>
    </body>
</html>
