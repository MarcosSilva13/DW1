<?php
class Student 
{
    private $ra;
    private $name;
    private $age;
    private $cpf;

    public function __construct($ra, $name, $age, $cpf) {
        $this->ra = $ra;
        $this->name = $name;
        $this->age = $age;
        $this->cpf = $cpf;
    }

    public function getRa(){
        return $this->ra;
    }

    public function setRa($ra) {
        $this->ra = $ra;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
}
