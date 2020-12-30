<?php
   
    class conseil_d {
        private  $id ;
        private  $type;
        private  $titre;
        private  $image;
        private  $description;

        public function __construct($id, $type, $titre, $image, $description){
            //$this->idConseil = $id;++
            $this->id = $id;
            $this->type = $type;
            $this->titre = $titre;
            $this->image = $image;
            $this->description = $description;
        }

        public function getId () {
            return $this->id;
        }

        
        public function getType (){
            return $this->type ;
        }
      
        public function getTitre (){
            return $this->titre ;
        }
        public function getImage (){
            return $this->image ;
        }
        public function getDescription (){
            return $this->description ;
        }
        

        public function setId($id){
			$this->id=$id;
		}

        public function setType ($type){
            $this->type = $type;
        }
       
        public function setTitre ($titre){
            $this->titre = $titre;
        }
        public function setImage ($image){
            $this->image = $image;
        }
        public function setDescription ($description){
            $this->description = $description;
        }
        

    }