<?php require_once('./functions.php');
?>
<?php 

if(isset( $_GET['id'])){
    $id = $_GET['id'];

    $consulta = " SELECT * FROM posts WHERE  id = ? ";
    $stm = $gbd->prepare($consulta);
    $stm->execute([$id]);
    $resultado = $stm->fetch(PDO::FETCH_OBJ);

}else{
    header("Location:blog.php");
}
?>
<?php include_once("header.php"); ?>

    <main class="flex justify-center">
        <div class="container bg-[#483531] min-h-50 rounded-4xl m-8 max-w-[1000px] shadow-2xl p-4 md:p-8">
            <div class="border-dotted border-[#B2A56E] border-4 w-full h-full rounded-xl flex flex-col justify-center p-4 md:p-10">
                <h1 class="w-full text-amber-50 text-xl self-center text-center sm:text-4xl lg:text-4xl bg-[#2e211f] rounded-2xl p-4 shadow-xl"><?= $resultado->title ?></h1>
                <div class="w-full h-[200px] md:h-[400px] lg:h-[600px] bg-[url(./img/posts/<?= $resultado->img ?>)] bg-cover bg-center rounded-xl mt-5 shadow-xl" >
                </div>
                <p class="text-amber-50 mt-5 sm:text-2xl"><?= $resultado->postbody ?></p>
            </div>
        </div>
    </main>
</body>
</html>