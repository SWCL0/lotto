<?php

$invoer = array();
$getLotto = array(1, 14, 24, 32, 41, 42);

echo "Geef je lotto getallen (getallen moeten tussen 1 en 42 liggen)" . PHP_EOL;
echo "Geef lotto nummer 1:" . PHP_EOL;
$invoer[] = readline();
echo "Geef lotto nummer 2:" . PHP_EOL;
$invoer[] = readline();
echo "Geef lotto nummer 3:" . PHP_EOL;
$invoer[] = readline();
echo "Geef lotto nummer 4:" . PHP_EOL;
$invoer[] = readline();
echo "Geef lotto nummer 5:" . PHP_EOL;
$invoer[] = readline();
echo "Geef lotto nummer 6:" . PHP_EOL;
$invoer[] = readline();

foreach ($invoer as $checkGetallen) {
    if (!is_numeric($checkGetallen)) {
        echo "$checkGetallen moet wel een getal zijn!";
        exit;
    }
    if (($checkGetallen < 1) or ($checkGetallen > 42)) {
        echo "De getallen moeten wel tussen de 1 en 42 zijn!";
        exit;
    }
}

sort($invoer);

echo "Je gekozen cijfers zijn: ";
foreach ($invoer as $getal) {
    echo $getal . " ";
}

for ($i = 0; $i < 6; $i++) {
    $getLotto[] = rand(1, 42);
}
sort($getLotto);

echo PHP_EOL . "De trekking cijfers zijn: ";
foreach ($getLotto as $outLotto) {
    echo $outLotto . " ";
}

$aantalGoed = array_intersect($invoer, $getLotto);
$aantalGoedGetal = count($aantalGoed);
echo PHP_EOL;

switch ($aantalGoedGetal) {
    case 3:
        echo "Je hebt 10 euro gewonnen!";
        break;
    case 4:
        echo "Je hebt 1000 euro gewonnen!";
        break;
    case 5:
        echo "Je hebt 100.000 euro gewonnen!";
        break;
    case 6:
        echo "Je hebt 10.000.000 euro gewonnen!";
        break;
}


?>