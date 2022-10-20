<!DOCTYPE html>
<html>
    <body>
        <?php
        include("movie.php");
        if(empty($_POST["isan"]) && empty($_POPST["name"])){
            echo "The fields name and isan are empty.";
        }
        if(!isset($_COOKIE[$cookie]) && strlen($_POST["isan"]) == 8){
            $cookie = $_POST["isan"];
            $p2 = new Movies($_POST["name"], $_POST["isan"], $_POST["year"], $_POST["points"]);
            $cookie_value = $p2->toString();
            setcookie($cookie, $cookie_value, time() + (86400 * 30), "/");
        }
        else{
            echo "The cookie allready exists.";
        }
        /*if(){
                
        }*/
        ?>
        <br>
        <a href="index.php"> Return back</a>
    </body>
</html>