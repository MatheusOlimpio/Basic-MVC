<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/foundation.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/login.css">    
</head>
<body>
    <div class="container">
        <form method="POST">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                <div class="medium-12 cell">
                    <label>Usuario
                    <input type="text" name="user" placeholder="Insira seu usuario">
                    </label>
                </div>
                <div class="medium-12 cell">
                    <label>Senha
                    <input type="password" name="pass" placeholder="Insira sua senha">
                    </label>
                </div>
                </div>
                <button type="clear" class="hollow button">Cancelar</button>
                <button type="submit" class="hollow button">Entrar</button>
            </div>
            
        </form>
    </div>
    <script src="<?php echo BASE_URL; ?>/assets/js/vendor/jquery.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/vendor/what-input.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/vendor/foundation.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/app.js"></script>    
</body>
</html>