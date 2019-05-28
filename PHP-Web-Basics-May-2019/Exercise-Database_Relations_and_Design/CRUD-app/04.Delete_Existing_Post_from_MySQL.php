<?php

$db = new mysqli('localhost', 'root', '', 'soft_uni');
$db->set_charset('utf8');

if (isset($_GET['id'])) {
    $stmt = $db->prepare('DELETE FROM blog WHERE id=?');
    $stmt->bind_param('i', $_GET['id']);
    $stmt->execute();

    if ($stmt->affected_rows === 1) {
        echo 'Removed successfully.';
    } else {
        echo 'Post not found.';
    }
}

$result = $db->query('SELECT id, title FROM blog');
while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $title = $row['title'];

    echo "<p><a href='?id={$id}'>{$title}</a></p>";
}