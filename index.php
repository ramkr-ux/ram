<?php

class Family
{
    public $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getNames()
    {
        echo "Father's name: " . $this->name . "<br>";
        return $this->name;
    }

    public function getAge()
    {
        echo "Mother's age: " . $this->age . "<br>";
        return $this->age;
    }
}

$full_name = new Family('Ram', 24);

// Accessing the public property directly
echo "Name: " . $full_name->name . "<br>";

// Accessing the private property via the getter method
// echo "Age: " . $full_name->getAge() . "<br>";
