<?php

require_once('menu.php');

class Drink extends Menu {
    private $style;

    public function __construct($name,$price,$image,$words,$style) {
        parent::__construct($name,$price,$image,$words);
        $this->style = $style;
    }

    public function getStyle() {
        return $this->style;
    }
}

?>