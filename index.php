<?php
include "config.php";

$sql = "select * from goods";
$res = mysqli_query($connect,$sql);
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
    <section class="goods-list">
        <?php
            while($data = mysqli_fetch_assoc($res)){
                ?>
                <a href='good.php?id=<?= $data['id'] ?>' class="good">
                    <img class="good-img" src="/goods-img/<?= $data['img']?>" alt="<?= $data['title']?>">
                    <p class="good-title"><?= $data['title']?></p>
                    <p class="good-description"><?= $data['Description']?></p>
                    <p class="good-price"><?= $data['price']?> руб.</p>
                    <form action="" method="post">
                        <input class="in-cart" type="submit" name="inCart" value="В корзину">
                    </form>
                </a>
            <?php
            }
        ?>
    </section>
</body>
</html>