<!DOCTYPE html>
<html>
    <head>
        <title>TOP Movies</title>
    </head>
    <body>
        <div>
            <?php
                
            ?>
        </div>
        <div>
            <form action="movies.php" method="POST">
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

            <?php
                include "movie.php";

                $movies = [];

                $p1 = new Movies($_POST["name"], $_POST["isan"], $_POST["year"], $_POST["points"]);
                $movies[$p1->getIsan()] = $p1;

                foreach($movies as $key => $i){
                    echo $key;
                }

                /*if(empty($_POST["name"]) && empty($_POST["isan"])){
                    echo "The Name and th ISAN of the movie are empty.";
                }
                else{
                }

                foreach($this->movies as $key => $i){
                    echo $key;
                }*/

            ?>
        </div>
    </body>
</html>