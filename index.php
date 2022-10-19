<!DOCTYPE html>
<html>
    <head>
        <title>TOP Movies</title>
    </head>
    <body>
        <div>
            <form action="main2.php" method="POST">
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
                <input type="hidden" name="oculto[]" value="alta">
                <input type="submit" name="send" value="Send">
            </form>
        </div>
    </body>
</html>