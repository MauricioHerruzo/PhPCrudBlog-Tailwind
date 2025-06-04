<?php 
require_once('functions.php');


if(isset($_POST['submit']) && !empty($_POST['title']) && !empty($_POST['text']) && !empty($_FILES['img'])){
    $title = $_POST['title'];
    $text = $_POST['text'];
    //Guardar saltos de linea del usuario
    $text = nl2br(htmlspecialchars($text)); 

    //tratamiento de la imagen
    $img = $_FILES['img'];
  
    $nombreImagen = $img['name'];
    $rutaTemporal = $img['tmp_name'];
    $ruta = "img/posts/".$nombreImagen;

    move_uploaded_file($rutaTemporal,$ruta);

    $mensaje = post($gbd,$title,$text,$nombreImagen);

}

?>

<?php include_once("header.php"); ?>
    
<main class="flex justify-center m-8">
    <div class="container bg-[#483531] min-h-50 rounded-4xl m-8 max-w-[1000px] shadow-2xl p-4 md:p-8">
        <div class="border-dotted border-[#B2A56E] border-4 w-full h-full rounded-xl flex flex-col justify-center p-4 md:p-10">
            <form action="#" method="post" enctype="multipart/form-data" class="flex flex-col gap-5 my-5 ">
                <input type="text" name="title" placeholder="Título" class="border-2 border-amber-50/50 p-2 rounded-2xl text-amber-50 text-xl">
                <textarea name="text" placeholder="Cuerpo del post" class="border-2 border-amber-50/50 p-2 rounded-2xl text-amber-50 text-xl min-h-96"></textarea>
                <input type="file" name="img" class=" inset-0 w-full h-full  cursor-pointer bg-amber-50 mx-auto py-2 px-6 rounded-2xl hover:bg-[#B2A56E]  hover:scale-[1.05] transition-transform duration-150 shadow-2xl text-xl">
                <input type="submit" name="submit" class=" bg-amber-50 mx-auto py-2 px-6 rounded-2xl hover:bg-[#B2A56E] cursor-pointer hover:scale-[1.05] transition-transform duration-150 shadow-2xl text-xl">
            </form>
        </div>
    </div>
</main>

    
</body>
</html>