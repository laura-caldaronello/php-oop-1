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
        $film1->calcAge(1991);

        $film2 = new Movie('an education');

        $film3 = new Movie('pulp fiction');
        $film3->author = 'quentin tarantino';

        $film4 = new Movie('the village');
        $film4->author = 'm. night shyamalan';
        $film4->calcAge(2004);

        $film5 = new Movie('an education'); // si possono creare anche oggetti uguali

        // non so in quale altro modo (dinamico) posso andare a raccogliere tutto ciò che ho definito con un determinato criterio
        $filmArray = [];
        $i = 1;
        while (isset(${'film'.$i})) {
            $filmArray[] = ${'film'.$i};
            $i = $i + 1;
        }

        foreach($filmArray as $film) {
            foreach($film as $property => $value) {
                if ($film->$property != null) {
                    if ($property == 'name') {

    ?>
        <h2><?php echo $property . ": " . $film->$property ?></h2>
    <?php
                        
                    }
                    else {

    ?>
        <h3><?php echo $property . ": " . $film->$property ?></h3>
    <?php

                    }
                }
            }

    ?>
        <br>
    <?php
                
        }

    ?>

</body>
</html>