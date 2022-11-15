<?php

    include "Config/Conexion.php";

    $idUser = $_REQUEST['idUser'];

    $sql = "DELETE FROM `user` WHERE idUser = $idUser";


    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header("Location: Index.php");
    }else {
        echo "No se elimino el dato";
    }