<?php
    require_once '../inc/db.inc.php';
    require '../inc/products.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Näck Store</title>
    <meta charset="UTF-8">
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./styles/store.css" />
    <script type="text/javascript" src="./scripts/store-java.js" async></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <script>
            var productInfo = document.querySelectorAll('.product-info');
            var shopImg = document.querySelectorAll('.prod-img');
        </script>
    </header>
    <main>
        <div id="big-container">
            <div id="products">
                <div class="product1" id="product1">
                    <?php
                        include_once '../inc/products.inc.php';
                        productInfo($conn, $productId = 'bucket-hat', $yeit =1);
                    ?>
                    <script>
                        loadStats(bar1 = document.querySelectorAll('.stats-bar1')[0], stat1 = document.querySelectorAll('.stat1')[0].innerHTML * 10 + '%',bar2 = document.querySelectorAll('.stats-bar2')[0], stat2 = document.querySelectorAll('.stat2')[0].innerHTML * 10 + '%',bar3 = document.querySelectorAll('.stats-bar3')[0], stat3 = document.querySelectorAll('.stat3')[0].innerHTML * 10 + '%');
                    </script>
                </div>
                <div class="product2" id="product2">
                    <?php
                        include_once '../inc/products.inc.php';
                        productInfo($conn, $productId = 'pluto-painting', $yeit =2);
                    ?>
                    <script>
                        loadStats(bar1 = document.querySelectorAll('.stats-bar1')[1], stat1 = document.querySelectorAll('.stat1')[1].innerHTML * 10 + '%',bar2 = document.querySelectorAll('.stats-bar2')[1], stat2 = document.querySelectorAll('.stat2')[1].innerHTML * 10 + '%',bar3 = document.querySelectorAll('.stats-bar3')[1], stat3 = document.querySelectorAll('.stat3')[1].innerHTML * 10 + '%');
                    </script>
                </div>
                <div class="product3" id="product3">
                    <?php
                        include_once '../inc/products.inc.php';
                        productInfo($conn, $productId = 'ubat-painting', $yeit=3);
                    ?>
                    <script>
                        loadStats(bar1 = document.querySelectorAll('.stats-bar1')[2], stat1 = document.querySelectorAll('.stat1')[2].innerHTML * 10 + '%',bar2 = document.querySelectorAll('.stats-bar2')[2], stat2 = document.querySelectorAll('.stat2')[2].innerHTML * 10 + '%',bar3 = document.querySelectorAll('.stats-bar3')[2], stat3 = document.querySelectorAll('.stat3')[2].innerHTML * 10 + '%');
                    </script>
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
<link rel="stylesheet" type="text/css" href="./styles/kwikk.css" />
</html>