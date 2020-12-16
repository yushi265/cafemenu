<?php

class User {
    private static $idCount = 0;
    private $id;
    private $name;
    private $gender;
    private $face;

    public function __construct($name,$gender,$face) {
        self::$idCount++;
        $this->id = self::$idCount; 
        $this->name = $name;
        $this->gender = $gender;
        $this->face = $face;
    }

    public function getId() {
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getFace() {
        return $this->face;
    }

}

?>