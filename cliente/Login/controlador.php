<?php
$conexion=new mysqli("localhost","root","","autosantiguosv2","3306");
$conexion->set_charset("utf8");

if (!empty($_POST["btningresar"])) {
  
       if (empty($_POST["usuario"]) and empty ($_POST["password"])) {
      echo "Los campos estan vacios";
       } else {
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        if($usuario == "admin" and $password == "1234"){
            header("location:http://localhost/ServicioRESTAutosAntiguos/cliente/Login/WSAutos.php");
        } else{
            echo "Usuario no encontrado";
        }    
       }      

}

?>