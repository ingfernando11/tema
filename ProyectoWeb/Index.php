<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

  </head>

  <body>

  <div class="container"> 

    <br>
    <center>
        <h1>Historial de Registro de Usuarios<h1>
    </center>
    <br>

    <div class="container">

    <hr>
            <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre del Usuario</th>
              <th scope="col">Foto del Usuario</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody>

              <?php
                  include "Config/Conexion.php";

                  $Sql = "SELECT * FROM `user`";
                  
                  $resultado = $conexion->query($Sql);

                  while ($Fila = $resultado->fetch_assoc()) { ?>

                         <tr>
                            <th scope="row"><?php echo $Fila['idUser']?></th>
                            <td><?php echo $Fila['name']?></td>
                            <td><img style="width: 80px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['photo'])?>" alt=""></td>
                            <td>
                                <a href="Eliminar_Usuario.php?idUser=<?php echo $Fila["idUser"]?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                </tbody>
            <?php } ?>
            </table>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>