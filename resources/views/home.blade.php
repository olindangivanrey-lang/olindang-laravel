<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Jordan Kicks</title>
    <link rel="shortcut icon" href="../../../landing-starter/img/jord.png" type="image/x-icon">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #121212;
            color: #fff;
            text-align: center;
            padding: 0;
        }

        header {
            background-color: #1e1e1e;
            padding: 30px 20px;
        }

        header h1 {
            font-size: 3em;
            color: #045504;
            margin: 0;
        }

        nav {
            margin-top: 15px;
        }

        nav a {
            color: #f1faee;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        main {
            padding: 60px 20px;
        }

        main h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #f1faee;
        }

        main p {
            font-size: 1.2em;
            max-width: 700px;
            margin: 0 auto;
            color: #a8dadc;
        }

        footer {
            background-color: #1e1e1e;
            padding: 20px;
            font-size: 1em;
            color: #ccc;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Ivan Kicks</h1>
        
    </header>

    <main>
        <h2>Welcome to the Home of Jordan Sneakers</h2>
        <p>
            Discover the latest and greatest in Jordan shoes — from legendary retros to cutting-edge new drops.
            Premium quality, iconic style, and a community built on the love for the game.
        </p>
    </main>

    <div style="margin-top: 40px;">
    <a href="{{route('page.welcome')}}" style="
        display: inline-block;
        background-color: #045504;
        color: white;
        padding: 15px 30px;
        font-size: 1.2em;
        font-weight: bold;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    ">
        Shop Now
    </a>
</div>


    <footer>
    <div style="display: flex; align-items: center; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <img src="../../../landing-starter/img/gradpc.jpg" alt="CEO Photo" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
        <div>
            &copy;  Ivan Kicks — Created by <strong>[Ivan Rey Olindang]</strong>, CEO
        </div>
    </div>
</footer>

</body>
</html>
