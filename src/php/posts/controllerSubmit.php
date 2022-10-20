<?php
    //Requiring Posts class
    require_once("./posts.php");

    class ControllerSubmit{
        private $posts;

        public function __construct(){
            $this->posts = new Posts();
            $this->execute();
        }

        public function execute(){
            $this->posts->setTitle($_POST['txbTitle']);
            $this->posts->setCategory($_POST['slctCategory']);
            $this->posts->setPublicationDate(date('Y-m-d', strtotime($_POST['txbPublicationDate'])));
            $this->posts->setContent($_POST['txaContent']);
            $this->posts->setImage($_POST['txbImage']);

            $wasPostSubmit = $this->posts->submit();
            if($wasPostSubmit){
                echo("<script>alert('Notícia cadastrada com sucesso!');document.location='../../../nova_noticia.html'</script>");
            }else{
                echo("<script>alert('Erro ao cadastr notícia, tente novamente mais tarde.'); console.log(".$wasPostSubmit.");</script>");
            }
        }
    }

    new ControllerSubmit();
?>