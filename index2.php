<!DOCTYPE html>
<html>
    <head>
        <title>TOP Movies</title>
    </head>
    <body>
        <?php
            include("movie.php");
            if(isset($_POST["send"])){
                if(empty($_POST["isan"]) && empty($_POPST["name"])){
                    echo "The fields name and isan are empty.";
                }
                if(!isset($_COOKIE[$cookie]) && strlen($_POST["isan"]) == 8){
                    $cookie = $_POST["isan"];
                    $p2 = new Movie($_POST["name"], $_POST["isan"], $_POST["year"], $_POST["points"]);
                    $cookie_value = $p2;
                    setcookie($cookie, $cookie_value, time() + (86400 * 30), "/");
                }
                else{
                    echo "The cookie allready exists.";
                }
            }
         ?>
        <div>
            <p><?php echo count($_COOKIE);?></p>
            <form action="index2.php" method="POST">
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
            </form>

        
        </div>


    </body>
</html>