<?php
define("price", 14);
?>
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
        <form id="BuyForm" action="" method="post">
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
                <input type="hidden" name="price" value=<?php echo price; ?>>
                <input type="submit" value="Check">
            </div>
            <div class="grid-item-2">
                <input type="button" name="calculate" Value="calculate price" onClick="readText(this.form)">
                <input type="submit" value="Check">
            </div>
        </form>
        <?php if ($_POST) { ?>
        <div class="grid-item-2">
            <h3>Is this correct?</h3>
            <table>
                <tr>
                    <th>property</th>
                    <th>value</th>
                </tr>
                <tr>
                    <td>Product</td>
                    <td><?php echo $_POST["product"];?></td>
                </tr>
                <tr>
                    <td>Product quantity</td>
                    <td><?php echo $_POST["productQuantity"] . " piece(s)";?></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><?php echo $_POST["price"] . '€';?></td>
                </tr>
                <tr>
                    <td>Delivery Address</td>
                    <td><?php echo $_POST["address"];?></td>
                </tr>
            </table>
            <button>Confirm order</button>
        </div>
        <?php } ?>
    </div>
</body>

</html>