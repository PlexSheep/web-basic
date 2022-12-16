<?php
define("price", 14);
session_start();
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
                    <option <?php if ($_POST["product"]=="AAAAAAAAAAA") { echo "selected";
                    } ?>>AAAAAAAAAAA</option>
                    <option <?php if ($_POST["product"]=="cat") { echo "selected";
                    } ?>>cat</option>
                    <option <?php if ($_POST["product"]=="twitter") { echo "selected";
                    } ?>>twitter</option>
                    <option <?php if ($_POST["product"]=="success") { echo "selected";
                    } ?>>success</option>
                    <option <?php if ($_POST["product"]=="Apple") { echo "selected";
                    } ?>>apple</option>
                    <option <?php if ($_POST["product"]=="orange") { echo "selected";
                    } ?>>orange</option>
                </select>
                <label for="productQuantity">How many of it?</label><br>
                <input name="productQuantity" type="number" value=<?php if ($_POST) { echo $_POST["productQuantity"];
                }
                    else echo "1"; ?>>
            </div>
            <div class="grid-item-2">
                <h3>Where do you want it to be delivered?</h3>
                <textarea name="address" form="BuyForm"><?php if ($_POST)
                    echo $_POST["address"];
                else
                    echo "Musterstraße 1\n12345 Musterdorf\nGermany"; ?></textarea>
                <input type="hidden" name="price" value=<?php echo price; ?>>
            </div>
            <div class="grid-item-2">
                <input type="submit" value="Check">
            </div>
        </form>
        <?php if ($_POST) {
            $_SESSION["product"] = $_POST["product"];
            $_SESSION["productQuantity"] = $_POST["productQuantity"];
            $_SESSION["price"] = $_POST["price"];
            $_SESSION["address"] = $_POST["address"];
        ?>
        <div class="grid-item-2" id="checkout">
            <h3>Is this correct?</h3>
            <form action="" method="post">
            <table>
                <tr>
                    <th>property</th>
                    <th>value</th>
                </tr>
                <tr>
                    <td>Product</td>
                    <td>
                        <?php echo $_POST["product"]; ?>
                        <input name="product" type="hidden" value="<?php echo $_POST["product"];?>">
                    </td>
                </tr>
                <tr>
                    <td>Product quantity</td>
                    <td>
                        <?php echo $_POST["productQuantity"] . " piece(s)"; ?>
                        <input name="productQuantity" type="hidden" value="<?php echo $_POST["productQuantity"];?>">
                    </td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>
                        <?php echo $_POST["price"] . '€'; ?>
                        <input name="price" type="hidden" value="<?php echo $_POST["price"];?>">
                    </td>
                </tr>
                <tr>
                    <td>Delivery Address</td>
                    <td>
                        <?php echo $_POST["address"]; ?>
                        <input name="address" type="hidden" value="<?php echo $_POST["address"];?>">
                    </td>
                </tr>
            </table>
            <input type="hidden" name="confirm" value="true">
            <input type="submit" value="Confirm ordering">
            </form>
        </div>
        <?php
            if ($_POST["confirm"] == "true") {
                $fh = fopen("buchungen.log", "a");
                if ($fh) {
                    $s =sprintf(
                        "%s;%d;%s;%s\n", 
                        '"' . $_POST["product"] . '"',
                        $_POST["productQuantity"], 
                        '"' . trim(preg_replace('/\s+/', ' ', $_POST["address"])) . '"',
                        $_POST["price"]
                    );
                    fputs($fh, $s);
                    fclose($fs);
                    echo '<h2 style="background-color:green;font-size:32px;">Ordering successfull.</h2>';
                } else
                    echo '<h2 style="background-color:red;font-size:32px;">Internal error while saving your order.</h2>';
            }
        } ?>
    </div>
</body>
</html>