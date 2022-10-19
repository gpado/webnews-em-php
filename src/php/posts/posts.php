<?php

    //Requiring Connection class
    require_once("./connection.php");

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

        public function Submit(){
            try{
                $this->conn = new Connection();
                $sql = $this->conn->prepare("INSERT INTO ".$this::TABLE_NAME." VALUES (null,?,?,?,?,?)");
                @$sql->bindParams(1, $this->getTitle(), PDO::PARAM_STR);
                @$sql->bindParams(2, $this->getCategory(), PDO::PARAM_STR);
                @$sql->bindParams(3, $this->getPublicationDate(), PDO::PARAM_STR);
                @$sql->bindParams(4, $this->getContent(), PDO::PARAM_STR);
                @$sql->bindParams(5, $this->getImage(), PDO::PARAM_STR);

                if($sql->execute()){
                    return true;
                }else{
                    return "Error unknow to submit a new post";
                }
            }catch(PDO_Exception $error){
                return "Error to submit a new post: $error";
            }
        }
    }
?>