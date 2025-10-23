<?php

declare(strict_types=1);
/**
 * Example demonstrating new array_* functions in PHP 8.4
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8Four
 * @package P8Four
 * @version 0.1
 * @since 2025-10-23
 */

namespace SchrodtSven\P8Four\New;

$animaux =     ['dog', 'cat', 'cow', 'duck', 'goose', 'goat', 'rabbit'];

$animaux_assoc = [
    // 23 => 'Unicorn',
    'a' => 'dog',
    'b' => 'cat',
    'c' => 'cow',
    'd' => 'duck',
    'e' => 'goose',
    'f' => 'elephant',
    'g' => 'rabbit'
];

$animal = array_find(
    $animaux,
    static fn(string $value): bool => str_starts_with($value, 'go'),
);

var_dump($animal); // string(3) "cat"

// Find the first animal with a name longer than 4 characters.
var_dump(array_find_key($animaux_assoc , function (string $value) {
    return strlen($value) > 4;
}));

// Find the first animal whose name begins with f.
var_dump(array_find_key($animaux_assoc , function (string $value) {
    return str_starts_with($value, 'f');
}));

// Find the first animal where the array key is the first symbol of the animal.
var_dump(array_find_key($animaux_assoc , function (string $value, $key) {
   return $value[0] === $key;
}));

// Find the first animal where the array key matching a RegEx.
var_dump(array_find_key($animaux_assoc , function ($value, $key) {
   return preg_match('/^([a-f])$/', $key);
}));

// Check, if any animal name is longer than 5 letters.
var_dump(array_any($animaux_assoc , function (string $value) {
    return strlen($value) > 5;
}));

// Check, if all animal names are shorter than 12 letters.
var_dump(array_all($animaux_assoc , function (string $value) {
    return strlen($value) < 12;
}));

// Check, if all animal names are longer than 5 letters.
var_dump(array_all($animaux_assoc , function (string $value) {
    return strlen($value) > 5;
}));

// Check, if all array keys are strings.
var_dump(array_all($animaux_assoc , function (string $value, $key) {
   return is_string($key);
}));