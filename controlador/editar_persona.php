<?php

if(!empty($_POST["btnactualizar"])){

    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha_nac"]) and !empty($_POST["correo"]) ){

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha_nac = $_POST["fecha_nac"];
        $correo = $_POST["correo"];

        $sql = $conn->query("UPDATE persona SET nombre='$nombre', apellido='$apellido', dni='$dni', fecha_nac='$fecha_nac', correo='$correo' WHERE id_persona=$id");

        if($sql==1){
            header("location:index.php");
        }else{
            echo "<div class='alert alert-danger' >Error al actualizar persona</div>";
        }
    }else{
        echo "<div class='alert alert-warning' >Alguno de los campos está vacio</div>";
    }
}

?>