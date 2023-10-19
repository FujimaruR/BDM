<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include('../BDM/backEnd/connection/cn_bd.php');

    $name = trim($_POST['formName']);
    $fecha_nacimiento = trim($_POST['trip-start']);
    $sexo = trim($_POST['formGender']);
    $nomcom = trim($_POST['formUserName']);
    $email = trim($_POST['formEmail']);
    $contra = trim($_POST['formPassword']);
    $tuser = trim($_POST['formRole']);
    $fecha_registro = date("d/m/y");

    if (isset($_FILES['formFile']) && $_FILES['formFile']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES['formFile']['name'];
        $rutaTempArchivo = $_FILES['formFile']['tmp_name'];

        $extensionesPermitidas = array("jpg", "jpeg", "png", "gif");

        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        if (!in_array(strtolower($extension), $extensionesPermitidas)) {
            header("Location: ../signUp.php?error=Archivo%20no%20permitido.");
            exit();
        }

        $contenidoArchivo = file_get_contents($rutaTempArchivo);
    } else {
        header("Location: ../signUp.php?error=Error%20al%20subir%20el%20archivo.");
        exit();
    }

    $hashed_password = password_hash($contra, PASSWORD_DEFAULT);


    try {

        $consulta_email = "SELECT * FROM tb_usuarios WHERE email = :email AND tuser = :tuser";

        $stmt_email = $conn->prepare($consulta_email);
        $stmt_email->bindParam(':email', $email);
        $stmt_email->bindParam(':tuser', $tuser);
        $stmt_email->execute();

        if ($stmt_email->rowCount() > 0) {
            header("Location: ../signUp.php?error=Este%20correo%20electrónico%20ya%20está%20registrado.");
            exit();
        }

        $consulta = "INSERT INTO tb_usuarios(nombre, email, contrasena, tuser, fecha_registro, img, complete_name, fecha_nacimiento, sexo) 
        VALUES (:nombre, :email, :contrasena, :tuser, :fecha_registro, :imag, :comname, :datebirth, :sex)";

        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':nombre', $nomcom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contrasena', $hashed_password);
        $stmt->bindParam(':tuser', $tuser);
        $stmt->bindParam(':fecha_registro', $fecha_registro);
        $stmt->bindParam(':imag', $contenidoArchivo);
        $stmt->bindParam(':comname', $name);
        $stmt->bindParam(':datebirth', $fecha_nacimiento);
        $stmt->bindParam(':sex', $sexo);
    
        if($stmt->execute()){
            $_SESSION['usuario'] = $email;
            header("Location: ../main.php");
            exit(); 
        } else {
            header("Location: ../signUp.php?error=Error%20en%20la%20creacion%20del%20usuario.");
            exit();
        }
    } catch(PDOException $e) {
        echo "Error en la base de datos: " . $e->getMessage();
        exit();
    }
}

?>