<?php

class Menu {
    private $name;
    private $price;
    private $image;
    private $words;
    private $count;
    private static $menuCount = 0;
    // private static $menus = array();

    public function __construct($name,$price,$image,$words) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->words = $words;
        self::$menuCount++;
        // self::$menus[] = $this;
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

    public function getWords() {
        return $this->words;
    }

    public static function getMenuCount() {
        return self::$menuCount;
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

    public function getReviews($reviews) {
        $reviewsForMenu = array();
        foreach($reviews as $review) {
            if($review->getMenuName() == $this->name) {
                $reviewsForMenu[] = $review;
            }
        }
        return $reviewsForMenu;
    }
}




?>