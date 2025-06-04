<?php require_once('./functions.php');
$consulta = " Select * FROM posts ";
$stm = $gbd->query($consulta);
$resultados = $stm->fetchAll(PDO::FETCH_OBJ);
?>
<?php include_once("header.php"); ?>

    <main class=" flex justify-center flex-wrap ">
        <div class="container m-8 flex flex-wrap justify-center gap-5">

    <?php foreach($resultados as $fila){?>
            <a href="./post.php?id=<?= $fila->id?>">
                <div class="bg-[#483531] max-w-[350px] md:max-w-[500px] h-[400px] p-6 rounded-3xl cursor-pointer hover:scale-[1.1] hover:[transform:perspective(800px)_rotateY(-10deg)] w-96 sm:w-84 shadow-lg group duration-300 hover:border-4 border-[#B2A56E] overflow-hidden overflow-ellipsis">
                    <div class="bg-[url(./img/posts/<?= $fila->img?>)] bg-cover bg-center w-full h-[200px] rounded-t-2xl"></div>
                    <p class="text-amber-50 text-2xl text-center mt-3 overflow-hidden text-ellipsis"><?= $fila->title?></p>
                </div>
            </a>
            <?php }?>
            
        </div>
        
    </main>
    
</body>
</html>
<a href="./hero.php?id=<?php echo $hero['hero_id'] ?>">Ver Más</a>

