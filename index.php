<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP primi passi</title>
</head>
<body>
    
    <?php

        ini_set('display_errors',1);

        class Movie {
            public $name;
            public $author;

            // obbligatorio inserire il nome
            function __construct($name) {
                $this->name = $name;
            }

            // anno ed età del film vengono da una funzione
            function calcAge($year) {
                if ($year <= 2021) {
                    $this->year = $year;
                    $this->age = 2021 - $this->year;
                }
            }

        }

        $film1 = new Movie('il silenzio degli innocenti');
        $film1->calcAge(1987);
        
        var_dump($film1);

    ?>

</body>
</html>