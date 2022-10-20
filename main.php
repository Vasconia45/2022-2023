<!DOCTYPE html>
<html>
    <head>
        <title>TOP Movies</title>
    </head>
    <body>
    <h1>Welcome <?php echo $_POST["username"]; ?></h1>
    <?php
            include("movie.php"); 
            $movies = new Movies();

            /*if (isset($_POST["send"])){
                $p1 = new Movie($_POST["name"], $_POST["isan"], $_POST["year"], $_POST["points"]);
                echo $movies->getMovies();
                echo $movies->compareMovie($p1);
                echo $movies->getMovies();
                $oculto = $oculto . $movies->returnMovie();
                if($movies->compareMovie($p1) == false){
                    $movies->addMovie($p1);
                    echo "inserted.";
                }
                else{
                    echo "theyre equal.";
                }
            }*/
         ?>
        <div>
            <?php
                if(isset($_POST["name"]) && isset($_POST["isan"]) && isset($_POST["year"]) && $_POST["points"]){
                    $movie = new Movie($_POST["name"], $_POST["isan"], $_POST["year"], $_POST["points"]);
                    $movies->addMovie($movie);
                    echo $movies->showMovies();
                }
            ?>
            <form action="main.php" method="POST">
                <span>Name:</span><input type="text" name="name"><br>
                <span>ISAN:</span><input type="text" name="isan"><br>
                <span>Year:</span><input type="text" name="year"><br>

                <label for="points">Points:</label>
                <select name="points" id="points">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>
                <input type="submit" name="send" value="Send">
                <input type="hidden" name="oculto" value='<?php echo $movies->showMovies();?>'>
            </form>

        
        </div>
    </body>
</html>