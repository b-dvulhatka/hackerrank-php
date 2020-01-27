<?php

class person
{
    protected $firstName, $lastName, $id;

    public function __construct($first_name, $last_name, $identification)
    {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }

    function printPerson()
    {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}
//Solução a partir daqui
class Student extends person
{
    protected $scores;

    // Escrever construtor
    public function __construct($first_name, $last_name, $id, $scores)
    {
        parent::__construct($first_name, $last_name, $id);

        $this->scores = array_sum($scores) / count($scores);
    }

    /*
    *   Function: calculate
    *   Return: A character denoting the grade.
    */
    // Escrever a função
    public function calculate()
    {
        if ($this->scores >= 90) {
            return 'O';
        } elseif ($this->scores >= 80) {
            return 'E';
        } elseif ($this->scores >= 70) {
            return 'A';
        } elseif ($this->scores >= 55) {
            return 'P';
        } elseif ($this->scores >= 40) {
            return 'D';
        } else {
            return 'T';
        }
    }
}

