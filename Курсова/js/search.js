function filterProducts(searchTerm) {
    searchTerm = searchTerm.toLowerCase();
    const productList = document.getElementById('productList');
    const items = productList.getElementsByClassName('main-list-element');

    for (const item of items) {
        const span = item.getElementsByTagName('span')[0];
        const text = span.textContent || span.innerText;

        if (text.toLowerCase().includes(searchTerm)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    }
}