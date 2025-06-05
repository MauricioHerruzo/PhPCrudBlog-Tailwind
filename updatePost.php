<?php 
require_once('functions.php');
session_start();

// control de sesión 
if(isset($_COOKIE['id'])){
    $_SESSION['id'] = $_COOKIE['id'];
}
if(!isset($_SESSION['id'])){
    header('location:loginRegister.php');
}

// usar id del post
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $consulta = "SELECT * FROM posts WHERE id = ?";
    $stm = $gbd->prepare($consulta);
    $stm->execute([$id]);
    $resultado = $stm->fetch(PDO::FETCH_OBJ);
} else {
    header("Location:index.php");
}

// permitir updatear
if(isset($_POST['submit']) && !empty($_POST['title']) && !empty($_POST['text'])){
    $title = $_POST['title'];
    $text =$_POST['text']; 

    // tratamiento de la imagen
    $img = $_FILES['img'];
    $nombreImagen = $resultado->img; 

    if (!empty($img['name'])) {
        $nombreImagen = $img['name'];
        $rutaTemporal = $img['tmp_name'];
        $ruta = "img/posts/".$nombreImagen;
        move_uploaded_file($rutaTemporal, $ruta);
    }

    // actualizar post
    $update = "UPDATE posts SET title = ?, postbody = ?, img = ? WHERE id = ?";
    $stm = $gbd->prepare($update);
    $stm->execute([$title, $text, $nombreImagen, $id]);

    header("Location:post.php?id=" . $id);
    exit();
}
?>

<?php include_once("header.php"); ?>
    
<main class="flex justify-center m-8">
    <div class="container bg-[#483531] min-h-50 rounded-4xl m-8 max-w-[1000px] shadow-2xl p-4 md:p-8">
        <div class="border-dotted border-[#B2A56E] border-4 w-full h-full rounded-xl flex flex-col justify-center p-4 md:p-10">
            <form action="#" method="post" enctype="multipart/form-data" class="flex flex-col gap-5 my-5 ">
                <input type="text" name="title" placeholder="Título" class="border-2 border-amber-50/50 p-2 rounded-2xl text-amber-50 text-xl" value="<?= htmlspecialchars($resultado->title) ?>">
                <textarea name="text" placeholder="Cuerpo del post" class="border-2 border-amber-50/50 p-2 rounded-2xl text-amber-50 text-xl min-h-96"><?= htmlspecialchars($resultado->postbody) ?></textarea>
                <input type="file" name="img" class=" inset-0 w-full h-full cursor-pointer bg-amber-50 mx-auto py-2 px-6 rounded-2xl hover:bg-[#B2A56E] hover:scale-[1.05] transition-transform duration-150 shadow-2xl text-xl">
                <input type="submit" name="submit" value="Actualizar post" class=" bg-amber-50 mx-auto py-2 px-6 rounded-2xl hover:bg-[#B2A56E] cursor-pointer hover:scale-[1.05] transition-transform duration-150 shadow-2xl text-xl">
            </form>
        </div>
    </div>
</main>


    
</body>
</html>