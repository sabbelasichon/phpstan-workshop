<?php
declare(strict_types=1);


final class Controller
{
    private CarModel $defaultCar;

    public function __construct()
    {
        $this->defaultCar = new CarModel('hybid');
    }

    public function someAction(CarModel $car = null): void
    {
        if($car === null) {
            $this->redirect();
        }

        $car->startEngine();
    }

    public function redirect(): void
    {
        $this->defaultCar->stopEngine();

        echo $this->defaultCar->getType();
        exit;
    }

    public function genericMethodFromFramework(object $object): void
    {
        $this->checkType($object);
        $object->startEngine();
        $object->fillWithLiters(101);
    }

    public function checkType(object $object): void
    {
        if (!$object instanceof CarModel) {
            throw new UnexpectedValueException('Wrong type given');
        }
    }
}
