<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Listagem de Notícias</title>

        <!-- Fonte only -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>

    <body>
        <!-- Comeco Cabeçalho -->
        <header class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="src/img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top me-3" />
                    WebNews em PHP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Membro da Comunidade
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item active" href="index.php?category=a">Categoria 1</a></li>
                                <li><a class="dropdown-item" href="index.php?category=a">Categoria 2</a></li>
                                <li><a class="dropdown-item" href="index.php?category=a">Categoria 3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Administrador
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li class="nav-item">
                                    <a class="dropdown-item" href="admin/listar_noticias.php">Listagem de Notícias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="admin/nova_noticia.html">Cadastro de Notícias</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- Main -->
        <main class="px-md-4">
            <div class="">
                <h1 class="h3">Listagem de Noticias</h1>

                <?php
                    require_once('/src/php/posts/membro_comunidade/controllerConsult.php');
                ?>

                <!-- Footer -->
                <footer class="footer bg-light">
                    <div class=" text-center py-3">
                        ©
                        <script language="javascript" type="text/javascript">
                            now = new Date();
                            document.write(now.getFullYear());
                        </script>
                        Copyright:
                        <a href="#"> Alunos da FIAP</a>
                    </div>
                </footer>

        </main>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>

</html>