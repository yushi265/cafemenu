<?php

require_once('menu.php');

class Food extends Menu {
    public function __construct($name,$price,$image) {
        parent::__construct($name,$price,$image);
    }
}

?>