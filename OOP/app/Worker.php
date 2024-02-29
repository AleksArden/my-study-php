<?php

namespace App;




abstract class Worker implements WorkerInterface
{
    // public string $name;
    // public int $age;
    // public array $hours;
    private string $name;
    private int $age;
    private array $hours;

    // protected string $position;
    private string $position;

    private string $experience;

    public function __construct($name, $age, $hours)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }





    public function setName($value)
    {
        $this->name = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPosition($value)
    {
        $this->position = $value;
    }

    public function getPosition(): string
    {
        return $this->position;
    }
}
