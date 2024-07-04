<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorit - Otakuverse</title>
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
        <h2>Anime On Going</h2>
        <div id="anime-list">
            <?php
            // Data anime yang sedang tayang
            $animes = [
                ["title" => "Wind Breaker", "genre" => "Action", "studio" => "CloverWorks", "image" => "Wind Breaker.jpg", "description" =>"Haruka Sakura merupakan seorang remaja yang pada dasarnya enggan untuk terlibat
                dengan orang lemah. Namun Sakura yang baru saja masuk SMA Furin mulai mengalami perubahan yang begit drastis dalam hidupnya", "Tanggal Rilis" => "2024-04-05"],
                ["title" => "KonoSuba Season 3", "genre" => "Adventur", "studio" => "Drive", "image" => "Konosuba.jpg", "description" => "Isekan Farming Slime", "Tanggal Rilis" => "2024-04-10"],
                ["title" => "Mashle Season 2", "genre" => "Fantasy", "studio" => "A-1 Pictures", "image" => "Mashel.jpg", "description" => "", "Tanggal Rilis" => "2024-01-06"],
                ["title" => "Kimetsu No Yaiba: Hashira Geiko-hen", "genre" => "Action", "studio" => "ufotable", "image" => "KNY Hashira.jpg", "description" => "", "Tanggal Rilis" => "2024-05-12"],
                ["title" => "Isekai Suicide Squad", "genre" => "isekai", "studio" => "Wit Studio", "image" => "Harley Queen.jpg", "description" => "", "Tanggal Rilis" => "2024-07-06"],
                ["title" => "Boruto", "genre" => "Action", "studio" => "Studio Pierrot", "image" => "Boruto.jpg", "description" => "Cerita berfokus terhadap boruto Uzumaki yang merupakan putra dari sang ninja legendaris
                penyelamat dunia, Naruto Uzumaki yang kini menjabat sebagai hokage ke-7. Boruto memiliki sifat yang keras kepala dan susah diatur, ia ingin terbebas dari kehidupan yang mengekangnya dan ingin melangkah bebas sesuai keinginannya sendiri",
            "Tanggal Rilis" => "2017-04-05"],
            ];

            // Looping untuk menampilkan setiap anime
            foreach ($animes as $anime) {
                echo "<div class='anime-item'>
                <img src='{$anime['image']}' alt='{$anime['title']}' width='150' height='200'>
                <h3>{$anime['title']}</h3>
                <p>{$anime['description']}</p>
                <p>Genre: {$anime['genre']}</p>
                <p>Studio: {$anime['studio']}</p>
                <p>Tanggal Rilis: {$anime['Tanggal Rilis']}</p>
                <form action='favorit.php' method='POST'>
                    <input type='hidden' name='title' value='{$anime['title']}'>
                    <button type='submit'>Add to Favorit</button>
                </form>
              </div>";
            }
            ?>
        </div>
    </main>
    <footer>
        <?php include 'counter.php'; ?>
    </footer>
</body>
</html>
