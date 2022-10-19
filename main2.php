<!DOCTYPE html>
<html>
    <body>
        <?php
        include("movie.php");
        $cookie = $_POST["isan"];
        $p2 = new Movies($_POST["name"], $_POST["isan"], $_POST["year"], $_POST["points"]);
        $cookie_value = $p2->toString();
            if(!isset($_COOKIE[$cookie])){
                setcookie($cookie, $cookie_value, time() + (86400 * 30), "/");
            }
            else{
                echo "The cookie allready exists.";
            }
        ?>
        <br>
        <a href="index.php"> Return back</a>
    </body>
</html>