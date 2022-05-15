<?php
    session_start();

    session_unset();

    session_destroy();

    header('Location: http://www.n8pickle.epizy.com/game/');
?>