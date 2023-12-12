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
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">kay 1</th>
                <th scope="col">kay 2</th>
                <th scope="col">kay 3</th>
                <th scope="col">kay 4</th>
                <th scope="col">kay 5</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>name</td>
                <td>description</td>
                <td>parking</td>
                <td>vote</td>
                <td>distance_to_center</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>name</td>
                <td>description</td>
                <td>parking</td>
                <td>vote</td>
                <td>distance_to_center</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>name</td>
                <td>description</td>
                <td>parking</td>
                <td>vote</td>
                <td>distance_to_center</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>name</td>
                <td>description</td>
                <td>parking</td>
                <td>vote</td>
                <td>distance_to_center</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>name</td>
                <td>description</td>
                <td>parking</td>
                <td>vote</td>
                <td>distance_to_center</td>
            </tr>
            
        </tbody>
    </table>

</body>

</html>