<?php
require_once('config.inc.php');

class Movie {
    private $conn;

    function  __construct() {
        // connect to DB server
        $this->conn = mysqli_connect(DBSERVER, DBUSER, DBPASSWORD);
        // select the correct database that we are going to use
        mysqli_select_db($this->conn, DBNAME) or die(
            'Error select DB '.DBNAME.' '.mysqli_error($this->conn));
    }

    function addMovie($title, $directorId) {
        $query = "INSERT INTO movies(title, directorId) VALUES ('$title','$directorId');";

        mysqli_query($this->conn, $query) or die(
            'Error insert into DB.<br /> Query: '.$query.'<br /> Error: '.mysqli_error($this->conn). '<br />' );

    }
    function addDirector($fName, $lName) {
        $query = "INSERT INTO director(fName, lName) VALUES ('$fName','$lName');";

        mysqli_query($this->conn, $query) or die(
            'Error insert into DB.<br /> Query: '.$query.'<br /> Error: '.mysqli_error($this->conn). '<br />' );

    }

    function printAllMovies() {
        $query = "SELECT * FROM movies";
        // $result holds the information coming from DB
        $result = mysqli_query($this->conn, $query) or die(
            'Error select from DB.<br /> Query: '.$query.'<br /> Error: '.mysqli_error($this->conn). '<br />' );
        // how many results do we have from DB
        $moviesCount = mysqli_num_rows($result);
        while ($row = mysqli_fetch_assoc($result)) {
            print "<pre>";
            print_r($row);
            print "</pre>";
        }
        echo "<br /><b>Total number of movies: $moviesCount</b>";
        mysqli_free_result($result);
    }

    function printAllDirectors() {
        $query = "SELECT * FROM director";
        // $result holds the information coming from DB
        $result = mysqli_query($this->conn, $query) or die(
            'Error select from DB.<br /> Query: '.$query.'<br /> Error: '.mysqli_error($this->conn). '<br />' );
        // how many results do we have from DB
        $directorsCount = mysqli_num_rows($result);
        while ($row = mysqli_fetch_assoc($result)) {
            print "<pre>";
            print_r($row);
            print "</pre>";
        }
        echo "<br /><b>Total number of directors: $directorsCount</b>";
        mysqli_free_result($result);
    }

    function closeConnection() {
        mysqli_close($this->conn);
    }

}
