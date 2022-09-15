<?php
  
  if (isset($_GET['numInicial']) and isset($_GET['numFinal'])){
    for ($num=$_GET['numInicial'];$num<$_GET['numFinal'];$num++){
      if ($num%2==0){
        echo $num.' ';
      }
    }
  } else {
    echo 'Falta parametros por recibir';
  }
  
?>