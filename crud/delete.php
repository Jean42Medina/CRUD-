<?php
    include ("conexion.php");
    if (isset($_GET['id'])){    
        $id = $_GET['id'];
        
        $delete = "DELETE FROM datos WHERE id = $id";




        $sentencia = $conn->prepare("$delete");
        $resultado = $sentencia->execute();
        if ($resultado === true) {
            $_SESSION['message'] = 'Registro borrado exitosamente';
            $_SESSION['message_type'] = 'danger'; # Funcion de bootstrap
            header('Location:index.php'); # Redireccionar el archivo
        } else {
            echo "Algo salió mal";
        }

    }
?>
