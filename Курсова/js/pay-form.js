function validateForm() {
    var numCard = document.getElementById("num-card").value;
    var cvv2 = document.getElementById("cvv2").value;
    var quantity = document.getElementById("quantity").value;

    if (numCard.length !== 16 || isNaN(numCard) || cvv2.length !== 4 || isNaN(cvv2)
        || quantity <= 0 || isNaN(quantity)) {
        alert("Будь ласка, перевірте правильність введених даних.");
        return false;
    }

    return true;
}
