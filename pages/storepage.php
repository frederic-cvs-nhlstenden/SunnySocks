<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="../styles/normalize.css" type="text/css">
    <link rel="stylesheet" href="../styles/global.css" type="text/css">
    <link rel="stylesheet" href="../styles/stylestorepage.css" type="text/css">
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <div class="filters">
            </div>
        </aside>
        <main class="main-content">
            <h1>BRIGHT DEALS, BOLD SOCKS</h1>
            <div class="product-grid">
                <?php
                $products = [
                    [
                        "name" => "Classic Stripes",
                        "price" => "€6,75",
                        "original_price" => "€11,50",
                        "image" =>
                        "../assets/sunny_socks_photos/packaging/jpeg/catalogus_sokken_uni_green.jpg",
                    ],
                    [
                        "name" => "Classic Stripes",
                        "price" => "€6,75",
                        "original_price" => "€11,50",
                        "image" =>
                        "../assets/sunny_socks_photos/packaging/jpeg/catalogus_sokken_uni_blue.jpg",
                    ],
                    [
                        "name" => "Classic Stripes",
                        "price" => "€6,75",
                        "original_price" => "€11,50",
                        "image" =>
                        "../assets/sunny_socks_photos/packaging/jpeg/catalogus_sokken_uni_pink.jpg",
                    ],
                    [
                        "name" => "Classic Uni Color",
                        "price" => "€6,75",
                        "original_price" => "€11,50",
                        "image" =>
                        "../assets/sunny_socks_photos/packaging/jpeg/catalogus_sokken_uni_red.jpg",
                    ],
                    [
                        "name" => "Classic Uni Color",
                        "price" => "€6,75",
                        "original_price" => "€11,50",
                        "image" =>
                        "../assets/sunny_socks_photos/packaging/jpeg/catalogus_sokken_uni_yellow.jpg",
                    ],
                    [
                        "name" => "Classic Uni Color",
                        "price" => "€6,75",
                        "original_price" => "€11,50",
                        "image" =>
                        "../assets/sunny_socks_photos/packaging/jpeg/catalogus_sokken_uni_blue.jpg",
                    ],
                ];

                foreach ($products as $product_id => $product): ?>
                    <div class="product-item">
                        <a href="productpage.php?product_id=<?= $product_id +
                                                                1 ?>">
                            <div class="image-container">
                                <img src="<?= $product["image"] ?>" alt="<?= $product["name"] ?>" loading="lazy" />
                            </div>
                        </a>
                        <div class="product-details">
                            <h2><?= $product["name"] ?></h2>
                            <p class="price">
                                <span class="discounted-price"><?= $product["price"] ?></span>
                                <span class="original-price"><?= $product["original_price"] ?></span>
                            </p>
                        </div>
                    </div>
                <?php endforeach;
                ?>
            </div>
        </main>
    </div>
</body>

</html>