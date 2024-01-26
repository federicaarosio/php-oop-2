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
    $dogKibble = new Food('DogsKibble', 'https://i.pinimg.com/236x/e4/4f/67/e44f67082c7265c8b0a45db298b3f61a.jpg', 32.40, $dogCategory, ['meat', 'fish'], 'dogbrand', 'jan 25'),

    $catKibble = new Food('Yummy CatsKibble', 'https://i.pinimg.com/236x/2d/63/6a/2d636a3cbedfc8d29e3e0661f4972fd7.jpg', 17.897, $catCategory, ['eggs', 'fish'], 'catbrand', 'apr 25'),

    $catKennel1 = new Kennel('Amazing CatKennel', 'https://i.pinimg.com/564x/15/19/aa/1519aa3604b5827232bb269e9d53e377.jpg', 140.35, $catCategory, 120, 'catbrand'),

    $squeakyToy = new Toy('Squeaky Duck', 'https://i.pinimg.com/564x/d0/d6/f9/d0d6f98bfe814f40577867bdff677f33.jpg', 46.497, $dogCategory, 36, 'dogBrand'),

    $dogKennel1 = new Kennel('Amazing CatKennel', 'https://i.pinimg.com/564x/15/19/aa/1519aa3604b5827232bb269e9d53e377.jpg', 140.35, $catCategory, 120, 'catbrand'),

];