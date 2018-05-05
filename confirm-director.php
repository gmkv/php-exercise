<?php
require_once('movie.php');

print "<pre>";
print_r($_POST);
print "</pre>";

$m = new Movie();
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$m->addDirector($fName, $lName);

echo 'Added a director successfully!';
