<?php require_once('functions.php');
 session_start();
 if(isset($_COOKIE['id'])){
     $_SESSION['id'] = $_COOKIE['id'];
 }
 if(!isset($_SESSION['id'])){
     header('location:loginRegister.php');
 }

 //POSTS
$consulta = " Select * FROM posts ";
$stm = $gbd->query($consulta);
$resultados = $stm->fetchAll(PDO::FETCH_OBJ);


?>
<?php include_once("header.php"); ?>

        <main class=" flex justify-center flex-wrap gap-5 p-10">
        <div class="container m-8 flex flex-wrap justify-center gap-5">
            <a href="newPost.php" class=" bg-amber-50 mx-auto py-2 px-6 rounded-2xl hover:bg-[#B2A56E] cursor-pointer hover:scale-[1.05] transition-transform duration-150 shadow-2xl text-xl">Añadir post</a>
        </div>

    <?php foreach($resultados as $fila){?>
            <a href="./post.php?id=<?= $fila->id?>">
                <div class="bg-[#483531] max-w-[350px] md:max-w-[500px] h-[400px] p-6 rounded-3xl cursor-pointer hover:scale-[1.1] hover:[transform:perspective(800px)_rotateY(-10deg)] w-96 sm:w-84 shadow-lg group duration-300 hover:border-4 border-[#B2A56E] overflow-hidden overflow-ellipsis">
                    <div class="bg-[url(./img/posts/<?= $fila->img?>)] bg-cover bg-center w-full h-[200px] rounded-t-2xl"></div>
                    <p class="text-amber-50 text-2xl text-center mt-3 overflow-hidden text-ellipsis"><?= $fila->title?></p>
                    <div class= "mt-10 flex justify-center">
                        <a href="./deletePost.php?id=<?= $fila->id?>" class=" bg-amber-50 mx-auto py-2 px-6 rounded-2xl hover:bg-[#ec3b03] cursor-pointer hover:scale-[1.05] transition-transform duration-150 shadow-2xl text-xl">Borrar</a>
                        <a href="./updatePost.php?id=<?= $fila->id?>"  class=" bg-amber-50 mx-auto py-2 px-6 rounded-2xl hover:bg-[#16f8fc] cursor-pointer hover:scale-[1.05] transition-transform duration-150 shadow-2xl text-xl">Editar</a>
                    </div>
                </div>
            </a>
            <?php }?>
            
        </div>
        
    </main>

</body>
</html>