<?php
session_start();
if (isset($_SESSION['id']) && empty($_SESSION['id']) == FALSE) {

    header("Location: miminium-master/index.html");
} else {
    header("Location: ./login.php");
}
?>