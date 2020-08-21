<?php  
    session_start(); #Inicia una secion o reanuda una exixtente
    $servername = "localhost";   #Localhost o IP
    $username = "postgres";          #Usuario de la dB
    $password = "a";   #Contraseña de la dB
    $database = "crud";       #Nombre de la db
    $port = "5432";              #puerto por el que se conecta la dB

    //vamos a conectarnos a postgres mysqli_connect (esto espara mysql)
    try {
        $conn = new PDO("pgsql:host=$servername;port=$port;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo"Conectsdo";
    } catch(PDOException $e) {
        echo "Ocurrió un error con la base de datos: " . $e->getMessage();
    }
?>