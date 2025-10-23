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

class Example
{
    // property hooks

    public string $uri {
        get => $this->uri;
        set => $this->uri = strtolower($value);
    }

    // Asymmetric Visibility
    public private(set) string $phpVersion = '8.4';

    // #[\Deprecated] Attribute makes PHP's deprecation mechanism available for user defined functions
    #[\Deprecated(
        message: "use PhpVersion::getVersion() instead",
        since: "8.4",
    )]
    public function getPhpVersion(): string
    {
        return $this->phpVersion;
    }

    public function getVersion(): string
    {
        return $this->phpVersion;
    }
}


$ex = new Example();

$ex->uri = "HTTP://FOO.example.org";

echo implode(\PHP_EOL, [$ex->uri, $ex->phpVersion]);

//echo $ex->getPhpVersion();

echo $ex->getVersion();
