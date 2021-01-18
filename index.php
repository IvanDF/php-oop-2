<?php
    include_once __DIR__ . '/classes/Products.php';
    include_once __DIR__ . '/classes/Producer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header class="mainHeader">
        <h1>Products</h1>
    </header>
    
    <main class="mainSection">

        <h4>Sort By producer</h4>

        <h3>
            <?php
                $producer = new Producer('Iphone 11', 'Smarphone', 'L\'iPhone 11 è dotato di un nuovo sistema a doppia fotocamera che rivoluzionerà le tue foto. La fotocamera ultra grandangolo permette di inquadrare una scena ...', '100', 'Apple');
                echo $producer->producerProducts();
            ?>
        </h3>
    
    <div class="container">
        <div class="productLust">
            <?php
                $products = new Products('Iphone 11', 'Smarphone', 'L\'iPhone 11 è dotato di un nuovo sistema a doppia fotocamera che rivoluzionerà le tue foto. La fotocamera ultra grandangolo permette di inquadrare una scena ...', '100');
                // var_dump($products);
                ?>
                <h3>
                    <?php
                        echo $products->printProduct();
                    ?>
                </h3>
                <h2>
                    <?php
                        echo $products->calculateDeal(10);
                    ?>
                </h2>
        </div>
    </div>
    </main>
    <footer class="mainFooter">
    <h1>FOOTER</h1>
    </footer>
</body>
</html>
