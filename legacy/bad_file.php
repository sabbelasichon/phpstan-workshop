<?php

declare(strict_types=1);

use NonExistingClass;



function isBadFunction(array $whatIsInsideWeDoNotKnow, bool $thisHasNoType): bool|int
{
    $mapping = [
        'test' => null,
        #'test2' => 'kommt es jetzt zu einem Fehler?',
        'test3' => null
    ];

    foreach ($mapping as $key => $value) {
        // @phpstan-ignore-next-line
        if (empty($value)) {
            // do something
        }
    }

    if ($thisHasNoType) {
        return true;
    }

    $object = new NonExistingClass();
    if (count($object)) {
        return false;
    }

    return count($whatIsInsideWeDoNotKnow);
}

$myObject = GeneralUtility::makeInstance(NonExistingClass::class);
$myObject->count();

$content = \file_get_contents(__DIR__. '/some.json');
if(is_string($content)) {
    $decodedArray = json_decode($content, true);
    var_dump($decodedArray);
}

