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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Listagem de Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin/nova_noticia.html">Cadastro de Notícias</a>
                    </li>
                    <!-- <li class="nav-item">
            <a class="nav-link" href="#">CATEGORIA 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">CATEGORIA 4</a>
          </li> -->
                </ul>
            </div>
        </div>
    </header>

    <!-- Main -->
    <main class="px-md-4">
        <div class="">
            <h1 class="h3">Listagem de Noticias</h1>


            <!-- <div class="card mb-3" style="max-width: 540px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="src/img/img1.jpg" class="img-fluid rounded-start" alt="..." />
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card 1</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit
                                longer.
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>

                </div>
            </div> -->


            <?php
            include 'banco.php';
            $pdo = Banco::conectar();
            $sql = 'SELECT * FROM posts ORDER BY id DESC';

            foreach ($pdo->query($sql) as $row) {


                echo '<div class="card mb-3" style="max-width: 540px">';
                echo '<div class="row g-0">';
                echo '<div class="col-md-4">';
                echo '<img src="' . $row['Imagem'] .  '" class="img-fluid rounded-start" alt="..." />';
                echo '</div>';
                echo '<div class="col-md-8">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['Titulo'] . '</h5>';
                echo '<p class="card-text">' . $row['Conteudo'] . '</p>';
                echo '<p class="card-text">';
                echo '<small class="text-muted">' . $row['Data_Publicacao'] . '</small>';
                echo '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            Banco::desconectar();
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


</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>