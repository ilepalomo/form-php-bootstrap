<?php

$personas = array(
    //indice 0
    array (
    // key  =>  valor
    'nombre' => $_GET['nombre'],
    'apellido' => $_GET['apellido'],
    'edad' => $_GET['edad'],
    'hobbie' => $_GET['hobbie'],
    'editor' => $_GET['editor'],
    'sistema' => $_GET['sistema']
    )
);

  /*  echo $personas[0]['nombre'];
    echo $personas[0]['apellido'];
    echo $personas[0]['edad'];
    echo $personas[0]['hobbie'];
    echo $personas[0]['editor'];
    echo $personas[0]['sistema'];*/
//Pendiente: Notice: Array to string conversion in 
/*foreach ($personas as $persona){

    echo $persona;
    echo "<br>";
    echo "<hr>";

}*/

//Pendiente validaciones
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Datos ingresados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<h3> Usted ingreso los siguientes datos: </h3>

<table class="table table-striped table-dark" >

  <tbody>
    <tr> 
      <th scope="row">Nombre:</th>
      <td><?php echo $personas[0]['nombre'] ?></td>
    </tr>
 
    <tr> 
      <th scope="row">Apellido</th>
      <td><?php echo $personas[0]['apellido'] ?></td>
    </tr>
    <tr> 
      <th scope="row">edad:</th>
      <td><?php echo $personas[0]['edad'] ?></td>
    </tr>
    <tr> 
      <th scope="row">Hobbie: </th>
      <td><?php echo $personas[0]['hobbie'] ?></td>
    </tr>
    <tr> 
      <th scope="row">Editor de codigo favorito: </th>
      <td><?php echo $personas[0]['editor'] ?></td>
    </tr>
    <tr> 
      <th scope="row">Sistema operativo</th>
      <td><?php echo $personas[0]['sistema'] ?></td>
    </tr>
  </tbody>
</table>
</body>
</html>
