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
$cake = new Food('ケーキ',450,'img/cake.jpg','3種のベリーをふんだんに使ったソースをスポンジ生地の上にかけました！あいだに生クリームを挟んだ３層構造です！ご賞味あれ！',4);
$pie = new Food('アップルパイ',650,'img/pie.jpg','青森県産の紅玉を使い、さっくりと焼き上げたアップルパイ！バニラアイスとホイップクリームを添えてお楽しみください！',5);

$menus = array($pasta,$omurice,$coffee,$tea,$cake,$pie);

// ユーザーデータ
$user1 = new User('あすか','female','img/female2.jpg');
$user2 = new User('ゆうき','male','img/male3.jpg');
$user3 = new User('よしお','male','img/male1.jpg');

$users = array($user1,$user2,$user3);

// レビューデータ
$review1 = new Review($pasta->getName(),$user1->getId(),'パスタさいこー！');
$review2 = new Review($omurice->getName(),$user2->getId(),'オムライスさいこー！');
$review3 = new Review($coffee->getName(),$user1->getId(),'カフェオレさいこー！');
$review4 = new Review($tea->getName(),$user2->getId(),'紅茶さいこー！');
$review5 = new Review($cake->getName(),$user3->getId(),'ケーキさいこー！');
$review6 = new Review($pie->getName(),$user3->getId(),'アップルパイさいこー！');

$reviews = array($review1,$review2,$review3,$review4,$review5,$review6);





?>