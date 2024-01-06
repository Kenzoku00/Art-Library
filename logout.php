<?php

session_start();
session_destroy();

if (isset($_SESSION['username'])) {
    session_destroy();
}

header("Location: 1.LoginRegister.php");
exit();

?>
