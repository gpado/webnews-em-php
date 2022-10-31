<?php
    require_once("/../posts.php");

    class ControllerEdit{
        private $posts;
        private $operation;

        public function __construct(){
            $this->posts = new Posts();
            $this->operation = $_GET["operation"];

            $this->execute();
        }

        public function execute(){
            switch($this->operation){
                case "getPostData":
                    $this->getPostData();
                    break;
                
                case "editPostData":
                    $this->editPostData();
                    break;

                default:
                    echo("
                        <h2>Oops, um erro ocorreu...</h2>
                        <p>Tente recarregar a página ou acessar outra parte de nosso site pelo menu.</p>
                        <script>console.log('Error to edit post: Invalid operation passed')</script>
                    ");
                    break;
            }
        }

        public function getPostData(){
            $id = $_GET['id'];
            
            $serverResponse = $this->posts->consult("ONE", $id, false);
            
            if(!is_string($serverResponse)){
                if($serverResponse != null){
                    $registry = $serverResponse[0];
                    ?>
                    <form name="frmEditPost" method="POST" action="alterar_noticia.php?operation=editPostData" style="display: flex; flex-direction:column; max-width: 50%; margin:auto;">
                        <h2>Inserir nova Noticia</h2>
                
                        <input class="d-none" type="number" name="txbId" id="txbId" value='<?php echo $registry[0] ?>' required>

                        <label class="form-label" for="txbTitle">Título da Noticia:</label>
                        <input class="form-control" type="text" name="txbTitle" id="txbTitle" data-is-value-valid="true" value='<?php echo $registry[1] ?>' required>
                        <br>
                
                        <label class="form-label" for="slctCategory">Categoria do Post</label>
                        <select class="form-control" name="slctCategory" id="slctCategory" data-is-value-valid="true" required>
                            <option disabled selected></option>
                            <option value="Planejamento">Planejamento</option>
                            <option value="Game Design">Game Design</option>
                            <option value="Desenvolimento">Desenvolimento</option>
                            <option value="Correção de Bugs">Correção de Bugs</option>
                            <option value="Outros">Outros</option>
                        </select>
                        <br>

                        <script> document.frmEditPost.slctCategory.value = '<?php echo $registry[2] ?>' </script>
                
                        <label class="form-label" for="txbPublicationDate">Data de Publicação</label>
                        <input class="form-control" type="date" name="txbPublicationDate" id="txbPublicationDate" data-is-value-valid="true" value='<?php echo $registry[3] ?>' required>
                        <br>
                
                        <label class="form-label" for="txaContent">Conteúdo</label>
                        <textarea class="form-control" name="txaContent" id="txaContent" data-is-value-valid="true" required> <?php echo $registry[4] ?> </textarea>
                        <br>
                
                        <label class="form-label" for="txbImage">Imagem</label>
                        <input class="form-control" type="text" name="txbImage" id="txbImage" data-is-value-valid="true" value='<?php echo $registry[5] ?>' required>
                        <br>
                        <br>

                        <div class="row d-flex justify-content-around">
                            <a class="btn btn-secondary col-12 col-md-4" href="listar_noticias.php">
                                Cancelar
                            </a>
                            <button class="btn btn-primary col-12 col-md-4" type="submit">Alterar</button>
                        </div>
                    </form>
                   
                    <?php
                }else{
                    ?>
                    <h2>Registro não encontrado</h2>
                    <p>
                        Esse registro deve ter sido excluído a pouco tempo, volte para página de 
                        <a href="listar_noticias.php">Listar Notícias.</a>
                    </p>
                    
                    <?php
                }     
            }else{
            ?>
                <h2>Oops, um erro ocorreu...</h2>
                <p>Tente recarregar a página ou acessar outra parte de nosso site pelo menu.</p>
                <script>console.log('Error to edit post: <?php echo($serverResponse) ?>')</script> 
            <?php
            }
        }

        public function editPostData(){
            $id = $_POST['txbId'];
            $title = $_POST['txbTitle'];
            $category = $_POST['slctCategory'];
            $content = $_POST['txaContent'];
            $publicationDate = $_POST['txbPublicationDate'];
            $image = $_POST['txbImage'];

            $this->posts->setId($id);
            $this->posts->setTitle($title);
            $this->posts->setcategory($category);
            $this->posts->setContent($content);
            $this->posts->setPublicationDate($publicationDate);
            $this->posts->setImage($image);

            $serverResponse = $this->posts->edit();
            if($serverResponse){
                echo("
                    <script>
                        alert('Notícia editada com sucesso');
                        document.location = 'listar_noticias.php';
                    </script>
                ");
            }else{
                echo("
                    <h2>Oops, um erro ocorreu...</h2>
                    <p>Tente recarregar a página ou acessar outra parte de nosso site pelo menu.</p>
                    <script>console.log('Error to edit post: $serverResponse')</script>
                ");
            }
        }
    }

    new ControllerEdit();
?>
