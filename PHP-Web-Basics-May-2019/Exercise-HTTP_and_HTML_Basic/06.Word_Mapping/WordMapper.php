<form method="GET">
    <textarea name="input" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Count words">
</form>

<?php

if (isset($_GET['input'])) {
    $text = $_GET['input'];
    $words = preg_split("/[^A-Za-z]+/", $text);

    $countWords = [];
    foreach ($words as $word) {
        $wordLower = strtolower($word);

        if ($wordLower === '') {
            continue;
        }
        if (!key_exists($wordLower, $countWords)) {
            $countWords[$wordLower] = 0;
        }

        $countWords[$wordLower]++;
    }

    echo "<table border='2'>";
    foreach ($countWords as $word => $count) {
        echo "<tr>";
        echo "<td>{$word}</td>";
        echo "<td>{$count}</td>";
        echo "</tr>";
    }
    echo "</table>";
}