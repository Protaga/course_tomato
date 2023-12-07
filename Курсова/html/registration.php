<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomato: реєстрація</title>
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
        <span class="title">Реєстрація</span>
        <div class="title-underline"></div>

        <div class="profile-info">
            <form action="../php/registration.php" method="post">
                <div class="form">
                    <div class="form-registr">
                        <label for="lastname">Прізвище: </label>
                        <input type="text" id="lastname" name="lastname" required>

                        <label for="name">Ім'я: </label>
                        <input type="text" id="name" name="name" required>

                        <label for="middlename">По-батькові: </label>
                        <input type="text" id="middle-name" name="middlename" required>
                    </div>

                    <div class="form-registr">
                        <label for="email">Пошта: </label>
                        <input type="email" id="email" name="email" required>

                        <label for="password">Пароль: </label>
                        <input type="password" id="password" name="password" minlength="4" maxlength="32" oninput="validatePassword()"
                            required>

                        <label for="address">Адреса проживання: </label>
                        <input type="text" id="address" name="address" required>
                    </div>
                </div>

                <input type="submit" value="Зареєструватися" class="reg-button">
            </form>
        </div>

        <a href="./authorization.php" class="profile-exit">
            <span>Автеризація</span>
        </a>
    </div>

    <script src="../js/password.js"></script>
</body>

</html>