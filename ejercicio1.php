<?php
$db = mysqli_connect('localhost', 'root', 'Pokemon2001!') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));


$query = 'ALTER TABLE
        movie
    ADD FOREIGN KEY
        (movie_leadactor) REFERENCES  people (people_id)';

$result = mysqli_query($db, $query) or die(mysqli_error($db));

echo 'La relacion se ha llevado acabo!';
?>