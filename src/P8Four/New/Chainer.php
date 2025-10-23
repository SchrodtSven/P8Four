<?php

declare(strict_types=1);
/**
 * Example demonstrating  new MyClass()->method() without parentheses 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8Four
 * @package P8Four
 * @version 0.1
 * @since 2025-10-23
 */

namespace SchrodtSven\P8Four\New;

class Chainer
{
   
    public function getHashedNow(): string
    {
        return md5(date('YYYY-m-d H:i:s'));
    }
}


echo new Chainer()->getHashedNow();