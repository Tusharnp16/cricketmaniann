<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Equipment</title>
    <link rel="stylesheet" href="nav.css">

</head>

<body>

    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>
    <header>

        <nav>
            <ul class="nav-links">
                <div class="logo">
                    <h1>Cricket Mania</h1>
                </div>
                <li><a href="#home">Home</a></li>
                <li>
                    <a href="coachshow.php">Coaches</a>
                </li>
                <li class="dropdown">
                    <a href="#players">Players</a>
                    <ul class="dropdown-menu">
                        <li><a href="playerdetailes.php">Batsmen</a></li>
                        <li><a href="playerdetailes.php">Bowlers</a></li>
                        <li><a href="playerdetailes.php">All-Rounders</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#products">Products</a>
                    <ul class="dropdown-menu">
                        <li><a href="#gear">Cricket Gear</a></li>
                        <li><a href="merchnadise.php">Merchandise</a></li>
                    </ul>
                </li>
                <li><a href="#gallery">Gallery</a></li>
                <li class="dropdown">
                    <a href="#login">Login</a>
                    <ul class="dropdown-menu">
                        <li><a href="registractioncoach.html">Register as coach</a></li>
                        <li><a href="registrationplayer.html">Register as player</a></li>
                        <li><a href="login.html">Login</a></li>



                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#more">More</a>
                    <ul class="dropdown-menu">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                    </ul>

                </li>


            </ul>
        </nav>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </header>



</html>