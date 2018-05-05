<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
            width: 500px;
        }

        section {
            float: left;
        }
    </style>
</head>
<body>
<aside>
    <div>
        <p>Add a director</p>
        <form method="post" name="directorForm" action="confirm-director.php">
            <label for="fName">First name:</label>
            <input type="text" name="fName" id="fName">
            <label for="lName">Last name:</label>
            <input type="text" name="lName" id="lName">
            <input type="submit" name="submit" value="Add director">
        </form>
    </div>
        <br><br><br><br>
    <div>
        <p>Add a movie</p>
        <form method="post" name="movieForm" action="confirm-movie.php">
            <label for="title">Movie title:</label>
            <input type="text" name="title" id="title">
            <label for="directorId">DirectorId:</label>
            <input type="text" name="directorId" id="directorId">
            <input type="submit" name="submit" value="Add movie">
        </form>
    </div>
</aside>
<section>
    <section>
        <p>All directors</p>
        <?php require_once ('movie.php');
        $m = new Movie();
        $m->printAllDirectors(); ?>
    </section>

    <section>
        <p>All movies</p>
        <?php require_once ('movie.php');
        $m = new Movie();
        $m->printAllMovies();
        $m->closeConnection();?>
    </section>
</section>

</body>
</html>
