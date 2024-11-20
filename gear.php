<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Gear</title>
    <link rel="stylesheet" href="cricket-gear.css">
    <style>
        /* Page Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            margin: 0;
        }

        .main-container {
            padding: 20px;
        }

        .product-section {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .product-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-card h3 {
            margin: 10px 0;
            font-size: 1.2em;
            color: #343a40;
        }

        .product-card p {
            font-size: 1em;
            color: #666;
        }

        .product-card a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1em;
        }

        .product-card a:hover {
            background-color: #218838;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <h1>Cricket Gear</h1>
    <p>Your one-stop shop for all things cricket!</p>
</header>

<div class="main-container">

    <section class="product-section">
        <!-- Cricket Bat -->
        <div class="product-card">
            <img src="uploads/cricket-bat.jpg" alt="Cricket Bat">
            <h3>Premium Cricket Bat</h3>
            <p>Experience powerful shots with our lightweight, high-quality cricket bats designed for professional players.</p>
            <a href="#">Buy Now</a>
        </div>

        <!-- Cricket Ball -->
        <div class="product-card">
            <img src="uploads/cricket-ball.jpg" alt="Cricket Ball">
            <h3>Cricket Ball</h3>
            <p>Durable cricket balls perfect for practice or match play. Available in both red and white options.</p>
            <a href="#">Buy Now</a>
        </div>

        <!-- Cricket Gloves -->
        <div class="product-card">
            <img src="uploads/cricket-gloves.jpg" alt="Cricket Gloves">
            <h3>Cricket Gloves</h3>
            <p>Protect your hands with our high-performance gloves, designed for maximum comfort and grip.</p>
            <a href="#">Buy Now</a>
        </div>

        <!-- Cricket Helmet -->
        <div class="product-card">
            <img src="uploads/cricket-helmet.jpg" alt="Cricket Helmet">
            <h3>Cricket Helmet</h3>
            <p>Safety first! Our cricket helmets offer top-level protection without compromising comfort and visibility.</p>
            <a href="#">Buy Now</a>
        </div>

        <!-- Cricket Pads -->
        <div class="product-card">
            <img src="uploads/cricket-pads.jpg" alt="Cricket Pads">
            <h3>Cricket Pads</h3>
            <p>Lightweight yet durable, our cricket pads provide excellent protection while keeping you agile on the field.</p>
            <a href="#">Buy Now</a>
        </div>
    </section>

</div>

<footer>
    <p>&copy; 2024 Cricket Gear. All rights reserved.</p>
</footer>

</body>
</html>
