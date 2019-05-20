<?php
    if (isset($_GET['num1'])) {
        $nums1 = intval($_GET['num1']);
        $nums2 = intval($_GET['num2']);
        $sum = $nums1 + $nums2;

        echo "{$nums1} + {$nums2} = {$sum}";
    }
?>
<form method="GET">
    <div>First name:</div>
    <input type="number" name="num1">
    <div>Second name:</div>
    <input type="number" name="num2">
    <div><input type="submit"></div>
</form>