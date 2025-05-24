<?php require_once('./functions.php');

if(isset($_POST['registrar'])){
    $mensaje = registrar($gbd, $_POST['username'],$_POST['password'],$_POST['email']);
}

if(isset($_POST['login'])){
    $mensaje = login($gbd,$_POST['username'], $_POST['password']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Básico</title>
</head>
<body>
    <?php if (isset($mensaje)){ ?>
        <div><?php echo $mensaje; ?></div>
    <?php }else{ ?>


    <!-- Formulario de Registro -->
    <h2>Registro</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="email" name="email" placeholder="Correo (opcional)">
        <button type="submit" name="registrar">Registrarse</button>
    </form>


    <!-- Formulario de Login -->
    <h2>Login</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit" name="login">Entrar</button>
    </form>
    <?php } ?>
</body>
</html>