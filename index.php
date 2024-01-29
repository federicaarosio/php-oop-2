<?php

require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Kennel.php';
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/db/data.php';


// var_dump($products);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php OOP 2</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Custom css -->
    <link rel="stylesheet" href="./style/style.css">

</head>

<body class="bg-light">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center m-5">Pet Shop</h1>
                </div>
                <div class="col-12">
                    <article class="d-flex flex-wrap justify-content-between">
                        <?php foreach ($products as $product) { ?>
                        <div class="card mb-5" style="width: 18rem;">
                            <img src="<?php echo $product->getImgUrl()?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->getTitle()?></h5>
                                <ul class="card-text">

                                    <li>
                                        <strong>Category: </strong>
                                        <span>
                                            <?php echo $product -> getCategory() -> getType() ; ?>
                                            <img src="<?php echo $product -> getCategory() -> getLogo() ; ?>"
                                                class="logo-category" alt="logo">
                                        </span>

                                    </li>

                                    <!-- If product-type exists, show it -->
                                    <?php 
                                        if (method_exists($product, 'getName')) {
                                            echo "<li><strong>Product type: </strong>" . $product -> getName() . "</li>";
                                        } 
                                    ?>

                                    <li>
                                        <?php 
                                            if (method_exists($product, 'getBrand')) {
                                                echo "<li><strong>Brand: </strong>" . $product -> getBrand() . "</li>";
                                            } 
                                        ?>
                                    </li>

                                    <!-- If ingredients exists, show it -->
                                    <?php 
                                        if (method_exists($product, 'getIngredients')) {
                                            echo "<li><strong>Ingredients: </strong>" . $product -> getIngredients() . "</li>";
                                        } 
                                    ?>

                                    <!-- If expiring date exists, show it -->
                                    <?php 
                                        if (method_exists($product, 'getExpiringDate')) {
                                            echo "<li><strong>Expiring Date: </strong>" . $product -> getExpiringDate() . "</li>";
                                        } 
                                    ?>

                                    <!-- If size exists, show it -->
                                    <?php 
                                        if (method_exists($product, 'getSize')) {
                                            echo "<li><strong>Size: </strong>" . $product -> getSize() . " cm </li>";
                                        } 
                                    ?>



                                    <li>
                                        <strong>Price: </strong>
                                        <?php echo $product->getPrice() ?> &euro;
                                    </li>

                                </ul>
                                <a href="#" class="btn btn-primary">Add to cart</a>
                            </div>
                        </div>

                        <?php } ?>
                    </article>
                </div>
            </div>
        </div>



    </main>
</body>

</html>