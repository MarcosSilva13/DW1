<?php
class Subjects {
    private $id;
    private $name;
    private $numberHour;

    public function __construct($id, $name, $numberHour) {
        $this->id = $id;
        $this->name = $name;
        $this->numberHour = $numberHour;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getNumberHour() {
        return $this->numberHour;
    }

    public function setNumberHour($numberHour) {
        $this->numberHour = $numberHour;
    }
}
