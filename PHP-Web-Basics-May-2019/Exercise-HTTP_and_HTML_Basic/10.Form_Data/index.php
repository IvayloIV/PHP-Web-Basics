<form method="GET">
    <input type="text" name="name" placeholder="Name..">
    <br>
    <input type="number" name="age" placeholder="Age..">
    <br>
    <label>
        <input type="radio" name="gender" value="Male">
        Male
    </label>
    <br>
    <label>
        <input type="radio" name="gender" value="Female">
        Female
    </label>
    <br>
    <input type="submit" value="Submit">
</form>

<?php

if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])) {
    $name = htmlspecialchars($_GET['name']);
    $age = htmlspecialchars($_GET['age']);
    $gender = htmlspecialchars($_GET['gender']);

    echo "My name is {$name}. I am {$age} years old. I am {$gender}.";
}