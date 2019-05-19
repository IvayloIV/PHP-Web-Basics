<?php
if (isset($_GET['filter'])) {
    $delimiter = $_GET['delimiter'];
    $names = explode($delimiter, $_GET['names']);
    $ages = array_map('intval', explode($delimiter, $_GET['ages']));
}

include './render_students_frontend.php';