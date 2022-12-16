<?php
define("price", 12);
echo
'
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>most basic webapp</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <script src="index.js"></script>
        <div class="grid-container">
            <form id="BuyForm">
            <div class="grid-item-1">
                <h1>Buy great things now!</h1>
            </div>
            <div class="grid-item-2">
                <h3>Product</h3>
                <label for="product">What product do you want to buy?</label><br>
                <select name="product" id="product">
                    <option>AAAAAAAAAAA</option>
                    <option>cat</option>
                    <option>sheep</option>
                    <option>Twitter</option>
                    <option>Hoovergadse</option>
                </select>
                <label for="productQuantity">How many of it?</label><br>
                <input name="productQuantity" type="number" value=1>
            </div>
            <div class="grid-item-2">
                <h3>Where do you want it to be delivered?</h3>
                <textarea name="address" form="BuyForm">Enter text here...</textarea>
            </div>
            <input type="hidden" name="price" value=';
echo price;
echo '>
            <input type="button" name="calculate" Value="calculate price" onClick="readText(this.form)">
            </form>
            <div class="grid-item-2">
                <h3>Pricing</h3>
                <p id="finalPrice"></p>
                <script>
                    function readText (form) {
                        let finalPrice = document.getElementById("finalPrice");
                        price = parseInt(form.price.value) * parseInt(form.productQuantity.value);
                        console.log(price);
                        finalPrice.innerHTML = price + " €";
                    }
                </script>
            </div>
            </form>
        </div>
    </body>
</html>
';
?>
