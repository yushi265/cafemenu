<?php

require_once('food.php');
require_once('drink.php');

$pasta = new Food('パスタ',1100,'img/pasta.jpg','ガーリックのきいたトマトソースにプリっとしたエビとアルデンテのパスタを合わせました！ブロッコリーをカリフラワーにもできます！',5);
$omurice = new Food('オムライス',800,'img/omurice.jpg','ケチャップライスをふわトロのオムレツで包みました！ソースは当店が代々受け継いできた秘伝のデミグラスです！',4);
$coffee = new Drink('カフェオレ',550,'img/coffee.jpg','エチオピア産のコーヒー豆から抽出した香り高いコーヒーに那須高原から取り寄せた濃厚なミルクを秘伝の比率で混ぜ合わせました！ほっと一息つきたいときにどうぞ！','cold/hot');
$tea = new Drink('紅茶',500,'img/tea.jpg','本場イギリスから直輸入したダージリンのファーストフラッシュをご用意いたします！お好みでミルクとレモンも！','cold/hot');

$menus = array($pasta,$omurice,$coffee,$tea);



?>