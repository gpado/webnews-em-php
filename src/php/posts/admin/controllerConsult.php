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
                        <td class="col-2"><?php echo $registryId ?></td>
                        <td class="col-2"><?php echo $registryTitle ?></td>
                        <td class="col-2"><?php echo $registryCategory ?></td>
                        <td class="col-2">
                            <a href="alterar_noticia.php?operation=getPostData&id=<?php echo $registryId ?>"><button class="btn btn-primary btn-ChangePost">Alterar</button></a>
                        </td>
                        <td class="col-2">
                            <a href="excluir_noticia.php?operation=getPostData&id=<?php echo $registryId ?>"><button class="btn btn-danger btn-DeletePost">Excluir</button></a>
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