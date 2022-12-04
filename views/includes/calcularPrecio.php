<?php

    class calcularPrecio{
        
        public static function calcularPrecioFinal($pedidos){
            $precioTotal = 0;
            foreach ($pedidos as $pedido){
                $precioUnitario = $pedido->getProducto()->getPrecio($pedido->getCantidad());
                $precioTotal += $precioUnitario;
            }
            return $precioTotal;
        }
        
    }

?>