<?php

require_once('food.php');
require_once('drink.php');
require_once('review.php');
require_once('user.php');

// メニューデータ
$pasta = new Food('パスタ',1100,'img/pasta.jpg','ガーリックのきいたトマトソースにプリっとしたエビとアルデンテのパスタを合わせました！ブロッコリーをカリフラワーにもできます！',5);
$omurice = new Food('オムライス',800,'img/omurice.jpg','ケチャップライスをふわトロのオムレツで包みました！ソースは当店が代々受け継いできた秘伝のデミグラスです！',4);
$coffee = new Drink('カフェオレ',550,'img/coffee.jpg','エチオピア産のコーヒー豆から抽出した香り高いコーヒーに那須高原から取り寄せた濃厚なミルクを秘伝の比率で混ぜ合わせました！ほっと一息つきたいときにどうぞ！','hot / cold');
$tea = new Drink('紅茶',500,'img/tea.jpg','本場イギリスから直輸入したダージリンのファーストフラッシュをご用意いたします！お好みでミルクとレモンも！','hot / cold');

$menus = array($pasta,$omurice,$coffee,$tea);

// ユーザーデータ
$user1 = new User('あすか','male','img/female2.jpg');
$user2 = new User('ゆうき','female','img/male3.jpg');

$users = array($user1,$user2);

// レビューデータ
$review1 = new Review($pasta->getName(),$user1->getId(),'パスタさいこー！');
$review2 = new Review($omurice->getName(),$user2->getId(),'オムライスさいこー！');
$review3 = new Review($coffee->getName(),$user1->getId(),'カフェオレさいこー！');
$review4 = new Review($tea->getName(),$user2->getId(),'紅茶さいこー！');

$reviews = array($review1,$review2,$review3,$review4);





?>