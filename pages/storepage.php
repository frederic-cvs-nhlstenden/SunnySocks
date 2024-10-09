<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="../styles/normalize.css" type="text/css">
    <link rel="stylesheet" href="../styles/styles.css" type="text/css">
    <link rel="stylesheet" href="../styles/stylestorepage.css" type="text/css">
</head>
<body>
    <div class="container">
    <?php
    $products = [
        1 => [
            "name" => "Classic Stripes",
            "price" => "€6,75",
            "original_price" => "€11,50",
            "image" =>
                "../assets/sunny_socks_photos/packaging/jpeg/catalogus_sokken_uni_green.jpg",
        ],
        2 => [
            "name" => "Classic Stripes",
            "price" => "€6,75",
            "original_price" => "€11,50",
            "image" =>
                "../assets/sunny_socks_photos/packaging/jpeg/catalogus_sokken_uni_blue.jpg",
        ],
        3 => [
            "name" => "Classic Stripes",
            "price" => "€6,75",
            "original_price" => "€11,50",
            "image" =>
                "../assets/sunny_socks_photos/packaging/jpeg/catalogus_sokken_uni_red.jpg",
        ],
    ];
    foreach ($products as $product_id => $product) {
        echo "
                <div class='productbox'>
                    <a href='productpage.php?product_id=$product_id'>
                        <div class='image-container'><img src='{$product["image"]}' alt='{$product["name"]}' /></div>
                        <h2>{$product["name"]}</h2>
                        <p class='price'>
                            <span class='discounted-price'>{$product["price"]}</span>
                            <span class='original-price'>{$product["original_price"]}</span>
                        </p>
                    </a>
                </div>";
    }
    ?>
    </div>
</body>
</html>
