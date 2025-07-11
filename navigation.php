<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Mania</title>
    <link rel="stylesheet" href="nav2.css">

    <script>
    (function (w, d) {
        w.CollectId = "674d98b28272c8d2e7e359d5"; var h = d.head || d.getElementsByTagName("head")[0];
        var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); 
        s.async = true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); 
        h.appendChild(s); })(window, document);</script>

</head>

<body>

    <?php
    @session_start();
    $isAdmin = isset($_SESSION['type']) && $_SESSION['type'] === 'admin';
    if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
    } else {
        $name = "Guest";
    }

    ?>


    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>
    <header>

        <nav>
            <ul class="nav-links">
                <div class="logo">

                    <h1 class="mania">Cricket Mania</h1>
                </div>
                <li><a href="home.php">Home</a></li>
                <li>
                    <a href="coachshow.php">Coaches</a>
                </li>
                <li class="dropdown">
                    <a href="">Players</a>
                    <ul class="dropdown-menu">
                        <li><a href="batsmen.php">Batsmen</a></li>
                        <li><a href="bowler.php">Bowlers</a></li>
                        <li><a href="allrounder.php">All-Rounders</a></li>
                        <li><a href="wkbatsmen.php">Wk-Batsmen</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="">Products</a>
                    <ul class="dropdown-menu">
                        <li><a href="#gear">Cricket Gear</a></li>
                        <li><a href="merchnadise.php">Merchandise</a></li>
                    </ul>
                </li>
                <li><a href="profile.php">Profile</a></li>
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
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                    </ul>
                </li>

                <ul>
                    <?php

                    if ($isAdmin): ?>
                        <li class="dropdown">
                            <a href="#more">Admin Panel</a>
                            <ul class="dropdown-menu">
                                <li><a href="addequiments.php">Add Product</a></li>
                                <li><a href="adminmerchnadise.php">View Products</a></li>
                                <li><a href="alluser.php">View User</a></li>
                                <li><a href="adminfeedback.php">View Feedback</a></li>
                                <li><a href="admincotauct.php">View ContactUs</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
                <div class='sessionname'>
                    <?php

                    if ($name == "Guest")

                        echo "Hii,Guest";
                    else {
                        echo "Hii, " . htmlspecialchars($name);

                    }

                    ?>
                </div>
            </ul>
        </nav>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </header>




</html>