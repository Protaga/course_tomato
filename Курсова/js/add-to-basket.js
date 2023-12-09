function addToBasket(productId) {
    var newElement = document.createElement("li");
    newElement.className = "main-list-element";
    
    newElement.innerHTML = `
        <a href="./products/${productId}.php" class="main-list-element-a">
            <img src="../../images/products/nice-tomato.png" alt="">
            <center>
                <span>
                    <?php $productId = ${productId}; include "../../php/product-name.php"; ?>
                </span>
            </center>
        </a>
        <div class="close-button" onclick="closeElement(this)">✖</div>
    `;

    var productList = document.getElementById("productList");
    productList.appendChild(newElement);
}
