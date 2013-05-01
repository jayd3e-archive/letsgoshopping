<?php
$list_id = 1;

$db = mysqli_connect('localhost', 'root', 'root', 'letsgoshopping_db');

$results = mysqli_query($db, 'SELECT * FROM list_items WHERE list_id = ' . $list_id);

$products = array();
for($i=0;$result = $results->fetch_assoc();$i++) {
    $products[$i] = $result;
}
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
    </head>
    <body>
        <h1>Shopping List</h1>
        <ul class="items">
            <?php
            foreach($products as $product)
            {
            ?>
            <li><?php echo $product['name']; ?></li>
            <?php
            }
            ?>
        </ul>
    </body>
</html>