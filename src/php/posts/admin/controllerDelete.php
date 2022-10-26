<?php
    require_once('/../posts.php');

    class ControllerDelete{
        private $posts;

        public function __construct(){
            $this->posts = new Posts();
            $this->execute();
        }

        public function execute(){
            $id = $_GET['id'];
            $this->posts->setId($id);

            $serverResponse = $this->posts->delete();
            if($serverResponse){
                echo("
                    <script>
                        alert('Notícia excluída com sucesso');
                        document.location = '../../../../admin/listar_noticias.php';
                    </script>
                ");
            }else{
                echo("
                    <script>
                        alert('Erro ao excluir notícia');
                        console.log('$serverResponse');
                        document.location = '../../../../admin/listar_noticias.php';
                    </script>
                ");
            }
        }
    }

    new ControllerDelete();
?>