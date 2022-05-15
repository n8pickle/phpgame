<?php
    session_start();

?>

<!DOCTYPE html>
<html>
    <body>
        <h1>Number Game</h1>
        <form action="guess.php" method="post">
            <div style="display: flex; flex-direction: column; padding: 5px;">
                <p>Guess (1-100): <input type="text" name="Guess" /></p>
                <button style="width: 75px;" type="submit" value="Submit">Guess</button>
            </div>
        </form>
    </body>
</html>