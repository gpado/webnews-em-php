<?php
    require_once('/../posts.php');

    class ControllerSearch{
        private $posts;

        public function __construct(){
            $this->posts = new Posts();
            $this->execute();
        }

        public function execute(){
            $title = $_GET['title'];
            
            $this->posts->setTitle($title);
            $serverResponse = $this->posts->consult("TITLE", 0, true);

            $this->showData($serverResponse);

        }

        public function showData($serverResponse){
            if(!is_string($serverResponse)){
                $areRegistries = false;

                foreach($serverResponse as $databaseRow){
                    $areRegistries = true;

                    echo("
                        <div class='card mb-3 col-7'>
                            <div class='card-body'>
                                <h5 class='card-title'>" . $databaseRow['Titulo'] . "</h5>
                                <p class='card-text'>" . $databaseRow['Conteudo'] . "</p>
                                <p class='card-text'>
                                    <small class='text-muted'>" . $databaseRow['Data_Publicacao'] . "</small>
                                </p>
                            </div>
                        </div>
                    ");
                }

                if(!$areRegistries){
                    echo("
                        <p>Nenhuma notícia encontrada</p>
                    ");
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

    new ControllerSearch();

?>