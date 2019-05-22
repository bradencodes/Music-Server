<!DOCTYPE html>

<?php
include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php");

// session_destroy();

if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
    echo "<script>userLoggedIn = '$userLoggedIn';</script>";
}
else {
    header("Location: register.php");
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>

    <div id="mainContainer">

        <div class="topContainer">

            <?php include("includes/navBarContainer.php") ?>

            <div id="mainViewContainer">

                <div id="mainContent">