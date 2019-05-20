<form method="GET">
    <textarea name="text" rows="10"></textarea><br>
    <input type="submit" value="Extract">
</form>

<?php

if (isset($_GET['text'])) {
    $text = $_GET['text'];
    $allWords = preg_split("/[^A-Za-z]+/", $text);
    $capitalWords = [];

    foreach ($allWords as $word) {
        if (strtoupper($word) === $word && $word !== '') {
            $capitalWords[] = $word;
        }
    }

    echo join(", ", $capitalWords);
}