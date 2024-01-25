<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'animal.php';
        require 'Frog.php';
        require 'Ape.php';

        //for sheep
        $sheep = new Animal("shaun");
        echo 'Name : ';
        echo $sheep->get_name();
        echo '<br>';
        echo 'legs : ';
        echo $sheep->get_legs();
        echo '<br>';
        echo 'cold blooded : ';
        echo $sheep->get_cold_blooded();
        echo '<br><br>';

        //for frog
        $kodok = new Frog("buduk");
        echo 'Name : ';
        echo $kodok->get_name();
        echo '<br>';
        echo 'legs : ';
        echo $kodok->get_legs();
        echo '<br>';
        echo 'cold blooded : ';
        echo $kodok->get_cold_blooded();
        echo '<br>';
        echo 'Jump : ';
        $kodok->jump() ; // "hop hop"
        echo '<br><br>';

        //for ape
        $sungokong = new Ape("kera sakti");
        echo 'Name : ';
        echo $sungokong->get_name();
        echo '<br>';
        echo 'legs : ';
        echo $sungokong->get_legs();
        echo '<br>';
        echo 'cold blooded : ';
        echo $sungokong->get_cold_blooded();
        echo '<br>';
        echo 'Yell : ';
        $sungokong->yell(); // "Auooo"
        echo '<br><br>';

    ?>
</body>
</html>