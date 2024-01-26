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

</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Pet Shop</h1>
                </div>
                <div class="col-12">
                    <article class="d-flex flex-wrap">
                        <?php foreach ($products as $product) { ?>
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $product->getImgUrl()?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->getTitle()?></h5>
                                <p class="card-text">
                                    <strong>Price: </strong>
                                    <?php echo $product->getPrice() ?> &euro;
                                </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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