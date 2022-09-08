<?php
declare(strict_types=1);


final class GeneralUtility
{
    /**
     * @template T of object
     * @phpstan-param class-string<T> $className
     * @phpstan-return T
     */
    public static function makeInstance(string $className): object
    {
        return new $className();
    }
}
