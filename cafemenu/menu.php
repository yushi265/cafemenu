<?php

class Menu {
    private $name;
    private $price;
    private $image;
    private $count;

    public function __construct($name,$price,$image) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImage() {
        return $this->image;
    }

    public function getCount() {
        return $this->count;
    }

    public function setCount($count) {
        $this->count = $count;
    }

    public function getTotalPrice() {
        return  $this->price*$this->count;
    }

    public static function findByName($menus,$name) {
        foreach($menus as $menu) {
            if($menu->getName() == $name) {
                return $menu;
            }
        }
    }
}




?>