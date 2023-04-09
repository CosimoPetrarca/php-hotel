<!-- array hotels -->
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
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center p-4">Php Hotel List</h1>

        <!-- bottone per filtrare i parcheggi -->
        <form method="GET" class="pb-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="parking" id="parkingCheckbox">
                <label class="form-check-label" for="parkingCheckbox">
                    Hotel con parcheggio
                </label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Filtra</button>
        </form>

        <!-- tabella alberghi -->
        <table class="table">
            <thead>
                <tr>
                    <th class="table-info">Name</th>
                    <th class="table-info">Description</th>
                    <th class="table-info">Parking</th>
                    <th class="table-info">Vote</th>
                    <th class="table-info">Distance to center</th>
                </tr>
            </thead>
            <tbody>
                <!-- ciclo per stampare l'array hotels -->
                <?php foreach ($hotels as $hotel) { ?>
                    <tr>
                        <td>
                            <?php echo $hotel['name']; ?>
                        </td>
                        <td>
                            <?php echo $hotel['description']; ?>
                        </td>
                        <td>
                            <?php echo ($hotel['parking'] ? 'Yes' : 'No'); ?>
                        </td>
                        <td>
                            <?php echo $hotel['vote']; ?>
                        </td>
                        <td>
                            <?php echo $hotel['distance_to_center']; ?> km
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>