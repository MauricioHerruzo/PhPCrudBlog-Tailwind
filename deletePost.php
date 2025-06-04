<?php 
require_once("conexion.php");
if($_GET['id']){

    $idPost = $_GET['id'];

    //Borrar la imagen de la carpeta de imagenes
    $consultaImg= "SELECT img FROM posts where id = ?";
    $smtImg = $gbd->prepare($consultaImg);
    $smtImg-> execute([$idPost]);
    $img = $smtImg->fetch(PDO::FETCH_OBJ);

    if($img){
        $imgLocation = "./img/posts/". $img->img;
        if(file_exists($imgLocation)){
            unlink($imgLocation);
        }
    }

    //Borrar post Base de datos y recargar página
    $consulta = "DELETE FROM posts WHERE id = ?";
    $sentencia = $gbd->prepare($consulta);
    $resultado = $sentencia->execute([$idPost]);
    if($resultado){
        header('Location:admin.php');
    }

}
?>