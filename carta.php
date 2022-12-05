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
        
        include "views/includes/productosLoad.php";
        include "views/includes/pedido.php";    

            session_start();
            if(isset($_SESSION["compra"])){
                if(isset($_POST["mariscada"])){
                    $productoSel = new Pedido ($mariscadas[$_POST["mariscada"]]);
                    array_push($_SESSION["compra"], $productoSel);
                    unset($_POST["mariscada"]);

                }elseif(isset($_POST["pescados"])){
                    $productoSel = new Pedido ($pescados[$_POST["pescados"]]);
                    array_push($_SESSION["compra"], $productoSel);
                    unset($_POST["pescados"]);

                }elseif(isset($_POST["mariscos"])){
                    $productoSel = new Pedido ($mariscos[$_POST["mariscos"]]);
                    array_push($_SESSION["compra"], $productoSel);
                    unset($_POST["mariscos"]);

                }elseif(isset($_POST["cefalopodos"])){
                    $productoSel = new Pedido ($cefalopodos[$_POST["cefalopodos"]]);
                    array_push($_SESSION["compra"], $productoSel);
                    unset($_POST["cefalopodos"]);

                }elseif(isset($_POST["moluscos"])){
                    $productoSel = new Pedido ($moluscos[$_POST["moluscos"]]);
                    array_push($_SESSION["compra"], $productoSel);
                    unset($_POST["moluscos"]);

                }elseif(isset($_POST["cocktails"])){
                    $productoSel = new Pedido ($cocktails[$_POST["cocktails"]]);
                    array_push($_SESSION["compra"], $productoSel);
                    unset($_POST["cocktails"]);
                }
            }else{
                $_SESSION["compra"] = array();
            }
            
            //require_once "views/includes/cabeceraCarta.php";
            //var_dump($_SESSION["compra"]);
            //$_SESSION["compra"] = [];
        ?>
        
        <!-- Page content -->
        <section class="cuadradoPrincipal">
            <div class="cuadrado1">
                <h1>REYNA'S SEAFOOD - LA CARTA</h1>
                <h2 href="#Mariscadas">MARISCADAS</h2>
                <div class="row cuadrado2">
                    <?php foreach ($mariscadas as $producto){ ?>
                        <div class="col-5 cuadradoProducto">
                            <div class="cuadradoImg">  
                                <img src="<?= $producto->getImg()?>">
                            </div>
                        
                            <div class="cuadradoNomPreu">
                                <?=$producto->getNom()?>
                                <p><?=$producto->getPrecio()?>€</p>
                                <form action="" method="post">
                                
                                    <input type="hidden" name="mariscada" value=<?=$producto->getId();?>>
                                    <button class="boton-personalizado" type="submit"> ORDENAR </button>
                                
                                </form>

                            </div>
                        </div> 
                    <?php }?>
                </div>

                <h2><a name="Pescados">PESCADOS</a></h2>
                <div class="row cuadrado2">
                    <?php foreach ($pescados as $producto){ ?>
                        <div class="col-5 cuadradoProducto"> 
                            <div class="cuadradoImg">  
                                <img src="<?= $producto->getImg()?>">
                            </div>
                        
                            <div class="cuadradoNomPreu">
                                <?=$producto->getNom()?>
                                <p><?=$producto->getPrecio()?>€</p>
                                <form action="" method="post">
                                
                                    <input type="hidden" name="pescados" value=<?=$producto->getId();?>>
                                    <button class="boton-personalizado" type="submit"> ORDENAR </button>
                                
                                </form>

                            </div>
                        </div> 
                    <?php }?>
                </div>

                <h2><a name="Mariscos">MARISCOS</a></h2>
                <div class="row cuadrado2">
                    <?php foreach ($mariscos as $producto){ ?>
                        <div class="col-5 cuadradoProducto"> 
                            <div class="cuadradoImg">  
                                <img src="<?= $producto->getImg()?>">
                            </div>
                        
                            <div class="cuadradoNomPreu">
                                <?=$producto->getNom()?>
                                <p><?=$producto->getPrecio()?>€</p>
                                <form action="" method="post">
                                
                                    <input type="hidden" name="mariscos" value=<?=$producto->getId();?>>
                                    <button class="boton-personalizado" type="submit"> ORDENAR </button>
                                
                                </form>

                            </div>
                        </div> 
                    <?php }?>
                </div>

                <h2><a name="Cefalopodos">CEFÁFOLOPOS</a></h2>
                <div class="row cuadrado2">
                    <?php foreach ($cefalopodos as $producto){ ?>
                        <div class="col-5 cuadradoProducto"> 
                            <div class="cuadradoImg">  
                                <img src="<?= $producto->getImg()?>">
                            </div>
                        
                            <div class="cuadradoNomPreu">
                                <?=$producto->getNom()?>
                                <p><?=$producto->getPrecio()?>€</p>
                                <form action="" method="post">
                                
                                    <input type="hidden" name="cefalopodos" value=<?=$producto->getId();?>>
                                    <button class="boton-personalizado" type="submit"> ORDENAR </button>
                                
                                </form>

                            </div>
                        </div> 
                    <?php }?>
                </div>

                <h2><a name="Moluscos">MOLUSCOS</a></h2>
                <div class="row cuadrado2">
                    <?php foreach ($moluscos as $producto){ ?>
                        <div class="col-5 cuadradoProducto" > 
                            <div class="cuadradoImg">  
                                <img src="<?= $producto->getImg()?>">
                            </div>
                        
                            <div class="cuadradoNomPreu">
                                <?=$producto->getNom()?>
                                <p><?=$producto->getPrecio()?>€</p>
                                <form action="" method="post">
                                
                                    <input type="hidden" name="moluscos" value=<?=$producto->getId();?>>
                                    <button class="boton-personalizado" type="submit"> ORDENAR </button>
                                
                                </form>

                            </div>
                        </div> 
                    <?php }?>
                </div>

            </div>
        </section>
        
        
        
    </body>
    <?php 
        include "views/includes/footer.html"; 
    ?>
</html>