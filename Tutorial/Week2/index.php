<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2 - Advanced PHP</title>
</head>
<body>
    <h1>Week 2 - Advanced PHP</h1>
    <p>Full Stack Web Development - Week 2 Tutorial</p>
    <?php
        //exercise1 
        $categories = ["Laptops", "Phones", "Accessories", "Audio"];
         foreach ($categories as $category){
            echo $category . "<br>";
        }
        //exercise2
         $product = [
        "name" => "Wireless Mouse",
        "price" => 850,
        "stock" => 12
    ];

    // Display product details using associative keys
    echo "Product Name: " . $product["name"] . "<br>";
    echo "Price: " . $product["price"] . "<br>";
    echo "Stock: " . $product["stock"];
    //exercise3

    $products = [
        ["id"=>101, "name"=>"Wireless Mouse", "category"=>"Accessories", "price"=>850, "stock"=>12],
        ["id"=>102, "name"=>"USB-C Cable", "category"=>"Accessories", "price"=>350, "stock"=>25],
        ["id"=>103, "name"=>"Laptop", "category"=>"Electronics", "price"=>85000, "stock"=>5],
        ["id"=>104, "name"=>"Smartphone", "category"=>"Electronics", "price"=>45000, "stock"=>8],
        ["id"=>105, "name"=>"Headphones", "category"=>"Audio", "price"=>2500, "stock"=>15]
    ];

    // Display all products
    foreach ($products as $product) {
        echo "Product ID: " . $product["id"] . "<br>";
        echo "Name: " . $product["name"] . "<br>";
        echo "Category: " . $product["category"] . "<br>";
        echo "Price: " . $product["price"] . "<br>";
        echo "Stock: " . $product["stock"] . "<br>";
        echo "<hr>";
    }

   
    // Exercise 5: Filter products with price greater than 500

$filteredProducts = array_filter($products, function($product) {
    return $product["price"] > 500;
});

// Display filtered products

echo "<h2>Products with Price Greater Than 500</h2>";

foreach ($filteredProducts as $product) {
    echo "Product Name: " . $product["name"] . "<br>";
    echo "Category: " . $product["category"] . "<br>";
    echo "Price: " . $product["price"] . "<br>";
    echo "Stock: " . $product["stock"] . "<br>";
    echo "<hr>";
}

// Exercise 6: Filter products with stock below 10

$lowStockProducts = array_filter($products, function($product) {
    return $product["stock"] < 10;
});

// Display products with stock below 10

echo "<h2>Products with Stock Below 10</h2>";

foreach ($lowStockProducts as $product) {
    echo "Product Name: " . $product["name"] . "<br>";
    echo "Stock: " . $product["stock"] . "<br>";
    echo "<hr>";
}

// Exercise 7: Get all product names using array_map()

$productNames = array_map(function($product) {
    return $product["name"];
}, $products);

// Display product names

echo "<h2>All Product Names</h2>";

foreach ($productNames as $name) {
    echo "Product Name: " . $name . "<br>";
    echo "<hr>";
}


    ?>
</body>
</html>
