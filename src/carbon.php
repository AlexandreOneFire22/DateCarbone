<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

// 1.

$dateDuJour = new Carbon();
echo $dateDuJour->format("d/m/Y H:i:s");
echo PHP_EOL;

// 2.

$year = 2025; $month = 1; $day = 1; $hour = 12;

echo Carbon::create($year, $month, $day, $hour)->format("d/m/Y H:i")."\n";
echo PHP_EOL;
// 3.
$dateDuJour = new Carbon();
$dateDuJour->addDay(10);
echo $dateDuJour->format("d/m/Y H:i:s");
echo PHP_EOL;
$dateDuJour->addMonth(3);
echo $dateDuJour->format("d/m/Y H:i:s");
echo PHP_EOL;

// 4.

$dateDuJour = new Carbon();
$datePremierJanvier = Carbon::create(2024,1, 1);

echo $datePremierJanvier->diffInDays($dateDuJour);
echo PHP_EOL;
echo PHP_EOL;

// 5.

$dateMoinsUnSemaine = new Carbon("- 1 week");
echo $dateMoinsUnSemaine->diffForHumans();
echo PHP_EOL;
echo PHP_EOL;

// 6.

$dateDuJour = new Carbon();
var_dump($dateDuJour->isWeekend());

// 7.

$dateMoinsUnJour = new Carbon("- 1 day");
echo $dateMoinsUnJour->locale("fr")->diffForHumans();

// 8.

$dateAnniversaire = Carbon::create(2000,5, 15);
$dateDuJour = new Carbon();
echo PHP_EOL;
echo round($dateAnniversaire->diffInYears($dateDuJour));

echo PHP_EOL;


// 9.

$dateDepartVoyage = Carbon::today();
$dateDepartVoyage->addHour(9);

$dateArriver = $dateDepartVoyage->addDay(7)->addHour(5);

echo $dateArriver->format("d/m/Y H:i");

echo PHP_EOL;

// 10.

function dateEcheance(Carbon $date,int $nbJour){
    return $date->addDay($nbJour)->format("d/m/Y");
}

echo dateEcheance($dateDuJour,11);