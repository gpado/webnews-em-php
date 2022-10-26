<?php
    require_once("/../posts.php");

    class ControllerConsult{
        private $posts;

        public function __construct(){
            $this->posts = new Posts();
            $this->execute();
        }

        public function execute(){
            $serverResponse = $this->posts->consult("*", 0, false);

            if(!is_string($serverResponse)){
                $areRegistries = false;

                foreach($serverResponse as $databaseRow){
                    $areRegistries = true;

                    $registryId = $databaseRow[0];
                    $registryTitle = $databaseRow[1];
                    $registryCategory = $databaseRow[2];
                    ?>
                    <tr>
                        <td class="col-2 idCel"><?php echo $registryId ?></td>
                        <td class="col-2 titleCel"><?php echo $registryTitle ?></td>
                        <td class="col-2"><?php echo $registryCategory ?></td>
                        <td class="col-2">
                            <a class="btn btn-primary btnChangePost" href="alterar_noticia.php?operation=getPostData&id=<?php echo $registryId ?>">Alterar</a>
                        </td>
                        <td class="col-2">
                            <button class="btn btn-danger btnDeletePost">Excluir</button>
                        </td>
                    </tr>
                    <?php
                }

            }else{
                echo("
                    <h2>Oops, um erro ocorreu</h2>
                    <p>Tente recarregar a página ou acessar outra parte do sistema pelo nosso menu</p>
                    <script>console.log('$serverResponse')</script>
                ");
            }
        }
    }

    new ControllerConsult();
?>