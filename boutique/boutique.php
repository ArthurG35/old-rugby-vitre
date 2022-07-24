<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/15a2a289be.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>BOUTIQUE - AURORE RUGBY CLUB VITRÉ</title>
</head>

<body>
    <?php include 'assets/php-files/header.php' ?>
    <div class="slide-container">
        <div class="wrapper">
            <div class="card">
                <div class="name">Veste</div>
                <div class="image">
                    <img src="assets/images/images1.jpg">
                </div>
                <div class="pricebox clearfix">
                    <div class="one-third no-border">
                        <div class="price">100€</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="name">Pull</div>
                <div class="image">
                    <img src="assets/images/images2.jpg">
                </div>
                <div class="pricebox clearfix">
                    <div class="one-third no-border">
                        <div class="price">90€</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="name">Name 3</div>
                <div class="image">
                    <img src="assets/images/images3.jpg">
                </div>
                <div class="pricebox clearfix">
                    <div class="one-third no-border">
                        <div class="price">50€</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="name">Name 4</div>
                <div class="image">
                    <img src="assets/images/images4.jpg">
                </div>
                <div class="pricebox clearfix">
                    <div class="one-third no-border">
                        <div class="price">150€</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'assets/php-files/footer.php' ?>
</body>
<script src="boutique.bundle.js?v=<?= filemtime('boutique.bundle.js'); ?>"></script>

</html>