<?php 

/* Realice una aplicación que calcule el salario neto a pagar los empleados
de una Empresa. Dicha empresa realiza los siguientes descuentos.

ISSS (9%)
AFP (7%)
Renta (10%) - Se aplica, si el salario base es mayor a $ 472.00.

La aplicación debe pedir nombre, apellido y el salario base del empleado, mostrar
el salario neto y los descuentos respectivos. */

$nombre = '';
$apellido = '';
$salario_neto = 0;
$isss = 0;
$afp = 0;
$renta = 0;

if (isset($_POST['enviar'])) {

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $salario=$_POST['salario'];

    $isss = $salario * 0.09;
    $afp = $salario * 0.07;
if ($salario>472) {
    $renta = $salario * 0.1;
}
    $salario_neto = $salario - ($isss + $afp + $renta);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Calcular salario neto</title>
</head>
<body>
    <header class="container">
        <h1>CALCULAR EL SALARIO NETO DE LOS EMPLEADOS DE UNA EMPRESA</h1>
    </header>
    <main class="container">
    <form class="row g-3" method="POST" action="evaluacion1.php">
  <div class="col-md-6">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba el nombre del empleado" required>
  </div>

  <div class="col-md-6">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escriba el apellido del empleado">
  </div>

  <div class="col-md-2">
    <label for="salario" class="form-label">Salario base</label>
    <input type="text" class="form-control" id="salario" name="salario" placeholder="0.00">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="enviar">Calcular</button>
  </div>
  </form>

  <div class="alert alert-primary" role="alert">
  <strong>
    Nombre del empleado:
  </strong>
  <?php echo $nombre; ?>
  <br>
  <strong>
    Apellido del empleado:
  </strong>
  <?php echo $apellido; ?>
  <br>
  <strong>
    Salario base: $ 
  </strong>
  <?php echo $salario;?>
  <br>
  <strong>
    Salario neto a pagar: $ 
  </strong>
  <?php echo $salario_neto;?>
  <br>
  <hr>
  <strong>
    ISSS: $ 
  </strong>
  <?php echo $isss;?>
  <br>
  <strong>
    AFP: $ 
  </strong>
  <?php echo $afp;?>
  <br>
  
  <strong>
  Renta: $ 
  </strong>
  <?php echo $renta; ?>

</div>
    </main>
</body>
</html>