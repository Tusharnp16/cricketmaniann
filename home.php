<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Cricket News</title>
    <link rel="stylesheet" href="home2.css">
</head>
<body>
<?php include 'navigation.php'; ?>

    <div class="main-container">
        <header>
            <h1>Welcome to Cricket Mania</h1>
            <p>Stay updated with the latest cricket news, match scores, and player insights!</p>
        </header>

        <section class="news-section">
            <h2>Latest Cricket News</h2>
            <div class="news-cards">
                <div class="news-card">
                    <img src="uploads/wc.jpg" alt="News 1">
                    <h3>Cricket World Cup 2024: India vs Australia</h3>
                    <p>India faces Australia in the much-anticipated World Cup semifinal. Read about the key players, team strategies, and match predictions.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="news-card">
                    <img src="uploads/wc.jpg" alt="News 2">
                    <h3>Rohit Sharma Breaks Record</h3>
                    <p>Indian opener Rohit Sharma has set a new record for the most number of sixes in a T20I match. Read the full article for more details.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="news-card">
                    <img src="uploads/wc.jpg" alt="News 3">
                    <h3>IPL 2024: Teams to Watch</h3>
                    <p>The IPL 2024 season is gearing up to be the most exciting yet. Check out the teams to look out for and their key players.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
        </section>

        <section class="upcoming-matches">
            <h2>Upcoming Matches</h2>
            <table>
                <tr>
                    <th>Match</th>
                    <th>Date</th>
                    <th>Venue</th>
                </tr>
                <tr>
                    <td>India vs Australia</td>
                    <td>December 12, 2024</td>
                    <td>Melbourne Cricket Ground</td>
                </tr>
                <tr>
                    <td>England vs New Zealand</td>
                    <td>December 13, 2024</td>
                    <td>Lord's Cricket Ground</td>
                </tr>
                <tr>
                    <td>Pakistan vs South Africa</td>
                    <td>December 15, 2024</td>
                    <td>National Stadium, Karachi</td>
                </tr>
            </table>
        </section>

        <section class="featured-articles">
            <h2>Featured Articles</h2>
            <div class="article-cards">
                <div class="article-card">
                    <h3>How Technology is Changing Cricket</h3>
                    <p>Explore how innovations like Hawk-Eye, VR training, and data analytics are transforming the way we watch and play cricket.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="article-card">
                    <h3>Best Cricket Stadiums Around the World</h3>
                    <p>From Lord’s to Eden Gardens, discover the most iconic cricket stadiums across the globe.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="article-card">
                    <h3>The Rise of Young Cricketers in T20 Leagues</h3>
                    <p>Younger players are taking the T20 leagues by storm. Find out which emerging talents you should watch in the upcoming seasons.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
        </section>
    </div>

<?php include 'footer.html'; ?>

</body>
</html>
