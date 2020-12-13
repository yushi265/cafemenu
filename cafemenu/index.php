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
    <title>Asuka Cafe</title>
</head>
<body>
    <div class="header">
        <h1>Asuka Cafe</h1>
    </div>

    <div class="container">
        <div class="menu_container">
            <h3>Menus</h3>
            <form action="confirm.php" id="count" method="post">
                <?php foreach($menus as $menu): ?>
                    <div class="menu_contents border">
                        <img class="menu_image rounded" src="<?php echo $menu->getImage() ?>" alt="">
                        <a href="view.php?name=<?php echo $menu->getName() ?>"><p class="menu_name"><?php echo $menu->getName()?></p></a>
                        <p class="menu_price">￥<?php echo $menu->getPrice()?> －</p>
                        <select name="<?php echo $menu->getName() ?>">
                            <?php for($i=0;$i<=10;$i++): ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php endfor ?>
                        </select>
                    </div>
                <?php endforeach ?><br>
                <input class="btn btn-info pl-3 pr-3 pt-2 pb-2" type="submit" value="注文する">
            </form> 
        </div>
    </div>
</body>
</html>