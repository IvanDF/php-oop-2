<?php
    include_once __DIR__ . '/classes/Products.php';
    include_once __DIR__ . '/classes/Producer.php';
    include_once __DIR__ . '/classes/Specs.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Main header -->
    <header class="mainHeader">
        <h1>Products</h1>
    </header>

    <!-- Main section -->
    <main class="mainSection">
        <h3>
        <strong>Sort By:</strong>
            <?php
                $products = new Products('iPhone 11', 'Smarphone', 'Dotato di un nuovo sistema a doppia fotocamera che rivoluzionerà le tue foto. La fotocamera ultra grandangolo permette di inquadrare una scena ...', '100');
                $producer = new Producer('Apple');
                echo $producer->producerProducts();
            ?>
        </h3>
        
        <div class="container">
            <div class="productLust">
                    <h3>
                        <?php echo $products->printProduct(); ?>
                    </h3>
                    <h4>
                        <?php echo '<br>Costo: '. $products->calculateDeal(10) . ' Con sconto del 10% applicato'; ?>
                    </h4>
            </div>
        </div>

        <h5>SPECS:</h5>
        <?php
            $specs = new Specs(2020, 3100, 'A13', 'Liquid Retina HD', 'iOS');
        ?>
        <strong><?php echo $specs -> getSpecsProduct()?></strong>
        <ul>
            <?php
                echo $specs->getSpecs()
            ?>
        </ul>

    </main>

    <!-- Main footer -->
    <footer class="mainFooter">
        <h1>FOOTER</h1>
    </footer>

</body>
</html>
