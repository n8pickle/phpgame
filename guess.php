<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            $guess = intval($_POST["Guess"]);
            $randNum = intval($_SESSION["RandNumber"]);

            function getGuessStatus($guess, $randNum) {
                if ($guess > $randNum) {
                    return "higher than";
                } else if ($guess < $randNum) {
                    return "less than";
                } else {
                    return "equal to"; 
                }
                return "";
            }

            $guessClause = getGuessStatus($guess, $randNum);

            echo "your guess " . $guess . " was " . $guessClause . " number " . $randNum ;

            if ($guessClause === "less than" || $guessClause === "higher than") {
                echo "
                    <form method=\"get\" action=\"guess-page.php\"> 
                        <input type=\"submit\" value=\"Done\" />
                    </form>
                ";
            } else {
                echo "
                    <form method=\"get\" action=\"winner.php\"> 
                        <input type=\"submit\" value=\"Done\" />
                    </form>
                ";
            }
        ?>
    </body>
</html>
