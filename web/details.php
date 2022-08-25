<?php
session_start();
if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {
    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
}
