<form>
    <div>Title</div>
    <input type="text" name="title">
    <div>Content</div>
    <textarea name="content"></textarea>
    <div><input type="submit" value="Post"></div>
</form>

<?php

if (isset($_GET['title']) && isset($_GET['content'])) {
    $title = $_GET['title'];
    $content = $_GET['content'];

    $db = new mysqli('localhost', 'root', '', 'soft_uni');
    $db->set_charset('utf8');

    $stmt = $db->prepare("INSERT INTO blog(title, content) VALUES(?, ?)");
    $stmt->bind_param('ss', $title, $content);
    $stmt->execute();

    if ($stmt->affected_rows === 1) {
        echo 'Post created.';
    } else {
        echo 'Insert post failed.';
    }
}
