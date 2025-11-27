<?php

/** @var \App\ViewModels\ProductsViewModel $vm */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Products Shop</title>
</head>

<body>
    <ul>
        <?php foreach ($vm->products as $product) { ?>
            <li>
                <h2><?php echo htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8'); ?></h2>
            </li>
        <?php } ?>
    </ul>
</body>

</html>