<?php
session_start();
if (!$_SESSION["loggedIn"]) {
    echo "<br> * No Session Loging in to new session<br>";
    $_SESSION["loggedIn"] = true;
    $_SESSION["user"] = "This is test";
}

$session_id = session_id();
echo "<br> * Session id:".$session_id;
echo "<br><a href='details.php'>see more</a><br>";
