<?php

declare(strict_types=1);
/**
 * Example demonstrating new features in PHP 8.4
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8Four
 * @package P8Four
 * @version 0.1
 * @since 2025-10-23
 */

namespace SchrodtSven\P8Four\New;
use Closure;

function handler(int $x): void {}
$cb = Closure::fromCallable('handler');

var_dump($cb);