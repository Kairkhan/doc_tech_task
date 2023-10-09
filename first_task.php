<?php

declare(strict_types=1);

class MySingleton {
    private static MySingleton $existedInstance;
    private function __construct()
    {
    }

    public static function getInstance(): self
    {
        if (!self::$existedInstance) {
            self::$existedInstance = new self();
        }

        return self::$existedInstance;
    }
}