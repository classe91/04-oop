<?php

require_once __DIR__ . '/Models/Media.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Song.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista file multimediali</title>
</head>

<body>
    <style>
        body {
            background-color: #171214;
            color: #CCCCCC;
        }
    </style>

    <?php

    try {

        $fotoAlLago = new Media(2, 'MB', 'jpg', 'Foto al lago', 'Donato');
        $fotoAlLago->print_details();

        $titanic = new Movie(2, 'GB', 'avi', 'Titanic', 'James Cameron', 180, ['Leonardo DiCaprio']);

        $titanic->set_streaming_services('Netflix');
        $titanic->set_streaming_services('Amazon Prime');

        $titanic->print_details();

        $blue = new Song(10, 'MB', "mp3", "I'm Good (Blue)", 'David Guetta', 3, "128 kbps");
        $blue->set_streaming_services('Spotify');
        $blue->set_streaming_services('Spotify');

        $blue->print_details();
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    ?>

</body>

</html>