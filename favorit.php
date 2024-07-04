<?php
session_start();
// Daftar informasi anime favorit
$anime_favorit = [
    ["title" => "Attack on Titan", "genre" => "Action", "studio" => "MAPPA", "image" => "attack on titan.jpg", "description" =>"Attcak On Titan Selama Seratus tahun lebih manusia hidup dalam incaran para raksasa, kini manusia 
    telah membuat sebuah dinding yang sangat besar setinggi melebihi besarnya para raksasa tersebut untuk bertahan hidup dari serangan 
    para raksasa. Raksasa yang mengincar mereka disebut dengan Titan.", "Tanggal Rilis" => "2013-04-07"],
    ["title" => "My Hero Academia", "genre" => "Superhero", "studio" => "Bones", "image" => "my hero academia.jpg", "description" => "Seorang bocah lelaki pecinta superhero tanpa kekuatan apa pun bertekad 
    untuk mendaftar di akademi pahlawan bergengsi dan belajar apa artinya menjadi pahlawan.", "Tanggal Rilis" => "2016-04-03"],
    ["title" => "Jujutsu Kaisen", "genre" => "Action", "studio" => "MAPPA", "image" => "jujutsu kaisen.jpg", "description" => "Mengisahkan Yuuji Itadori, seorang siswa SMA yang sangat ahli dalam olahraga
    atletik, khususnya lari. Walau memiliki kemampuan yang setara dengan Profesional, Yuuji memutuskan untuk bergabung dengan Klub Paranormal
     atau biasa di panggil dengan klub Penelitian Ilmu Gaib.", "Tanggal Rilis" => "2020-10-03"],
    ["title" => "Kimetsu No Yaiba", "genre" => "Action", "studio" => "Ufotable", "image" => "Kimetsu No Yaiba.jpg", "description" => "Sejak dahulu, beredar rumor bahwa iblis pemakan manusia yang bersembunyi di dalam
     hutan akan muncul pada malam hari, karena para penduduk tak ada yang berani keluar malam-malam. Dan pada saat yang sama akan muncul para pembunuh iblis (demon slayer) yang
      berkeliaran pada malam hari untuk memburu iblis.", "Tanggal Rilis" => "2019-06-06"],
    ["title" => "Spy X Family", "genre" => "Comedy", "studio" => "Wit Studio", "image" => "Spy X Family.jpg", "description" => "Loid Forge atau Twillight, seorang mata0mata yang bekerja untuk organisasi rahasia.
     Loid dikenal sebagai salah satu mata-mata yang selalu berhasil menyelesaikan misinya. Suatu hari, Loid di berikan tugas oleh 
     atasannya untuk membentuk sebuah keluarga palsu.", "Tanggal Rilis" => "2022-04-09"],
    ["title" => "Another", "genre" => "Horror", "studio" => "P.A Works", "image" => "Another.jpg", "description" => "Tahun 1972, Terdapat seorang siswa yang pintar
    secara akademis maupun non akademis kelas 3 SMP Yomiyama, ia bernama Misaki.
    Misaki sangat populer oleh temna sekelasnya bahkan di SMP 3 Yomiyama. Namun ia tiba tiba saja meninggal,
    tapi teman sekelasnya dan guru guru telah memutuskan untuk menganggap Misaki masih hidup hingga waktu hari kelulusan tiba nanti,
    namun telah terjadi sesuatu yang aneh, yaitu saat dimana sosok Misaki muncul di salah satu foto kelulusan.", "Tanggal Rilis" => "2012-01-10"]
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['favorit'])) {
        $_SESSION['favorit'] = [];
    }
    $title = $_POST['title'];
    if (!in_array($title, $_SESSION['favorit'])) {
        $_SESSION['favorit'][] = $title;
    }
}
?>
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
        <section>
            <h2>Favorit Anda</h2>
            <div class="anime-list">
                <?php
                if (isset($_SESSION['favorit']) && count($_SESSION['favorit']) > 0) {
                    foreach ($_SESSION['favorit'] as $favorit) {
                        // Cari data anime favorit berdasarkan judul
                        $found = false;
                        foreach ($anime_favorit as $anime) {
                            if ($anime['title'] === $favorit) {
                                echo "<div class='anime-item'>
                                        <h3>{$anime['title']}</h3>
                                        <img src='{$anime['image']}' alt='{$anime['title']}' width='150' height='200'>
                                        <h3>{$anime['title']}</h3>
                                        <p>{$anime['description']}</p>
                                        <p>Genre: {$anime['genre']}</p>
                                        <p>Studio: {$anime['studio']}</p>
                                        <p>Tanggal Rilis: {$anime['Tanggal Rilis']}</p>
                                      </div>";
                                $found = true;
                                break;
                            }
                        }
                        if (!$found) {
                            echo "<div class='anime-item'>
                                    <h3>{$favorit}</h3>
                                    <p>Gambar tidak tersedia</p>
                                  </div>";
                        }
                    }
                } else {
                    echo "<p>No favorit</p>";
                }
                ?>
            </div>
            <form action="simpanFavorit.php" method="POST">
                <button type="submit">Save to TXT</button>
            </form>
        </section>
    </main>
    <footer>
        <?php include 'counter.php'; ?>
    </footer>
</body>
</html>
