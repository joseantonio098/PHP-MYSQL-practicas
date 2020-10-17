<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
      <input class="bg-dark text-white w-75 p-2" type="text" name="caja_busqueda" id="caja_busqueda" placeholder="Search" aria-label="Search">
      <input type="submit" name="submit" class="btn btn-success" value="Enviar">
      <a href="buscador.php" class="btn btn-danger"> Reiniciar </a>
    </form>

    <?php  

      if(isset($_POST['submit'])){
        require('conexion.php');

        $conexion = conectar();
        $nombre_ingresado = $_POST['caja_busqueda'];

        $consulta = $conexion->prepare('SELECT Cod_producto, Nombre, Marca, Modelo FROM productos WHERE Nombre LIKE "%":nombre"%" OR  Marca LIKE "%":marca"%" OR Modelo LIKE "%":modelo"%"'); // ---> Establecemos la consulta
        $consulta->execute(array(':nombre'=>$nombre_ingresado, ':marca'=>$nombre_ingresado, ':modelo'=>$nombre_ingresado)); // ---> Ejecutamos la consulta

        $datos = $consulta->fetchAll(); // ---> fetchAll( devuelve todo los "registros" );

      }else{
        require('conexion.php');
        $conexion = conectar();
        $consulta = $conexion->prepare('SELECT Cod_producto, Nombre, Marca, Modelo FROM productos'); // ---> Establecemos la consulta
        $consulta->execute(); // ---> Ejecutamos la consulta

        $datos = $consulta->fetchAll(); // ---> fetchAll( devuelve todo los "registros" );
      }

    ?>


    <div class="table-responsive">
        <table class="table table-striped table-bordered table-sm">
          <thead>
            <tr>
              <th>Cod_producto</th>
              <th>Nombre</th>
              <th>Marca</th>
              <th>Modelo</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($datos as $dato) :?>  
              <tr>
                <th><?php echo $dato['Cod_producto'];  ?></th>
                <th><?php echo $dato['Nombre'];  ?></th>
                <th><?php echo $dato['Marca'];  ?></th>
                <th><?php echo $dato['Modelo'];  ?></th>
              </tr>  
            <?php endforeach; ?>
          </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>

