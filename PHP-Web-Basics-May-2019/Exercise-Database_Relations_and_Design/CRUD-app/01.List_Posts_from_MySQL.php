<?php

$db = new mysqli('localhost', 'root', '', 'soft_uni');
$db->set_charset('utf8');
if ($db->connect_errno) {
    die('Cannot connect to MySQL');
}

$result = $db->query('SELECT * FROM blog');
if (!$result) {
    die('Cannot connect to MySQL');
}

echo '<ul>';
while ($row = $result->fetch_assoc()) {
    $title = htmlspecialchars($row['title']);
    $content = htmlspecialchars($row['content']);

    echo "<li>{$title} - {$content}</li>";
}
echo '</ul>';