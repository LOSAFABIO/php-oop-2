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


$saleArr = [
    new Sala("A", 80),
    new Sala("B", 60),
    new SalaPlus("C", 80, ["vibro"]),
    new SalaPlus("D", 100, ["fumo"]),

];

$progrArr = [
    new Programmazione("12-06", "21.00"),
    new Programmazione("13-06", "19.30"),
    new Programmazione("30-05", "20.00")
];

array_push($filmArr[0]->attori,$attoriArr[0]);
array_push($filmArr[1]->attori,$attoriArr[1]);
array_push($filmArr[2]->attori,$attoriArr[2]);

// var_dump($filmArr);
// var_dump($saleArr);
// var_dump($progrArr);

//milestone 1
foreach ($saleArr as $elemento) {
    echo "{$elemento->getInfo()} <br>";
 }
 
//milestone 2
$capienzaTot = 0;

foreach ($saleArr as $capienza) {
   $capienzaTot += $capienza->getTotCapienza(); 
}
echo $capienzaTot;

//milestone 3



//milestone 4



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