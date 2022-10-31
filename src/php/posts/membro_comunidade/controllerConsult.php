<?php
    require_once("/../posts.php");

    class ControllerConsult{
        private $posts;

        public function __construct(){
            $this->posts = new Posts();
            $this->execute();
        }

        public function execute(){
            $category = $_GET['category'];
            $isCategoryValid = $this->validateCategory($category);
            
            if($isCategoryValid){
                $this->posts->setCategory($category);
                $serverResponse = $this->posts->consult("CATEGORY", 0, true);

                $this->showData($serverResponse);
            }else{
                echo("
                    <h2>Oops, um erro ocorreu</h2>
                    <p>Tente recarregar a página ou acessar outra parte do sistema pelo nosso menu</p>
                    <script>console.log('Error to consult: invalid category passed')</script>
                ");
            }
        }

        public function validateCategory($categoryName){
            switch($categoryName){
                case "Planejamento":
                case "Game Design":
                case "Desenvolvimento":
                case "Correção de Bugs":
                case "Outros":
                    return true;
                    break;
                
                default: 
                    return false;
                    break;
            }
        }

        public function showData($serverResponse){
            if(!is_string($serverResponse)){
                $areRegistries = false;

                foreach($serverResponse as $databaseRow){
                    $areRegistries = true;


                    echo("
                        <div class='card mb-3' style='max-width: 540px'>
                            <div class='row g-0'>
                                <div class='col-md-4'>
                                    <img src='" . $databaseRow['Imagem'] . "' class='img-fluid rounded-start' />
                                </div>
                                <div class='col-md-8'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>" . $databaseRow['Titulo'] . "</h5>
                                        <p class='card-text'>" . $databaseRow['Conteudo'] . "</p>
                                        <p class='card-text'>
                                            <small class='text-muted'>" . $databaseRow['Data_Publicacao'] . "</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    new ControllerConsult();

?>