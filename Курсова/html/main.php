<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomato: головна</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../images/tomato-logo.png">
</head>

<body>
    <span id="top"></span>

    <div class="header-bg">
        <div class="header">
            <ul class="header-list">
                <li class="header-list-element"> <a href="./main.php">Головна</a></li>
                <li class="header-list-element"> <a href="">Новинки</a></li>
                <li class="header-list-element"> <a href="">Знижки</a></li>
                <li class="header-list-element"> <a href="">Хіти</a></li>
                <li class="header-list-element"> <a href="">Для гурманів</a></li>
            </ul>

            <?php
            if ($_COOKIE['cookieEmail'] == ''): ?>
                <a href="./authorization.php" class="avatar">
                    <img src="../images/monke-avatar.png" alt="">
                </a>
            <?php else: ?>
                <a href="./profile.php" class="avatar">
                    <img src="../images/monke-avatar.png" alt="">
                </a>
            <?php endif; ?>

        </div>
    </div>

    <div class="logo">
        <a href="./main.php">
            <img src="../images/tomato-logo.png" alt="">
        </a>
    </div>

    <div class="categories-bg">
        <div class="categories">
            <span>Категорії</span>

            <ul class="categories-list">
                <li class="categories-list-element">
                    <a href="">Червоні</a>
                </li>
                <li class="categories-list-element">
                    <a href="">Жовті</a>
                </li>
                <li class="categories-list-element">
                    <a href="">Зелені</a>
                </li>
                <li class="categories-list-element">
                    <a href="">Сині</a>
                </li>
                <li class="categories-list-element">
                    <a href="">Помаранчеві</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main">
        <div class="search-bg">
            <form action="" method="get">
                <input type="text" placeholder="Пошук" oninput="filterProducts(this.value)">
            </form>
        </div>

        <span class="title">Головна сторінка</span>
        <div class="title-underline"></div>

        <ul class="main-list" id="productList">
            <?php
            for ($productId = 1; $productId <= 6; $productId++):
                ?>
                <li class="main-list-element">
                    <?php if ($_COOKIE['cookieEmail'] == ''): ?>
                        <a href="./authorization.php" class="main-list-element-a">
                        <?php else: ?>
                            <a href="./products/<?php echo $productId; ?>.php" class="main-list-element-a">
                            <?php endif; ?>
                            <img src="../images/products/nice-tomato.png" alt="">
                            <center>
                                <span>
                                    <?php include "../php/product-name.php"; ?>
                                </span>
                            </center>
                        </a>
                </li>
            <?php endfor; ?>
        </ul>
    </div>

    <div class="advertising-bg">
        <div class="advertising">
            <span>Реклама</span>

            <ul class="advertising-list">
                <li class="advertising-list-element">
                    <a href="https://store.steampowered.com/app/892970/Valheim/" class="advertising-list-element-a">
                        <img src="../images/advertising/boat.jpg" alt="">
                    </a>
                </li>

                <li class="advertising-list-element">
                    <a href="https://store.steampowered.com/app/892970/Valheim/" class="advertising-list-element-a">
                        <img src="../images/advertising/rock.jpg" alt="">
                    </a>
                </li>

                <li class="advertising-list-element">
                    <a href="https://store.steampowered.com/app/892970/Valheim/" class="advertising-list-element-a">
                        <img src="../images/advertising/stand.jpg" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="footer-bg">
        <div class="footer">
            <a href="#top" class="top">↑</a>

            <span>О, ви долистали до кінця. Тримайте посилання, щоби подякувати розробнику за гарні очі:
                <a href="https://t.me/ukr_perep">перепня</a>
            </span>
        </div>
    </div>

    <script src="../js/search.js"></script>
</body>

</html>