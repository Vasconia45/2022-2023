<!DOCTYPE html>
<html>
    <body>
        <?php
            include("movie.php");
            $p2 = new Movie($_POST["name"], $_POST["isan"], $_POST["year"], $_POST["points"]);
            echo $oculto;



        /*echo $_POST["name"] . " - " . $_POST["isan"] . " - " . $_POST["year"] . " - " .  $_POST["points"];
        

            if(empty($movies)){
                echo "empty";
                $p1 = new Movies($_POST["name"], $_POST["isan"], $_POST["year"], $_POST["points"]);
                $movies[$_POST["isan"]] = $p1;
            }
            else{
                echo "ibd";
                $p1 = new Movies($_POST["name"], $_POST["isan"], $_POST["year"], $_POST["points"]);
                $movies[$_POST["isan"]] = $p1;
            }

            echo count($movies);
          */  
        ?>
        <br>
        <a href="index.php"> Return back</a>
    </body>
</html>