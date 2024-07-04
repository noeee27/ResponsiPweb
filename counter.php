<?php
$counter_file = "counter.txt";
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, 0);
}
$hits = (int)file_get_contents($counter_file);
$hits++;
file_put_contents($counter_file, $hits);
echo "<p>Page views: {$hits}</p>";
?>
