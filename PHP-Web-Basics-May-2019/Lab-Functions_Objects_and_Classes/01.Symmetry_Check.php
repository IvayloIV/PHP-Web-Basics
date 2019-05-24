<?php

function isPalindrome($el) {
    for ($i = 0; $i < strlen($el) / 2; $i++) {
        if ($el[$i] !== $el[strlen($el) - 1 - $i]) {
            return 'false';
        }
    }

    return 'true';
}

$el = readline();
echo isPalindrome($el);