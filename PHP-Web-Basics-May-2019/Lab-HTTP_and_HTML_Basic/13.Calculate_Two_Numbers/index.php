<form method="GET">
    <div>
        Operation:
        <select name="operator">
            <option value="sum">Sum</option>
            <option value="subtract">Subtract</option>
        </select>
    </div>
    <div>
        Number 1:
        <input type="text" name="number_one">
    </div>
    <div>
        Number 2:
        <input type="text" name="number_two">
    </div>
    <div>
        <input type="submit" name="calculate" value="Calculate!">
    </div>
</form>

<?php

if (isset($_GET['calculate'])) {
    $operator = $_GET['operator'];
    $firstNum = intval($_GET['number_one']);
    $secondNum = intval($_GET['number_two']);

    if ($operator === 'sum') {
        echo '== ' . ($firstNum + $secondNum);
    } else if ($operator === 'subtract') {
        echo '== ' . ($firstNum - $secondNum);
    } else {
        echo 'Invalid operator supplied';
    }
}
