<?php
include_once 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <section class="header">
        <div class="menu">

        </div>
    </section>
    <section class="good-cart">
        <?php
        $idGood = $_GET['id'];
        $sqlGood = "SELECT * FROM goods WHERE id='$idGood'";

        if (mysqli_query($connect, $sqlGood)) {
            $good = mysqli_fetch_assoc(mysqli_query($connect, $sqlGood));
        }
        ?>
        <h1 class="good-cart-title"><?= $good['title'] ?></h1>
        <div class="good-cart-block">
            <img class="good-cart-img" src="/goods-img/<?= $good['img'] ?>" alt="<?= $good['title'] ?>">
            <p class="good-cart-description"><?= $good['Description'] ?></p>
            <div class="good-cart-block-price">
                <p class="good-cart-price">Цена: <?= $good['price'] ?> руб.</p>
                <form action="" method="post">
                    <input class="good-cart-in-cart" type="submit" name="inCart" value="В корзину">
                </form>
            </div>
        </div>
    </section>

</body>

</html>