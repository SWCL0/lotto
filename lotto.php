<?php

$invoer = array();
$getLotto = array();

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

echo "Je gekozen cijfers zijn: ";
foreach ($invoer as $getal) {
    echo $getal . " ";
}

for ($i = 0; $i < 6; $i++) {
    $getLotto[] = rand(1, 42);
}
sort($getLotto);

echo "De trekking cijfers zijn: ";
foreach ($getLotto as $outLotto) {
    echo $outLotto . " ";
}


?>