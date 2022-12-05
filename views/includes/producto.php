<?php

    abstract class Producto{

        protected $id;
        protected $img;
        protected $nom;
        protected $precio;

        public function __construct($id, $img, $nom, $precio){
            $this->id = $id;
            $this->img = $img;
            $this->nom = $nom;
            $this->precio = $precio;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            return $this;
        }


        public function getImg()
        {
            return $this->img;
        }

        public function setImg($img)
        {
            return $this;
        }


        public function getNom()
        {
            return $this->nom;
        }

        public function setNom($nom)
        {
            return $this;
        }
        
 
        public function getPrecio()
        {
            return $this->precio;
        }
 
        public function setPrecio($precio)
        {
            return $this;
        }


        

    }
        

?>