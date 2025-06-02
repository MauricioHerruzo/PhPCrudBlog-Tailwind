<?php 

require_once('conexion.php');

//FUNC REGISTRAR
function registrar($gbd,$username, $password, $email){
    $smt = $gbd->prepare("SELECT username from usuarios  WHERE username = ?");
    $smt -> execute([$username]);

    if($smt->fetch()){
        return "El usuario ya existe";

    }
    
    $lockedPass = password_hash($password, PASSWORD_DEFAULT);
    
    //piso la variable para otro uso, total la de arriba ya no hace falta
    $smt = $gbd ->prepare("INSERT into usuarios values(null,?,?,?)");
    if($smt->execute([$username,$lockedPass,$email])){
        return "Registro correcto";
    };
    return "Ocurrio algún error en el registro";
    
}

//FUNC LOGIN
function login($gbd,$username, $password, $remember){
    $smt = $gbd->prepare("SELECT * from usuarios where username = ?");
    $smt->execute([$username]);
    $data = $smt->fetch(PDO::FETCH_OBJ);

    if($data && password_verify($password,$data->password)){
        session_start();
        $_SESSION['id'] = $usuario['id'];
        if($remember == true){
            setcookie('id',$usuario['id'],time()+3600);
        }
        header('Location:newPost.html');      
    }
    
    return "Usuario o contraseña incorrectos";
}

// FUNC POST 
function post($gbd,$title,$text,$img){
    $smt = $gbd->prepare("INSERT into posts (title,postbody,img) VALUES (?,?,?)");
    $resultado = $smt->execute([$title,$text,$img]);

    if($resultado){
        // header('Location:admin.php');
        return "Has posteado yipi";

    }
    return "No has posteado";

}

?>