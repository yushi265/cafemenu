<?php
    require_once('menu.php');
    require_once('data.php');
    require_once('food.php');
    require_once('review.php');
    require_once('user.php');

    $menuName = $_GET['name'];
    $menu = Menu::findByName($menus,$menuName);
    $menuReviews = $menu->getReviews($reviews);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title><?php echo $menu->getName() ?></title>
</head>
<body>
    <div class="container">
        <div class="view">
            <h3>メニュー詳細</h3>
            <div class="border">
                <img class="view_image" src="<?php echo $menu->getImage() ?>" alt=""><br>
                <p><?php echo $menu->getName() ?></p>
                <?php
                    if($menu instanceof Drink) {
                        echo $menu->getStyle();
                    }
                ?>
                <?php if($menu instanceof Food): ?>
                    <?php for($i = 0; $i < $menu->getRate(); $i++): ?>
                        <img class="star" src="img/star.png"> 
                    <?php endfor ?>
                <?php endif ?>
                <p>￥ <?php echo $menu->getPrice() ?> －</p>
                <div class="words">
                    <p>～シェフの一言～</p>
                    <?php echo $menu->getWords() ?>
                </div>
                
                <?php foreach($menuReviews as $review): ?>
                    <?php $user = $review->getUser($users); ?>
                    <div class="review">
                        <p>～レビュー～</p>
                        <?php if($user->getGender() == 'male'): ?>
                                <div class="alert review_contents alert-info" role="alert">
                        <?php else: ?>
                                <div class="alert review_contents alert-danger" role="alert">
                        <?php endif ?>
                        
                            <div class="user_icon">
                                <?php echo $user->getName() ?>
                                <img src="<?php echo $user->getFace() ?>" alt="">   -      
                            </div>
                            <?php echo $review->getComment() ?></p>
                        </div>
                    </div>
                <?php endforeach ?>

                
            </div>
            <br>
            <div class="return_button">
                <a href="index.php">
                    <input class="btn btn-info pl-3 pr-3 pt-2 pb-2" type="button" value="←一覧へ戻る">
                </a>
            </div>
            
        </div>
        
        
    </div>
    
    
</body>
</html>