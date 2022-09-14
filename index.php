<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bidoni:400,700">
    <title>Pelicules</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
        if(file_exists('movies.json')){
            $arxiu_pelis ='movies.json';
            $info_pelis = file_get_contents($arxiu_pelis);
            $pelicules = json_decode($info_pelis);
        }else{
            $message= "<h1>JSON file Not found</h1>";
        }
    ?>

    <div class="table">
        <div class="table-container">
            <table id="tbstyle">
                <tbody>
                    <!-- tr stands for TABLE ROW -->
                    <tr>
                        <!-- th stands for TABLE HEADER -->
                        <th><h1>Title</th></h1>
                        <th><h1>Year</th></h1>
                        <th><h1>Cast</th></h1>
                        <th><h1>Genres</th></h1>
                    </tr>
                    <?php foreach ($pelicules as $pelicula) { ?>
                        <tr>
                            <!-- td stands for TABLE DATA -->
                            <!-- ?= equals to echo -->
                            <td> <?= $pelicula->title; ?> </td>
                            <td> <?= $pelicula->year; ?> </td>
                            <td> <?php foreach ($pelicula->cast as $pelicula->cast) { ?> <?= $pelicula->cast; ?> <?php } ?></td>
                            <td> <?php foreach ($pelicula->genres as $pelicula->genres) { ?> <?= $pelicula->genres; ?> <?php } ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>    
</body>
</html>