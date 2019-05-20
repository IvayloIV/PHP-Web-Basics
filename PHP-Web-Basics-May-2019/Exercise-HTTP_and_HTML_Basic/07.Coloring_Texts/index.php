<form method="GET">
    <textarea name="input" cols="30" rows="10"></textarea>
    <br>
    <input type="submit">
</form>

<?php

if (isset($_GET['input'])) {
    $text = $_GET['input'];

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if ($char !== ' ') {
            if (ord($char) % 2 === 0) {
                echo "<span style='color: red;'>";
            } else {
                echo "<span style='color: blue;'>";
            }
            echo $char . ' </span>';
        }
    }
}