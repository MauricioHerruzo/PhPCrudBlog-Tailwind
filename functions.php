<?php 

require_once('./conexion.php');

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
function login($gbd,$username, $password){
    $smt = $gbd->prepare("SELECT * from usuarios where username = ?");
    $smt->execute([$username]);
    
    $data = $smt->fetch(PDO::FETCH_OBJ);

    if($data && password_verify($password,$data->password)){
        return "Estás logeado";
    }
 
    return "Usuario o contraseña incorrectos";
}

?>