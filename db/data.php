<?php

require_once __DIR__ . '/../models/Category.php';
require_once __DIR__ . '/../models/Food.php';
require_once __DIR__ . '/../models/Kennel.php';
require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../models/Toy.php';

$categories = [
    $dogCategory = new Category('dogs', 'https://cdn-icons-png.flaticon.com/512/620/620851.png'),
    $catCategory = new Category('cats', 'https://cdn-icons-png.flaticon.com/512/220/220124.png')
];

$products = [
    $dogKibble = new Food('Dogs Kibble', 'https://i.pinimg.com/236x/e4/4f/67/e44f67082c7265c8b0a45db298b3f61a.jpg', 32.42, $dogCategory, 'food', ['meat', 'fish'], 'dogbrand', 'jan 25'),

    $catKibble = new Food('Yummy Cats Kibble', 'https://i.pinimg.com/236x/2d/63/6a/2d636a3cbedfc8d29e3e0661f4972fd7.jpg', 17.897, $catCategory, 'food', ['eggs', 'fish'], 'catbrand', 'apr 25'),

    $catKennel1 = new Kennel('Amazing Cat Kennel', 'https://i.pinimg.com/564x/15/19/aa/1519aa3604b5827232bb269e9d53e377.jpg', 140.35, $catCategory, 'Kennel', 120, 'catbrand'),

    $catKennel2 = new Kennel('Very Cat Kennel', 'https://i.pinimg.com/236x/67/d9/7e/67d97ed9e92d153378091f43da72ebab.jpg', 121.35, $catCategory, 'Kennel', 90, 'catbrand'),

    $squeakyToy = new Toy('Squeaky Duck', 'https://i.pinimg.com/564x/d0/d6/f9/d0d6f98bfe814f40577867bdff677f33.jpg', 46.497, $dogCategory, 'Toy', 36, 'dogBrand'),

    $ballToy = new Toy('The one and only toy', 'https://i.pinimg.com/236x/c9/26/d7/c926d7091b9d22da3c86ff8d5f5b2fc6.jpg', 17.987, $dogCategory, 'Toy', 25, 'dogBrand'),

    $dogKennel1 = new Kennel('Comfy Dog Kennel Cabin', 'https://i.pinimg.com/236x/57/41/3c/57413ce0f04d56b8028f6b2e8ea461fa.jpg', 170.35, $dogCategory, 'Kennel', 180, 'dogbrand'),

    $catchmeToy = new Toy('Catch me if you can', 'https://i.pinimg.com/236x/75/55/e3/7555e373bbf9f3229f7721183efbc354.jpg', 64.787, $catCategory, 'Toy', 26, 'catbrand'),

];