<?php
declare(strict_types=1);


final class Controller
{
    public function someAction(CarModel $car = null): void
    {
        if($car === null) {
            $this->redirect();
        }

        $car->startEngine();
    }

    public function redirect(): void
    {
        exit;
    }
}
