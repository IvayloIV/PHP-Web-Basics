<?php

$sortedLines = '';
if (isset($_GET['lines'])) {
    $sortedLines = explode("\n", $_GET['lines']);
    sort($sortedLines);
    $sortedLines = join("\n", $sortedLines);
}

include "./sort_lines_frontend.php";