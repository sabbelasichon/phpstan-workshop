<?php
declare(strict_types=1);



final class CarModel
{
    /**
     * @phpstan-var CarType::*
     */
    private string $type;
    private int $amountOfLiters;

    /**
     * @phpstan-param CarType::* $type
     */
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

    /**
     * @phpstan-return CarType::*
     */
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
