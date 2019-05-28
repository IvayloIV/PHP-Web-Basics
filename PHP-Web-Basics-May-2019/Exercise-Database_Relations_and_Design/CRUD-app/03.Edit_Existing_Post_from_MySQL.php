<?php
    $title = '';
    $content = '';
    $id = '';
    $result = '';

    function connectWithDb($dbname) {
        $db = new mysqli('localhost', 'root', '', $dbname);
        $db->set_charset('utf8');

        return $db;
    }

    if (isset($_GET['id']) && isset($_GET['title']) && isset($_GET['content'])) {
        $id = $_GET['id'];
        $title = $_GET['title'];
        $content = $_GET['content'];

        $db = connectWithDb('soft_uni');
        $stmt = $db->prepare('UPDATE  blog SET title=?, content=? WHERE id=?');
        $stmt->bind_param('ssi', $title, $content, $id);
        $stmt->execute();

        if ($stmt->affected_rows === 1) {
            $result = 'Updated successfully.';
        } else {
            $result = 'Updated failed.';
        }
    } else if (isset($_GET['id'])) {
        $id = htmlspecialchars($_GET['id']);

        $db = connectWithDb('soft_uni');
        $result = $db->query('SELECT title, content FROM blog WHERE id = ' . $id);

        $tokens = $result->fetch_assoc();
        $title = $tokens['title'];
        $content = $tokens['content'];
    }
?>

<form>
    <div>Title</div>
    <input type="text" name="title" value="<?= $title ?>">
    <div>Content</div>
    <textarea name="content"><?= $content ?></textarea>
    <input type="hidden" name="id" value="<?= $id ?>">
    <div><input type="submit" value="Post"></div>
    <p><?= $result ?></p>
</form>