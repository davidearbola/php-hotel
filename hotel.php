<?php

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4,
        'image' => 'https://picsum.photos/300/200'
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2,
        'image' => 'https://picsum.photos/300/200'
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1,
        'image' => 'https://picsum.photos/300/200'
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5,
        'image' => 'https://picsum.photos/300/200'
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50,
        'image' => 'https://picsum.photos/300/200'
    ],
    [
        'name' => 'Hotel Savoia',
        'description' => 'Hotel Savoia Descrizione',
        'parking' => true,
        'vote' => 5,
        'distance_to_center' => 550,
        'image' => 'https://picsum.photos/300/200'
    ],
];

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
    <!-- <pre>
        <?php
        // var_dump($hotels)
        ?>
    </pre> -->
    <div class="container">
        <div class="row">
            <?php
            foreach ($hotels as $hotel) {
            ?>
                <div class="col">
                    <div class="box">
                        <img src="<?php echo $hotel['image'] ?>" alt="">
                        <div class="box-bottom-card">
                            <h3 class="mb-1"><?php echo $hotel['name'] ?></h3>
                            <p class="mb-05"><?php echo $hotel['description'] ?></p>
                            <p>Parcheggio: <?php
                                            if ($hotel['parking']) {
                                                echo 'Presente';
                                            } else {
                                                echo 'Assente';
                                            } ?>
                            </p>
                            <p>Voto: <?php echo $hotel['vote'] ?></p>
                            <p>Distanza dal centro: <?php echo $hotel['distance_to_center'] ?> metri</p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>