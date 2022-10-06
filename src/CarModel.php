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

    public function fillWithLiters(int $amountOfLiters): void
    {
        if($amountOfLiters > 100) {
            throw new InvalidArgumentException('No, you cannot fill the tank with more than 100 liters');
        }
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
