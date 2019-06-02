<?php

include "./Mood.php";

class MoodFactory {
    public function createMood() {
        return new Mood();
    }
}