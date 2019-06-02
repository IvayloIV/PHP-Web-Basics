<?php

spl_autoload_register();

$n = intval(readline());
$addedCount = 0;
$secs = 0;
for ($i = 0; $i < $n; $i++) {
    try {
        list($artistName, $songName, $songLength) = explode(';', readline());
        list($minutes, $seconds) = explode(':', $songLength);

        if (strlen($artistName) < 3 || strlen($artistName) > 20) {
            throw new InvalidArtistNameException();
        }

        if (strlen($songName) < 3 || strlen($songName) > 30) {
            throw new InvalidSongNameException();
        }

        if ($minutes < 0 || $minutes > 14) {
            throw new InvalidSongMinutesException();
        }

        if ($seconds < 0 || $seconds > 59) {
            throw new InvalidSongSecondsException();
        }

        $addedCount++;
        echo 'Song added.' . PHP_EOL;
        $secs += ($minutes * 60) + $seconds;
    } catch (InvalidSongException $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}

echo "Songs added: {$addedCount}" . PHP_EOL;
$hours = intval($secs / 3600);
$mins = intval(($secs % 3600) / 60);
$secs = $secs % 60;

$minsStr = sprintf('%02d', $mins);
$secsStr = sprintf('%02d', $secs);
echo "Playlist length: {$hours}h {$minsStr}m {$secsStr}s";