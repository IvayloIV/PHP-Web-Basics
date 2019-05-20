<form method="GET">
    <label>
        Categories:
        <input type="text" name="categories">
    </label>
    <br>
    <label>
        Tags:
        <input type="text" name="tags">
    </label>
    <br>
    <label>
        Months:
        <input type="text" name="months">
    </label>
    <br>
    <input type="submit" value="Generate">
</form>

<?php

function printElements($title, $elements) {
    echo "<h2>{$title}</h2>";
    echo "<ul>";
    foreach ($elements as $el) {
        echo "<li>{$el}</li>";
    }
    echo "</ul>";
}

if (isset($_GET['categories'])) {
    $categories = explode(', ', $_GET['categories']);
    $tags = explode(', ', $_GET['tags']);
    $months = explode(', ', $_GET['months']);

    printElements('Categories', $categories);
    printElements('Tags', $tags);
    printElements('Months', $months);
}