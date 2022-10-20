<?php

    //Requiring Connection class
    require_once("../connection.php");

    class Posts{

        //Table name constant
        const TABLE_NAME = "posts";

        //Connection class instance
        private $conn;

        //Atributes
        private $id;
        private $title;
        private $category;
        private $publicationDate;
        private $content;
        private $imageURL;

        //Getters and Setters
        public function getId(){
            return $this->id;
        }
        public function setId($newId){
            $this->id = $newId;
        }

        public function getTitle(){
            return $this->title;
        }
        public function setTitle($newTitle){
            $this->title = $newTitle;
        }
        
        public function getCategory(){
            return $this->category;
        }
        public function setCategory($newCategory){
            $this->category = $newCategory;
        }

        public function getPublicationDate(){
            return $this->publicationDate;
        }
        public function setPublicationDate($newPublicationDate){
            $this->publicationDate = $newPublicationDate;
        }

        public function getContent(){
            return $this->content;
        }
        public function setContent($newContent){
            $this->content = $newContent;
        }

        public function getImage(){
            return $this->image;
        }
        public function setImage($newImage){
            $this->image = $newImage;
        }

        //CRUD functions

        public function submit(){
            try{
                $this->conn = new Connection();
                $sql = $this->conn->prepare("INSERT INTO ".$this::TABLE_NAME." VALUES (null,?,?,?,?,?)");
                @$sql->bindParam(1, $this->getTitle(), PDO::PARAM_STR);
                @$sql->bindParam(2, $this->getCategory(), PDO::PARAM_STR);
                @$sql->bindParam(3, $this->getPublicationDate(), PDO::PARAM_STR);
                @$sql->bindParam(4, $this->getContent(), PDO::PARAM_STR);
                @$sql->bindParam(5, $this->getImage(), PDO::PARAM_STR);

                if($sql->execute()){
                    return true;
                }else{
                    return "Error to submit a new post: Execution failed";
                }
            }catch(PDO_Exception $error){
                return "Error to submit a new post: ".$error->getMessage();
            }
        }

        public function consult($postsToSelect){
            if(isset($postsToSelect)){
                try{
                    $query = "SELECT * FROM ".$this::TABLE_NAME." ";

                    if($postsToSelect != "*"){
                        $postToSelectIndex = intval($postsToSelect);
                        if(is_int($postToSelectIndex) && $postToSelectIndex > 0) $query .= "WHERE id = ".$postToSelectIndex;

                        else return "Error to consult posts: Invalid consult parameter passed";
                    }

                    $this->conn = new Connection();
                    $sql = $this->conn->prepare($query);

                    if($sql->execute()){
                        return $sql->fetchAll();
                    }else{
                        return "Error to consult posts: Execution failed";
                    }

                }catch(PDOException $error){
                    return "Error to consult posts: ".$error->getMessage();
                }
            }else{
                return "Error to consult posts: Missing consult parameter";
            }
            
        }

        public function edit(){
            try{
                $this->conn = new Connection();
                $sql = $this->conn->prepare("UPDATE ".$this::TABLE_NAME." set Titulo = ?, Categoria = ?, Data_Publicacao = ?, Conteudo = ?, Imagem = ? WHERE id = ?");
                @$sql->bindParam(1, $this->getTitle(), PDO::PARAM_STR);
                @$sql->bindParam(2, $this->getCategory(), PDO::PARAM_STR);
                @$sql->bindParam(3, $this->getPublicationDate(), PDO::PARAM_STR);
                @$sql->bindParam(4, $this->getContent(), PDO::PARAM_STR);
                @$sql->bindParam(5, $this->getImage(), PDO::PARAM_STR);
                @$sql->bindParam(6, $this->getId(), PDO::PARAM_STR);

                if($sql->execute()){
                    return true;
                }else{
                    return "Error to edit post: Execution failed";
                }

            }catch(PDOException $error){
                return "Error to edit post: ".$error->getMessage();
            }
        }

        public function delete(){
            try{
                $this->conn = new Connection();
                $sql = $this->conn->prepare("DELETE FROM ".$this::TABLE_NAME." WHERE id = ?");
                @$sql->bindParam(1, $this->getId(), PDO::PARAM_STR);

                if($sql->execute()){
                    return true;
                }else{
                    return "Error to delete post: Execution failed";
                }

            }catch(PDOException $error){
                return "Error to delete post: ".$error->getMessage();
            }
        }

    }
    
?>