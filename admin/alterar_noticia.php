<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        
        <title>Alterar Notícia</title>
    </head>
    <body>
        <header class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="../src/img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-3">
                WebNews em PHP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="listar_noticias.php">Listar Notícias</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="nova_noticia.html">Nova Notícia</a>
                    </li>
                </ul>
                </div>
            </div>
        </header>
        <div class="container py-5">
            <?php 
                require_once('../src/php/posts/admin/controllerEdit.php');
            ?>
                
        </div>
        <footer class="container-flex py-4 bg-dark text-light">
            <div class="row d-flex justify-content-center">
                <div class="col-5 text-center">
                    <div>
                        <h4>WebNews</h4>
                        <img src="../src/img/logo.png" alt="Logo" width="30" height="24">
                    </div>
                    <p>Av. Hill Valley nº1955</p>
                </div>
            </div>
            
        </footer>
    </body>
</html>