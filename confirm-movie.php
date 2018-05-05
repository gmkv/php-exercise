<?php
require_once('movie.php');

    print "<pre>";
        print_r($_POST);
    print "</pre>";

$m = new Movie();
$title = $_POST['title'];
$directorId = $_POST['directorId'];
$m->addMovie($title, $directorId);

echo 'Added a movie successfully!';
