<?php

$connection = mysqli_connect('localhost', 'lukasderuiter', 'test650411', 'project_pokedex');

if(!$connection) {
    echo "error: " . mysqli_connect_error();
}

$sql = "SELECT * FROM pokemon";

$result = mysqli_query($connection, $sql);

$fullPokedex = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

?>