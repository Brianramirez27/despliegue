<?php 
 
 $conexion=mysqli_connect("localhost","root","","despliegue");


 if(mysqli_connect_error()){
    echo"mensaje:".mysqli_connect_error();
 }else{
   echo"conecxion exitosa";
 }


?>