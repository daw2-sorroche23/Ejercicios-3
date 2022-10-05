<?php
$db = mysqli_connect('localhost', 'root', 'Pokemon2001!') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

// select the movie titles and their genre after 1990
$query = 'SELECT
        m.movie_name , act1.people_fullname as actor , act2.people_fullname as director
    FROM
        movie m , people act1 , people act2
    WHERE
        act1.people_id = m.movie_leadactor and act2.people_id = m.movie_director';

$result = mysqli_query($db, $query) or die(mysqli_error($db));

// show the results
echo '<table border="1">';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    foreach ($row as $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>