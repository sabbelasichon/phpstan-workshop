<?php
declare(strict_types=1);


final class PersonCollection
{
    /**
     * @var Person[]
     */
    private array $persons;

    private int $limit = 0;

    /**
     * @param Person[] $persons
     */
    public function __construct(array $persons)
    {
        $this->persons = $persons;
    }

    /**
     * @return Person[]
     */
    public function getPersons(): array
    {
        if($this->limit > 0) {
            return [];
        }

        return $this->persons;
    }
}
