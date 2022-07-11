<?php
function getcostInDate($db, $date)
{
    $date = new \MongoDB\BSON\UTCDateTime(strtotime($date) * 1000);
    $statement = $db->find(['date_start' => ['$lte' => $date], 'date_end'=>['$gte'=>$date]]);
    echo "<div id='save'>";
    foreach ($statement->toArray() as $data) {
        echo "Car brand: {$data['brand']} Cost: {$data['cost']}<br>";
    }
    echo "</div>";
}

function getCarsWithRaceLessЕransmittedRace($db, $race)
{
    $statement = $db->find(['race'=>['$lt'=>(int)$race]]);
    echo "<div id='save'>";
    foreach ($statement->toArray() as $data) {
        echo " Car brand: {$data['brand']} Race: {$data['race']}<br>";
    }
    echo "</div>";
}

function getCarBrands($db)
{
    $statement = $db->distinct("brand");
    echo "<div id='save'>";
    foreach ($statement as $data) {
        echo "Car brand: $data<br>";
    }
    echo "</div>";
}