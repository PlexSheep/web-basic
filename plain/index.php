<!doctype html>
<?php
echo
'
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
            <div class="grid-item-1">
                <h1>Basic plain HTML/CSS/JS webapp</h1>
            </div>
            <div class="grid-item-2">
                <p>hello</p>
            </div>
            <div class="grid-item-2">
                <p>world</p>
            </div>
            <div class="grid-item-2">
                <button id="JSbutt" onclick="getTypes()">execute JS stuff</button>
            </div>
            <div class="grid-item-2-4">
                <img src="im in.gif"></img>
            </div>
            <div class="grid-item-2-4">
                <nav>
                    <div><a href="art1.php">cursed article</a></div>
                    <div><a href="art1.php">cursed article</a></div>
                    <div><a href="art1.php">cursed article</a></div>
                    <div><a href="buy.php">buy awesome stuff!</a></div>
                    <div><a href="phpinfo.php">phpinfo</a></div>
                </nav>
            </div>
            <div class="grid-item-3">
            </div>
            <div class="grid-item-3">8</div>
            <div class="grid-item-3">9</div>
        </div>
        <div class="form-popup" id="myForm">
            <h1>Login</h1>
            <p id="not-old-enough">Not old enough!</p>
            <form class="form-container">

                <label for="name"><b>Name:</b></label>
                <input type="text" id="myForm-name" placeholder="Enter Name" name="name" required>

                <label for="age"><b>Age:</b></label>
                <input type="text" id="myForm-age" placeholder="Enter Age" name="age" required>

                <button type="button" onclick="processForm()" class="btn">Login</button>
                <button type="button" onclick="closeForm()" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
        <script>
            openForm();
        </script>
    </body>
</html>
';
?>
