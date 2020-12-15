<?php

require_once('menu.php');

class Food extends Menu {
    private $rate;

    public function __construct($name,$price,$image,$words,$rate) {
        parent::__construct($name,$price,$image,$words);
        $this->rate = $rate;
    }

    public function getRate() {
        return $this->rate;
    }
}

?>