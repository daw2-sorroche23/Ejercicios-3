<?php
$db = mysqli_connect('localhost', 'root', 'Pokemon2001!') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

// insert data into the movie table
$query = 'INSERT INTO movie
        (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    VALUES
        (4, "Deadpool 3", 1, 2023, 6, 4),
        (5, "Wakanda Forever", 1, 2022, 2, 5),
        (6, "Avatar 2", 1, 2022, 3, 1)';
mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the movietype table
$query = 'INSERT INTO movietype 
        (movietype_id, movietype_label)
    VALUES 
        (9,"Fantasy"),
        (10, "Musical"), 
        (11, "Romance")';

mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the people table
$query  = 'INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (7, "Ryan Reynolds", 0, 1),
        (8, "Letitia Wright", 1, 0),
        (9, "Sam Worthington", 1, 0)';

mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';

$result = mysqli_query($db, $query) or die(mysqli_error($db));

echo 'La datos han sido añadidos se ha llevado acabo!';
?>