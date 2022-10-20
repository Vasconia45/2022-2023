<!DOCTYPE html>
<html>
    <head>
        <title>TOP Movies</title>
    </head>
    <body>
        <?php
            include("movie.php"); 
            $movies = new Movies();
            if (isset($_POST["send"])){
                $p1 = new Movie($_POST["name"], $_POST["isan"], $_POST["year"], $_POST["points"]);
                $movies->addMovie($p1);
            }
         ?>
        <div>
            <p><?php echo $movies->showMovies(); ?></p>
            <form action="index.php" method="POST">
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
                <input type="hidden" name="oculto" value="<?php echo $movies->compareMovie();?>">
                <input type="submit" name="send" value="Send">
            </form>

        
        </div>


    </body>
</html>