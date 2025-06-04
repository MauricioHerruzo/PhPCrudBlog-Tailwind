<?php 
require_once("conexion.php");

//CAMBIAR EL FONDO DEL BODY SEGUN EL PAGE
$backgroundImages = [
    'index' => './img/bgHome.jpg',
    'blog' => './img/totkheader.jpg',
    'loginRegister' => './img/linkFondoPost.jpg',
    'post' => './img/linkFondoPost.jpg',
    'newPost' => './img/linkFondoPost.jpg',
    'admin' => './img/adminheader.jpg',
];

$currentPage = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
//Default para porsi
$currentPage = $currentPage ?: 'home';

//Imagen de fondo
$bgImage = $backgroundImages[$currentPage] ?? './img/linkFondoPost.jpg'
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
     
</head>

<body class="min-h-screen bg-cover bg-center bg-fixed " style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?= htmlspecialchars($bgImage) ?>')">
    <header class="bg-[#BF7E04] py-8 px-15  m-8 rounded-4xl  flex  flex-col justify-between text-amber-50 sm:flex-row ">
        <div class="flex justify-center text-3xl italic sm:justify-start">
            <a href="" class="text-center">La cocina de Link</a>
        </div>
        <div class=" flex gap-5 text-xl sm: justify-center">
            <a href="index.php" class="transition-transform duration-300 ease-in-out hover:scale-125">Home</a>
            <a href="blog.php" class="transition-transform duration-300 ease-in-out hover:scale-125">Blog</a>
            <a href="loginRegister.php" class="transition-transform duration-300 ease-in-out hover:scale-125">Login</a>
            <a href="admin.php" class="transition-transform duration-300 ease-in-out hover:scale-125">Admin</a>
        </div>
    </header>