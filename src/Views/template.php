<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MVC - MATHEUS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/foundation.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/app.css">
</head>
<body>
    <header>
        <nav>
            <ul class="menu align-center">
                <li><a href="home">Bem vindo ao meu Framework Mvc</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php $this->loadViewTemplate($viewName, $viewData); ?>
    </main>
    <footer>
        <!-- <h5>Rodape</h5> -->
    </footer>
    <script src="<?php echo BASE_URL; ?>/assets/js/vendor/jquery.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/vendor/what-input.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/vendor/foundation.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/app.js"></script>
</body>
</html>