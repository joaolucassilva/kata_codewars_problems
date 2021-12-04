<?php

namespace App\Php\Fundamentals;

/**
 * Write a function that takes an array of words and smashes them together into
 * a sentence and returns the sentence. You can ignore any need to sanitize
 * words or add punctuation, but you shiuld add spaces between each word.
 * Be careful, there shouldn't be a space at the beginning or the end of
 * the sentence!
 */

class SentenceSmash
{
    function smash(array $words)
    {
        return array_reduce($words, function ($carry, $item) {
            if (is_null($carry)) {
                return "{$item}";
            }

            $carry .= " {$item}";
            return $carry;
        });
    }
}
