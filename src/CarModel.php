<?php
declare(strict_types=1);


final class CarModel
{
    private string $type;
    private int $amountOfLiters;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @param int<0, 100> $amountOfLiters
     */
    public function fillWithLiters(int $amountOfLiters): void
    {
        $this->amountOfLiters = $amountOfLiters;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function startEngine(): void
    {

    }

    public function stopEngine(): void
    {

    }

    public function getAmountOfLiters(): int
    {
        return $this->amountOfLiters;
    }
}
