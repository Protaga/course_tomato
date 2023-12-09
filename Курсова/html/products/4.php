<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomato:
        <?php
        $productId = pathinfo(__FILE__, PATHINFO_FILENAME);
        include "../../php/product-name.php";
        ?>
    </title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" href="../../images/tomato-logo.png">
</head>

<body>
    <div class="header-bg">
        <div class="header">
            <ul class="header-list">
                <li class="header-list-element"> <a href="../main.php">Головна</a></li>
                <li class="header-list-element"> <a href="">Новинки</a></li>
                <li class="header-list-element"> <a href="">Знижки</a></li>
                <li class="header-list-element"> <a href="">Хіти</a></li>
                <li class="header-list-element"> <a href="">Для гурманів</a></li>
            </ul>

            <a href="../profile.php" class="avatar">
                <img src="../../images/monke-avatar.png" alt="">
            </a>
        </div>
    </div>

    <div class="logo">
        <a href="../main.php">
            <img src="../../images/tomato-logo.png" alt="">
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
        <span class="title">
            <?php
            $productId = pathinfo(__FILE__, PATHINFO_FILENAME);
            include "../../php/product-name.php";
            ?>
        </span>
        <div class="title-underline"></div>

        <div class="profile-info">
            <img src="../../images/products/nice-tomato.png" alt="" class="profile-avatar">

            <ul class="profile-list">
                <li class="profile-list-element">
                    <span>Назва товару:
                        <?php
                        $productId = pathinfo(__FILE__, PATHINFO_FILENAME);
                        include "../../php/product-name.php";
                        ?>
                    </span>
                </li>

                <li class="profile-list-element">
                    <span>Ціна за кілограм:
                        <?php
                        $productId = pathinfo(__FILE__, PATHINFO_FILENAME);
                        include "../../php/product-cost.php";
                        ?>
                    </span>
                </li>

                <a href="../../php/add-to-basket.php?productId=<?php echo $productId; ?>"
                    class="profile-exit add-product">
                    <span>Додати до корзини</span>
                </a>
            </ul>
        </div>

        <span class="title" style="margin-top: 75px">Оформлення замовлення</span>
        <div class="title-underline"></div>

        <div class="profile-info">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm();">
                <label for="num-card">Номер баньківської карти: </label>
                <input type="number" id="num-card" name="num-card" required>

                <label for="cvv2">CVV2: </label>
                <input type="password" id="cvv2" name="cvv2" required>

                <label for="quantity">Кількість: </label>
                <input type="number" id="quantity" name="quantity" required>

                <label for="address_to">Адреса доставки: </label>
                <input type="text" id="address_to" name="address_to" required>

                <input type="hidden" name="product_id" value="<?php echo pathinfo(__FILE__, PATHINFO_FILENAME); ?>">
                <input type="submit" value="Купити" class="reg-button">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $quantity = $_POST["quantity"];
                $productId = $_POST["product_id"];

                $conn = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');

                $sql = "SELECT cost FROM products WHERE id = $productId";
                $result = $conn->query($sql);

                $row = $result->fetch_assoc();
                $productCost = $row["cost"];

                $totalPrice = $quantity * $productCost;

                echo "
                <div id='myModal' class='modal'>
                    <span class='close' onclick='closeModal()'>✖</span>
                    <p>Загальна ціна товару: $totalPrice грн. Чекайте ваше замовлення впродовж 3 днів.</p>
                </div>
                <script>
                    function closeModal() {
                        document.getElementById('myModal').style.display = 'none';
                    }
                    document.getElementById('myModal').style.display = 'block';
                </script>
            ";

                $conn->close();
            }
            ?>
        </div>
    </div>

    <script src="../../js/pay-form.js"></script>
</body>

</html>