<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <!-- Tabella -->
    <table class="table table-hover table-danger">
        <thead>
            <tr>
            <!-- ciclo per titoli -->
            <?php foreach ($hotels[0] as $key => $hotel_array) { ?>
                <th class="text-center" scope="col"> <?php echo $key ?> </th>
            <?php } ?>
            </tr>

        </thead>
        <tbody>
            <!-- ciclo per informazioni -->
        <?php foreach ($hotels as $kay => $hotel_array) { ?>
            <tr class="text-center">
                <td> <?php echo $hotel_array["name"] ?>  </td>
                <td> <?php echo $hotel_array["description"] ?> </td>
                <td> <?php echo $hotel_array["parking"] ? "✓" : "x" ?> </td>
                <td> <?php echo $hotel_array["vote"] ?> </td>
                <td> <?php echo $hotel_array["distance_to_center"] ?> km </td>
            </tr>
            <?php } ?>

        </tbody>
    </table>

</body>
</html>