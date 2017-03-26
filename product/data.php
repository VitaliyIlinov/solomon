<?php
$product = [
    ['name' => 'J7', 'price' => 5299, 'date' => '2015-01-22'],
    ['name' => 's4', 'price' => 3500, 'date' => '2015-01-02'],
    ['name' => 'a7', 'price' => 16000, 'date' => '2015-12-12'],
    ['name' => 'm5', 'price' => 4299, 'date' => '2016-10-22'],
    ['name' => 'm5 note', 'price' => 4700, 'date' => '2016-10-01'],
    ['name' => 'm3', 'price' => 3500, 'date' => '2016-09-01'],
    ['name' => 'k5', 'price' => 3400, 'date' => '2016-02-01'],
    ['name' => 'Vibe k5', 'price' => 4555, 'date' => '2016-10-12'],
    ['name' => 'Vibe p1', 'price' => 3333, 'date' => '2016-03-01'],
];

if(!empty($_POST['sort'])){
    $callback=array("Product",$_POST['sort']);
    usort($product,$callback);
    echo json_encode($product);
    exit();
}else{
    $callback=array("Product","sortByName");
}
usort($product,$callback);