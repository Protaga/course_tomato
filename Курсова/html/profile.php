<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomato: профіль</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../images/tomato-logo.png">
</head>

<body>
    <div class="header-bg">
        <div class="header">
            <ul class="header-list">
                <li class="header-list-element"> <a href="./main.php">Головна</a></li>
                <li class="header-list-element"> <a href="">Новинки</a></li>
                <li class="header-list-element"> <a href="">Знижки</a></li>
                <li class="header-list-element"> <a href="">Хіти</a></li>
                <li class="header-list-element"> <a href="">Для гурманів</a></li>
            </ul>

            <a href="" class="avatar">
                <img src="../images/monke-avatar.png" alt="">
            </a>
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
        <span class="title">Профіль користувача</span>
        <div class="title-underline"></div>

        <div class="profile-info">
            <img src="../images/monke-avatar.png" alt="" class="profile-avatar">

            <ul class="profile-list">
                <li class="profile-list-element">
                    <span>Прізвище:
                        <?= $_COOKIE['cookieLastname'] ?>
                    </span>
                </li>
                <li class="profile-list-element">
                    <span>Ім'я:
                        <?= $_COOKIE['cookieName'] ?>
                    </span>
                </li>
                <li class="profile-list-element">
                    <span>По-батькові:
                        <?= $_COOKIE['cookieMiddlename'] ?>
                    </span>
                </li>
                <li class="profile-list-element">
                    <span>Адреса проживання:
                        <?= $_COOKIE['cookieAddress'] ?>
                    </span>
                </li>
                <li class="profile-list-element">
                    <span>Пошта:
                        <?= $_COOKIE['cookieEmail'] ?>
                    </span>
                </li>
            </ul>
        </div>

        <a href="../php/exit.php" class="profile-exit">
            <span>Вийти</span>
        </a>

        <div class="profile-basket">
            <span class="title">Корзина</span>
            <div class="title-underline"></div>

            <ul class="main-list">
                <!-- <li class="main-list-element">
                    <a href="" class="main-list-element-a">
                        <img src="../images/products/nice-tomato.png" alt="">
                        <center><span>Негарний помідор</span></center>
                    </a>

                    <div class="close-button" onclick="closeElement(this)">✖</div>
                </li>

                <li class="main-list-element">
                    <a href="" class="main-list-element-a">
                        <img src="../images/products/nice-tomato.png" alt="">
                        <center><span>помідор</span></center>
                    </a>

                    <div class="close-button" onclick="closeElement(this)">✖</div>
                </li>

                <li class="main-list-element">
                    <a href="" class="main-list-element-a">
                        <img src="../images/products/nice-tomato.png" alt="">
                        <center><span>Дуже гарний помідор</span></center>
                    </a>

                    <div class="close-button" onclick="closeElement(this)">✖</div>
                </li>

                <li class="main-list-element">
                    <a href="" class="main-list-element-a">
                        <img src="../images/products/nice-tomato.png" alt="">
                        <center><span>Гарний помідор</span></center>
                    </a>

                    <div class="close-button" onclick="closeElement(this)">✖</div>
                </li>

                <li class="main-list-element">
                    <a href="" class="main-list-element-a">
                        <img src="../images/products/nice-tomato.png" alt="">
                        <center><span>р</span></center>
                    </a>

                    <div class="close-button" onclick="closeElement(this)">✖</div>
                </li>

                <li class="main-list-element">
                    <a href="" class="main-list-element-a">
                        <img src="../images/products/nice-tomato.png" alt="">
                        <center><span>Помідорка</span></center>
                    </a>

                    <div class="close-button" onclick="closeElement(this)">✖</div>
                </li> -->
            </ul>
        </div>
    </div>

    <script src="../js/close-product.js"></script>
</body>

</html>