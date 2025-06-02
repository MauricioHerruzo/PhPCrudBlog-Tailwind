<?php 
require_once('functions.php');


if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $text = $_POST['text'];

    //tratamiento de la imagen
    $img = $_FILES['img'];
  
    $nombreImagen = $img['name'];
    $rutaTemporal = $img['tmp_name'];
    $ruta = "img/posts/".$nombreImagen;

    move_uploaded_file($rutaTemporal,$ruta);

    $mensaje = post($gbd,$title,$text,$nombreImagen);

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post nueva entrada</title>
</head>
<body>
    
<form action="#" method="post" enctype="multipart/form-data">

    <input type="text" name="title" placeholder="Título">
    <textarea name="text" placeholder="Cuerpo del post"></textarea>
    <input type="file" name="img">
    <input type="submit" name="submit">



</form>

    
</body>
</html>