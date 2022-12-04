<html>
    <?php 
        include "views/includes/header.html";
    ?>
    <head>
        <title>REYNA'S SEAFOOD</title>
        <meta charset="UFT-8">
        <meta name="viewport" content="width-device, initial-scale=1">
        
    </head>

    <body>

        <?php
        include "views/includes/calcularPrecio.php";
        include "views/includes/platos.php";
        include "views/includes/cocktail.php";
        include "views/includes/pedido.php";

        
        session_start();

        //Creamos COOKIE
        $precioTotal = calcularPrecio::calcularPrecioFinal($_SESSION["compra"]);
        setcookie("cookiePrecio", $precioTotal, time() + (86400 * 30), "/");

        if(isset($_POST["Del"])){
            $pedidoSel = $_SESSION["compra"][$_POST["pos"]];

            if($pedidoSel->getCantidad() == 1){
                unset($_SESSION["compra"][$_POST["pos"]]);

                $_SESSION["compra"] = array_values($_SESSION["compra"]);
            }else{
                $pedidoSel->setCantidad($pedidoSel->getCantidad() -1);
            }

        }else if(isset($_POST["Add"])){
            $pedidoSel = $_SESSION["compra"][$_POST["pos"]];
            $pedidoSel->setCantidad($pedidoSel->getCantidad() + 1);
        }  

        ?> 
        <h1></h1>
        <div class="carritoPrincipal">
            <div class="row categoriasProductos">
                <h2 class="col-12 col-md-3"></h2>
                <h2 class="col-12 col-md-3">PRODUCTOS</h2>
                <h2 class="col-12 col-md-3">CANTIDAD</h2>
                <h2 class="col-12 col-md-3">PRECIO</h2>
            </div>

            <div class="row categoriasProductos2">
                <h2 class="col-12 col-md-3">CARRITO</h2>
            </div>

            <div class="row tableCarrito">
                <?php
                $pos = 0;
                foreach($_SESSION["compra"] as $producto){ ?>
                    
                    <div class="col-12 col-md-3 imgProducto">
                        <img src="<?=$producto->getProducto()->getImg()?>" alt="">
                    </div>
                    <div class="col-12 col-md-3 nomProducto">
                        <?=$producto->getProducto()->getNom()?>
                    </div>
                        
                    <div class="col-12 col-md-3 cantidadBotones">
                        <form action="carrito.php" method="post">
                        
                            <input type="hidden" name="pos" value=<?=$pos?>>
                            <button class="boton-personalizado2" type="submit" name="Add"> + </button>
                            <?=$producto->getCantidad()?>
                            <button class="boton-personalizado2" type="submit" name="Del"> - </button>
                        
                        </form>
                    </div>
                    <div class="col-12 col-md-3 precioProducto">
                        <p><?=$producto->getProducto()->getPrecio()?>€</p>
                    </div>
                        
                <?php $pos++;
                    }?>

            </div>
        </div>    
        <div class="row finalizar">
            <div class="col-6 col-md-3 finalizarCompra">
                <form action="carrito.php" method="post">
                    <input type="hidden" name="precioFinal" value=<?=$precioTotal?>>
                    <button class="boton-personalizado3" type="submit" name="finalizarCompra"> FINALIZAR COMPRA </button>
                </form>
            </div>

            <div class="col-6 col-md-3 nada"></div>
            <div class="col-6 col-md-3 nada"></div>

            <div class="col-6 col-md-3 precioFinalProducto">
                <?php $precioTotal = calcularPrecio::calcularPrecioFinal($_SESSION["compra"]); 
                echo $precioTotal."€";?>                        
            </div>
        </div>
        
        
    </body>
    <?php 
        include "views/includes/footer.html"; 
    ?>
</html>