<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/normalize.css" type="text/css">
    <link rel="stylesheet" href="../styles/styles.css" type="text/css">
    <link rel="stylesheet" href="../styles/styleproductpage.css" type="text/css">
    <title>Prodcut Page</title>
</head>

<body>

    <?php
    // Debug mode so I don't need $_GET request from store page
    $debug_mode = true;

    // Debug logic
    if ($debug_mode && !isset($_GET['product_id'])) {
        $product_id = 2;
    } else {
        // Normal operation (no debug)
        $product_id = $_GET['product_id'];
    }

    $products = [
        1 => [
            "name" => "Classic Uni-Color - Green",
            "price" => "€6,75",
            "description" => "Versatile and comfortable, these solid-color socks are perfect for any outfit, combining simplicity with everyday style.",
            "image" => "../assets/sunny_socks_photos/packaging/jpeg/catalogus_sokken_uni_green.jpg"
        ],
        2 => [
            "name" => "Classic Uni-Color - Blue",
            "price" => "€6,75",
            "description" => "Versatile and comfortable, these solid-color socks are perfect for any outfit, combining simplicity with everyday style.",
            "image" => "../assets/sunny_socks_photos/packaging/jpeg/catalogus_sokken_uni_blue.jpg"
        ]
    ];

    if (array_key_exists($product_id, $products)) {
        $product = $products[$product_id];
    } else {
        echo "<h1>Oops! Looks like one of our socks slipped away!</h1>
        <p>Don’t worry, we’re on it. The page you’re looking for is missing, but you can hop back to our homepage and find your perfect pair!</p>";
        exit;
    }
    ?>

    <div class="productimage">
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" />
    </div>
    <div class="productdesc">
        <h1><?php echo $product['name']; ?></h1>
        <p><?php echo $product['description']; ?></p>
        <p><?php echo $product['price']; ?></p>
    </div>

</body>

</html>