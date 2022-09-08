<?php
declare(strict_types=1);

final class NonExistingClass implements Countable
{

    public function count(): int
    {
        return 0;
    }
}
