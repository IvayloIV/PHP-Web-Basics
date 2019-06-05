<?php

class DateModifier {
    public static function getDifference(string $date1, string $date2) {
        $date1 = join('-', explode(' ', $date1));
        $date2 = join('-', explode(' ', $date2));
        $date1 = new DateTime($date1);
        $date2 = new DateTime($date2);
        return $date2->diff($date1)->format("%a");
    }
}