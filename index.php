<pre>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__."/classi/Film.php"; 
require_once __DIR__."/classi/Programmazione.php"; 
require_once __DIR__."/classi/Sala.php"; 
require_once __DIR__."/classi/SalaPlus.php"; 


$filmArr = [
        new Film("A Beautiful Mind", "Dramma", "136", "2001"),
    
        new Film("Kaan principe guerriero", "Azione", "118", "1982"),
    
        new Film("X-Men", "Fantascienza", "104", "2000")
    ];
    
    
$attoriArr = [
        new Attori("fabio", "losa", "italia"),

        new Attori("marco", "rota", "italia"),

        new Attori("luca", "rossi", "spagna")
];

array_push($filmArr[0]->attori,$attoriArr[0]);
array_push($filmArr[1]->attori,$attoriArr[1]);
array_push($filmArr[2]->attori,$attoriArr[2]);

var_dump($filmArr);

?>

</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>
<body>
    

</body>
</html>