<?php require_once('./functions.php');

if(isset($_POST['registrar'])){
    $mensaje = registrar($gbd, $_POST['username'],$_POST['password'],$_POST['email']);
}

if(isset($_POST['login'])){
    // evitar el error del checkbox si se falla contraseña o usuario en el login 
    $remember = isset($_POST['remember']) ? true : false;
    $mensaje = login($gbd,$_POST['username'], $_POST['password'], $remember);
}
?>
<?php include_once("header.php"); ?>

    <?php 
    if(isset($_COOKIE['id'])){
        echo $_COOKIE['id'];
    }
    
    if (isset($mensaje)){ ?>
        <div><?= $mensaje; ?></div>
    <?php }else{ ?>

 <main class="my-20 flex items-center justify-center  ">
    <div class="flex w-[1000px] rounded-4xl overflow-hidden min-h-[600px] shadow-2xl mx-10 lg:mx-auto">
        <!-- div img  -->
        <div class="hidden lg:block lg:basis-1/3 bg-[url(./img/linkFondoPost.jpg)] bg-cover bg-center">

        </div>
        <!-- div forms  -->
        <div class="w-full lg:basis-2/3 bg-white/10 backdrop-blur-md p-10 md:p-20">
            <h2 class="text-center text-amber-50 text-2xl">Registrarse</h2>
            <form method="post" class="flex flex-col gap-5 my-5 ">
                <input type="text" name="username" placeholder="Usuario" required class="border-2 border-amber-50/50 p-2 rounded-2xl text-amber-50 text-xl">
                <input type="email" name="email" placeholder="Email" required class="border-2 border-amber-50/50 p-2 rounded-2xl text-amber-50 text-xl">
                <input type="password" name="password" placeholder="Contraseña" required class="border-2 border-amber-50/50 p-2 rounded-2xl text-amber-50 text-xl">
                <button type="submit" name="registrar" class=" bg-amber-50 mx-auto py-2 px-6 rounded-2xl hover:bg-[#B2A56E] cursor-pointer hover:scale-[1.05] transition-transform duration-150 shadow-2xl text-xl">Registrarse</button>
            </form>
    
            <div class="h-[2px] bg-gradient-to-r from-transparent via-amber-50 to-transparent my-10"></div>
            
        <h2 class="text-center mt-5 text-amber-50 text-2xl">Login</h2>
            <form method="post" class="flex flex-col gap-5 mt-5">
                <input type="text" name="username" placeholder="Usuario" required class="border-2 border-amber-50/50 p-2 rounded-2xl text-amber-50 text-xl">
                <input type="password" name="password" placeholder="Contraseña" required class="border-2 border-amber-50/50 p-2 rounded-2xl text-amber-50 text-xl">
                <div class="flex items-center gap-2 justify-center">
                    <input type="checkbox" name="remember" id=""  class="h-6 w-6 rounded-lg cursor-pointer">
                    <label class="text-amber-50 text-xl" for="remember">Recuerdame</label>
                </div>
                <button type="submit" name="login" class=" bg-amber-50 mx-auto py-2 px-6 rounded-2xl hover:bg-[#B2A56E] cursor-pointer hover:scale-[1.05] transition-transform duration-150 shadow-2xl text-xl">Entrar</button>
            </form>

        </div>

    </div>


    </main>
    
    <?php } ?>
</body>
</html>