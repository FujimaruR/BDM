<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include('../BDM/backEnd/connection/cn_bd.php');

    $emaila = trim($_POST['formControlUserName']);
    $contrab = trim($_POST['formControlPassword']);
    $tuser = trim($_POST['formControlTypeUser']);

    try {
        $consulta = "SELECT email, contrasena, tuser FROM tb_usuarios WHERE email = :emailb";
        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':emailb', $emaila);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashed_password = $row['contrasena'];
            $db_tuser = $row['tuser'];

            if (password_verify($contrab, $hashed_password)  && $tuser == $db_tuser) {
                $_SESSION['usuario'] = $emaila;
                $_SESSION['tipo_usuario'] = $tuser;
                header("Location: ../main.php");
                exit(); 
            } else {
                header("Location: ../logIn.php?error=Usuario,%20contraseña%20o%20tipo%20de%20usuario%20incorrectos.");
                exit();
            }
        } else {
            header("Location: ../logIn.php?error=Usuario%20no%20encontrado.");
            exit();
        }
    } catch(PDOException $e) {
        echo "Error en la base de datos: " . $e->getMessage();
        exit();
    }
}
?>