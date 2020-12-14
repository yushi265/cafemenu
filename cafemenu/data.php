<?php

require_once('food.php');
require_once('drink.php');

$pasta = new Food('パスタ',1100,'img/pasta.jpg');
$omurice = new Food('オムライス',800,'img/omurice.jpg');
$coffee = new Drink('コーヒー',550,'img/coffee.jpg');
$tea = new Drink('紅茶',500,'img/tea.jpg');

$menus = array($pasta,$omurice,$coffee,$tea)



?>