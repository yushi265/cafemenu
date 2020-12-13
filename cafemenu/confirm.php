<?php
    require_once('menu.php');
    require_once('data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title>注文確認</title>
</head>
<body>
    <?php $totalPrice = 0; ?>

    <div class="container">
        <div class="confirm_container">
            <div class="border">
                <p>ご確認</p>
                <?php foreach($menus as $menu): ?>
                    <?php
                        $count = $_POST[$menu->getName()];
                        $menu->setCount($count);
                        $totalPrice += $menu->getTotalPrice();    
                    ?>
                    <p><?php echo $menu->getName()?>　×　<?php echo $_POST[$menu->getName()] ?>　個</p>
                <?php endforeach ?>
                <p>合計金額　<?php echo $totalPrice ?>　円</p>
                <p>ご注文は以上でよろしいでしょうか？</p>
                <form action="complete.php" method="post">
                    <input class="btn btn-info pl-3 pr-3 pt-2 pb-2" type="submit" value="確認">
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>