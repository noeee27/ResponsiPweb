<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre Anime - Otakuverse</title>
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
            <h2>Genre Anime</h2>
            <form method="GET" action="anime_genre.php">
                <label for="genre">Cari Anime:</label>
                <select name="genre" id="genre">
                    <option value="All">All</option>
                    <option value="Action" <?php if (isset($_GET['genre']) && $_GET['genre'] == 'Action') echo 'selected'; ?>>Action</option>
                    <option value="Superhero" <?php if (isset($_GET['genre']) && $_GET['genre'] == 'Superhero') echo 'selected'; ?>>Superhero</option>
                    <option value="Horror" <?php if (isset($_GET['genre']) && $_GET['genre'] == 'Horror') echo 'selected'; ?>>Horror</option>
                    <option value="Comedy" <?php if (isset($_GET['genre']) && $_GET['genre'] == 'Comedy') echo 'selected'; ?>>Comedy</option>
                    <option value="Fantasy" <?php if (isset($_GET['genre']) && $_GET['genre'] == 'Fantasy') echo 'selected'; ?>>Fantasy</option>
                    <option value="Isekai" <?php if (isset($_GET['genre']) && $_GET['genre'] == 'Isekai') echo 'selected'; ?>>Isekai</option>
                </select>
                <button type="submit">Filter</button>
            </form>
            <div id="anime-list">
                <?php
                // Data Anime
                $animes = [
                    ["title" => "Attack on Titan", "genre" => "Action", "studio" => "MAPPA", "image" => "attack on titan.jpg", "description" =>"Attcak On Titan Selama Seratus tahun lebih manusia hidup dalam incaran para raksasa, kini manusia telah membuat sebuah dinding yang sangat besar setinggi melebihi besarnya para raksasa tersebut untuk bertahan hidup dari serangan para raksasa. Raksasa yang mengincar mereka disebut dengan Titan.", "Tanggal Rilis" => "2013-04-07"],
                    ["title" => "My Hero Academia", "genre" => "Superhero", "studio" => "Bones", "image" => "my hero academia.jpg", "description" => "Seorang bocah lelaki pecinta superhero tanpa kekuatan apa pun bertekad untuk mendaftar di akademi pahlawan bergengsi dan belajar apa artinya menjadi pahlawan.", "Tanggal Rilis" => "2016-04-03"],
                    ["title" => "Jujutsu Kaisen", "genre" => "Action", "studio" => "MAPPA", "image" => "jujutsu kaisen.jpg", "description" => "Mengisahkan Yuuji Itadori, seorang siswa SMA yang sangat ahli dalam olahraga atletik, khususnya lari. Walau memiliki kemampuan yang setara dengan Profesional, Yuuji memutuskan untuk bergabung dengan Klub Paranormal atau biasa di panggil dengan klub Penelitian Ilmu Gaib.", "Tanggal Rilis" => "2020-10-03"],
                    ["title" => "Kimetsu No Yaiba", "genre" => "Action", "studio" => "Ufotable", "image" => "Kimetsu No Yaiba.jpg", "description" => "Sejak dahulu, beredar rumor bahwa iblis pemakan manusia yang bersembunyi di dalam hutan akan muncul pada malam hari, karena para penduduk tak ada yang berani keluar malam-malam. Dan pada saat yang sama akan muncul para pembunuh iblis (demon slayer) yang berkeliaran pada malam hari untuk memburu iblis.", "Tanggal Rilis" => "2019-06-06"],
                    ["title" => "Spy X Family", "genre" => "Comedy", "studio" => "Wit Studio", "image" => "Spy X Family.jpg", "description" => "Loid Forge atau Twillight, seorang mata-mata yang bekerja untuk organisasi rahasia. Loid dikenal sebagai salah satu mata-mata yang selalu berhasil menyelesaikan misinya. Suatu hari, Loid di berikan tugas oleh atasannya untuk membentuk sebuah keluarga palsu.", "Tanggal Rilis" => "2022-04-09"],
                    ["title" => "Another", "genre" => "Horror", "studio" => "P.A Works", "image" => "Another.jpg", "description" => "Tahun 1972, Terdapat seorang siswa yang pintar secara akademis maupun non akademis kelas 3 SMP Yomiyama, ia bernama Misaki. Misaki sangat populer oleh teman sekelasnya bahkan di SMP 3 Yomiyama. Namun ia tiba-tiba saja meninggal, tapi teman sekelasnya dan guru-guru telah memutuskan untuk menganggap Misaki masih hidup hingga waktu hari kelulusan tiba nanti, namun telah terjadi sesuatu yang aneh, yaitu saat dimana sosok Misaki muncul di salah satu foto kelulusan.", "Tanggal Rilis" => "2012-01-10"],
                    ["title" => "Wind Breaker", "genre" => "Action", "studio" => "CloverWorks", "image" => "Wind Breaker.jpg", "description" => "Haruka Sakura merupakan seorang remaja yang pada dasarnya enggan untuk terlibat dengan orang lemah. Namun Sakura yang baru saja masuk SMA Furin mulai mengalami perubahan yang begitu drastis dalam hidupnya", "Tanggal Rilis" => "2024-04-05"],
                    ["title" => "KonoSuba Season 3", "genre" => "Adventure", "studio" => "Drive", "image" => "Konosuba.jpg", "description" => "Isekan Farming Slime", "Tanggal Rilis" => "2024-04-10"],
                    ["title" => "Mashle Season 2", "genre" => "Fantasy", "studio" => "A-1 Pictures", "image" => "Mashel.jpg", "description" => "", "Tanggal Rilis" => "2024-01-06"],
                    ["title" => "Kimetsu No Yaiba: Hashira Geiko-hen", "genre" => "Action", "studio" => "ufotable", "image" => "KNY Hashira.jpg", "description" => "", "Tanggal Rilis" => "2024-05-12"],
                    ["title" => "Isekai Suicide Squad", "genre" => "Isekai", "studio" => "Wit Studio", "image" => "Harley Queen.jpg", "description" => "", "Tanggal Rilis" => "2024-07-06"],
                    ["title" => "Boruto", "genre" => "Action", "studio" => "Studio Pierrot", "image" => "Boruto.jpg", "description" => "Cerita berfokus terhadap boruto Uzumaki yang merupakan putra dari sang ninja legendaris penyelamat dunia, Naruto Uzumaki yang kini menjabat sebagai hokage ke-7. Boruto memiliki sifat yang keras kepala dan susah diatur, ia ingin terbebas dari kehidupan yang mengekangnya dan ingin melangkah bebas sesuai keinginannya sendiri", "Tanggal Rilis" => "2017-04-05"],
                ];

                // Fungsi untuk memfilter anime berdasarkan genre
                function filterAnimeByGenre($animes, $selected_genre) {
                    if ($selected_genre == 'All') {
                        return $animes;
                    }

                    return array_filter($animes, function($anime) use ($selected_genre) {
                        return $anime['genre'] == $selected_genre;
                    });
                }

                // Mendapatkan genre yang dipilih dari URL parameter
                $selected_genre = isset($_GET['genre']) ? $_GET['genre'] : 'All';
                $filtered_animes = filterAnimeByGenre($animes, $selected_genre);

                if (empty($filtered_animes)) {
                    echo "<p>Anime Tidak Di Temukan Silahkan Pilih Lagi!!.</p>";
                } else {
                    foreach ($filtered_animes as $anime) {
                        echo "<div class='anime-item'>
                                <div class='anime-image'>
                                    <img src='{$anime['image']}' alt='{$anime['title']}' width='150' height='200'>
                                </div>
                                <div class='anime-details'>
                                    <h3>{$anime['title']}</h3>
                                    <p>{$anime['description']}</p>
                                    <p>Genre: {$anime['genre']}</p>
                                    <p>Studio: {$anime['studio']}</p>
                                    <p>Tanggal Rilis: {$anime['Tanggal Rilis']}</p>
                                    <form action='favorit.php' method='POST'>
                                        <input type='hidden' name='title' value='{$anime['title']}'>
                                        <button type='submit'>Add to Favorit</button>
                                    </form>
                                </div>
                              </div>";
                    }
                }
                ?>
            </div>
        </section>
    </main>
    <footer>
        <?php include 'counter.php'; ?>
    </footer>
</body>
</html>
