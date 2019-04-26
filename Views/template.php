<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MVC - MATHEUS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="views/assets/css/foundation.css">
    <link rel="stylesheet" href="views/assets/css/app.css">
</head>
<body>
    <header>
        <nav>
            <ul class="menu align-center">
                <li><a href="#">One</a></li>
                <li><a href="#">Two</a></li>
                <li><a href="#">Three</a></li>
                <li><a href="#">Four</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h5><?php $this->loadViewTemplate($viewName, $viewData); ?></h5>
    </main>
    <footer>
        <h5>Rodape</h5>
    </footer>
    <script src="views/assets/js/vendor/jquery.js"></script>
    <script src="views/assets/js/vendor/what-input.js"></script>
    <script src="views/assets/js/vendor/foundation.js"></script>
    <script src="views/assets/js/app.js"></script>
</body>
</html>