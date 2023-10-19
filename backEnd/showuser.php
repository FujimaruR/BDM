<?php
include('../BDM/backEnd/connection/cn_bd.php');

    try{
        if(isset($_SESSION['usuario'])){
            $email = $_SESSION['usuario'];
        } else {
            header("Location: ../login.php"); 
            exit();
        }
    
        $consulta = "SELECT * FROM tb_usuarios 
        WHERE email = :email";
    
        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $mime_type = 'image/png';
    
        $imagen_url = 'data:' . $mime_type . ';base64,' . base64_encode($usuario['img']);


        $consultat = "SELECT * FROM tb_ubiuser WHERE usuario_idUbi = :useridu";

        $stmtt = $conn->prepare($consultat);
        $stmtt->bindParam(':useridu', $usuario['id']);
        $stmtt->execute();
        $usuarioInfo = $stmtt->fetch(PDO::FETCH_ASSOC);

        $tipoUsuario = '';
        $tipoUsuarioId = urlencode($usuario['tuser']);

        if ($usuario['tuser'] == 1) {
            $tipoUsuario = 'Usuario regular';
        } elseif ($usuario['tuser'] == 2) {
            $tipoUsuario = 'Comprador';
        } else {
            $tipoUsuario = 'Administrador';
        }
    } catch(PDOException $e) {
        echo "Error en la base de datos: " . $e->getMessage();
        exit();
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = trim($_POST['editnom']);
        $direc = trim($_POST['direc']);

        try {
            if (isset($_FILES['editImg']) && $_FILES['editImg']['error'] === UPLOAD_ERR_OK) {
                $nombreArchivo = $_FILES['editImg']['name'];
                $rutaTempArchivo = $_FILES['editImg']['tmp_name'];

                $extensionesPermitidas = array("jpg", "jpeg", "png", "gif");

                $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
                if (!in_array(strtolower($extension), $extensionesPermitidas)) {
                    header("Location: ../profile.php?error=Archivo%20no%20permitido.");
                    exit();
                }

                $contenidoArchivo = file_get_contents($rutaTempArchivo);
            } else {
                header("Location: ../profile.php?error=Error%20al%20subir%20el%20archivo.");
                exit();
            }


            $checkQuery = "SELECT COUNT(*) FROM tb_ubiuser WHERE usuario_idUbi = :useridinfo";
            $stmtCheck = $conn->prepare($checkQuery);
            $stmtCheck->bindParam(':useridinfo', $usuario['id']);
            $stmtCheck->execute();
            $rowCount = $stmtCheck->fetchColumn();

            if ($rowCount > 0) {
                $updateQuery = "UPDATE tb_ubiuser SET ubication = :direccion WHERE usuario_idUbi = :useridin";
                $stmtUpdate = $conn->prepare($updateQuery);
                $stmtUpdate->bindParam(':direccion', $direc);
                $stmtUpdate->bindParam(':useridin', $usuario['id']);
                $stmtUpdate->execute();


                $updateQueryD = "UPDATE tb_usuarios SET complete_name = :namecom, img = :imgupd WHERE id = :uridin";
                $stmtUpdateD = $conn->prepare($updateQueryD);
                $stmtUpdateD->bindParam(':namecom', $name);
                $stmtUpdateD->bindParam(':imgupd', $contenidoArchivo);
                $stmtUpdateD->bindParam(':uridin', $usuario['id']);
                $stmtUpdateD->execute();

                header("Location: ../profile.php?userType=$tipoUsuarioId");
                exit(); 
            } else {
                $insertQuery = "INSERT INTO tb_ubiuser (ubication, usuario_idUbi) VALUES (:direccion, :useridinfor)";
                $stmtInsert = $conn->prepare($insertQuery);
                $stmtInsert->bindParam(':direccion', $direc);
                $stmtInsert->bindParam(':useridinfor', $usuario['id']);
                $stmtInsert->execute();

                $insertQueryD = "UPDATE tb_usuarios SET complete_name = :namecomp, img = :imgins WHERE id = :useridinforms";
                $stmtInsertd = $conn->prepare($insertQueryD);
                $stmtInsertd->bindParam(':namecomp', $name);
                $stmtInsertd->bindParam(':imgins', $contenidoArchivo);
                $stmtInsertd->bindParam(':useridinforms', $usuario['id']);
                $stmtInsertd->execute();

                header("Location: ../profile.php?userType=$tipoUsuarioId");
                exit(); 
            }
        } catch (PDOException $e) {
            echo "Error en la base de datos: " . $e->getMessage();
            exit();
        }
    }
?>