<?php

require_once('menu.php');

class Drink extends Menu {
    public function __construct($name,$price,$image) {
        parent::__construct($name,$price,$image);
    }
}

?>