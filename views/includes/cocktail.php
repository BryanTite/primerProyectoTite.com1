<?php

    include_once "producto.php";

    class Cocktail extends Producto{
        private $grandaria;

        public function __construct($id, $img, $nom, $precio, $grandaria){
            parent::__construct($id, $img, $nom, $precio);
            $this->grandaria = $grandaria;
        }


        public function getGrandaria()
        {
            return $this->grandaria;
        }


        public function setGrandaria($grandaria)
        {
            $this->grandaria = $grandaria;

            return $this;
        }
    }

?>