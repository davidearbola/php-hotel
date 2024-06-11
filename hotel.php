<?php

$choosePark = $_GET['parking'];
$chooseVote = $_GET['vote'];

if ($choosePark == 'Presente') {
    $choosePark = true;
} elseif ($choosePark == 'Assente') {
    $choosePark = false;
} elseif ($choosePark == 'Scegli') {
    $choosePark = null;
}

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4,
        'image' => 'https://cdn.pixabay.com/photo/2013/12/28/13/57/caesars-palace-234744_1280.jpg'
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2,
        'image' => 'https://cdn.pixabay.com/photo/2021/12/11/07/59/hotel-6862159_640.jpg'
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1,
        'image' => 'https://cdn.pixabay.com/photo/2015/09/07/19/12/hotel-928937_640.jpg'
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5,
        'image' => 'https://cdn.pixabay.com/photo/2016/08/29/20/52/los-angeles-1629161_640.jpg'
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50,
        'image' => 'https://cdn.pixabay.com/photo/2018/08/08/13/34/taj-mahal-palace-hotel-3592184_640.jpg'
    ],
    [
        'name' => 'Hotel Savoia',
        'description' => 'Hotel Savoia Descrizione',
        'parking' => true,
        'vote' => 5,
        'distance_to_center' => 550,
        'image' => 'https://cdn.pixabay.com/photo/2019/11/02/22/40/woodstock-4597568_640.jpg'
    ],
];

function createHotelCard($hotel)
{
    $card = "<div class='col'>
    <div class='box'>
        <img src='{$hotel['image']}'>
        <div class='box-bottom-card'>
            <h3 class='mb-1'> {$hotel['name']} </h3>
            <p class='mb-05'>{$hotel['description']}</p>
            
            <p>Voto: {$hotel['vote']} </p>
            <p>Distanza dal centro: {$hotel['distance_to_center']}metri</p>
        </div>
    </div>
    </div>";
    return $card;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Hotel</title>
</head>

<body>
    <h1>Lista Hotel</h1>
    <form action="hotel.php" method="GET">
        <label for="parking">Parcheggio</label>
        <select name="parking" id="parking">
            <option value="Scegli">Scegli</option>
            <option value="Presente">Presente</option>
            <option value="Assente">Assente</option>
        </select>
        <label for="vote">Voto</label>
        <select name="vote" id="vote">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="submit">Cerca</button>
    </form>
    <div class="container">
        <div class="row">
            <?php
            foreach ($hotels as $hotel) {
                if ($choosePark === null || $choosePark === $hotel['parking'] && $hotel['vote'] >= $chooseVote) {
                    echo createHotelCard($hotel);
                }
            }
            ?>
        </div>
    </div>

</body>

</html>