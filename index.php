<!DOCTYPE html>

<?php
include("includes/config.php");

// session_destroy();

if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
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
</head>
<body>
    
    <div id="nowPlayingBarContainer">
        <div id="nowPlayingBar">

            <div id="nowPlayingLeft">
            </div>

            <div id="nowPlayingCenter">

                <div class="content playerControls">

                    <div class="buttons">

                        <button class="controlButton shuffle" title="shuffle">
                            <img src="assets/images/icons/shuffle.png" alt="shuffle">
                        </button>

                        <button class="controlButton previous" title="previous">
                            <img src="assets/images/icons/previous.png" alt="previous">
                        </button>

                        <button class="controlButton play" title="play">
                            <img src="assets/images/icons/play.png" alt="play">
                        </button>

                        <button class="controlButton pause" title="pause" style="display: none">
                            <img src="assets/images/icons/pause.png" alt="pause">
                        </button>

                        <button class="controlButton next" title="next">
                            <img src="assets/images/icons/next.png" alt="next">
                        </button>

                        <button class="controlButton repeat" title="repeat">
                            <img src="assets/images/icons/repeat.png" alt="repeat">
                        </button>

                    </div>

                    <div class="playbackBar">

                        <span class="progressTime current">0.00</span>

                        <div class="progressBar">
                            <div class="progressBarBg">
                                <div class="progress"></div>
                            </div>
                        </div>

                        <span class="progressTime remaining">0.00</span>

                    </div>

                </div>

            </div>

            <div id="nowPlayingRight">
            </div>

        </div>
    </div>



</body>
</html>