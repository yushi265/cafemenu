<?php

class Review{

private $menuName;
private $comment;
private $userId;

public function __construct($menuName,$userId,$comment) {
    $this->menuName = $menuName;
    $this->userId = $userId;
    $this->comment = $comment;
}

public function getMenuName() {
    return $this->menuName;
}

public function getUser($users) {
    foreach($users as $user) {
        if($this->userId == $user->getId()) {
            return $user;
        }
    }
}

public function getComment() {
    return $this->comment;
}

}

?>