<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otakuverse</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Otakuverse</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="favorit.php">Favorit</a>
            <a href="onGoing.php">On Going</a>
            <a href="anime_genre.php">Genre</a>
        </nav>
    </header>
    <main>
        <section>
            <h2>Season Anime</h2>
            <div id="anime-list">
                <?php include 'anime_data.php'; ?>
            </div>
        </section>
    </main>
    <footer>
        <?php include 'counter.php'; ?>
    </footer>
</body>
</html>
