<?php
    $_SESSION["RandNumber"] = rand(1, 100);
?>

<!DOCTYPE html>
<html>
    <body>
        <h1>Number Game</h1>
        <form action="guess-page.php" method="get">
            <input type="submit" value="Start Game" name="Submit" />
        </form>
    </body>
</html>   