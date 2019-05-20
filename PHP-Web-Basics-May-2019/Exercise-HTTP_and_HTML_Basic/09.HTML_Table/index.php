<form method="GET">
    <label>
        Name:
        <input type="text" name="name">
    </label>
    <br>
    <label>
        Phone:
        <input type="text" name="phone">
    </label>
    <br>
    <label>
        Age:
        <input type="text" name="age">
    </label>
    <br>
    <label>
        Address:
        <input type="text" name="address">
    </label>
    <br>
    <input type="submit" value="Generate">
</form>

<?php

if (isset($_GET['name']) && isset($_GET['phone']) && isset($_GET['age']) && isset($_GET['address'])) {
    $name = htmlspecialchars($_GET['name']);
    $phone = htmlspecialchars($_GET['phone']);
    $age = htmlspecialchars($_GET['age']);
    $address = htmlspecialchars($_GET['address']);

    echo "<table border='2'>";
    echo "<tr><td style='background-color: orange'>Name</td><td>{$name}</td></tr>";
    echo "<tr><td style='background-color: orange'>Phone number</td><td>{$phone}</td></tr>";
    echo "<tr><td style='background-color: orange'>Age</td><td>{$age}</td></tr>";
    echo "<tr><td style='background-color: orange'>Address</td><td>{$address}</td></tr>";
    echo "</table>";

}