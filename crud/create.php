<?php
    include ("conexion.php");
    if (isset($_POST['send'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $insert = "INSERT INTO datos (id,nombre,dirrecion,telefono)
        VALUES ('$id','$name','$address','$phone')";
    

    //Warning: mysqli_query() expects parameter 1 to be mysqli, object given in C:\xampp\htdocs\crud\index.php on line 82
    //Nos da este errorporque no es mysql sino postgres
    //descargamos mysql?
        //No bro toca cambiar los metodos 




        $sentencia = $conn->prepare($insert);
        $resultado = $sentencia->execute(); # Pasar en el mismo orden de los ?
        #execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
        #Con eso podemos evaluar

        if ($resultado === true) {
            # Redireccionar a la lista
            header('Location:index.php');
        } else {
            echo "Algo salió mal. Por favor verifica que la tabla exista";
        }


    }
?>