<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Reporte IN-SIREDS</title>
    <style>
    body {
    	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		  
    }
    table, tr, td, th {
    	border: 1px solid red;

    }
	table {
		margin-top: 20px;
		border-collapse: collapse;
	    width: 100%;
	}
	table th {
		padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #4CAF50;
	  color: white;
	}
	table th, table td {
		border: 1px solid #ddd;
  		padding: 8px;
	}
	table tr:nth-child(even){background-color: #f2f2f2;}
	h1 {
		text-align: center;
	}
    </style>
  </head>
  <body>
    <h1>Reporte completo</h1>

    <h3>Mes: <?php echo $mes; ?> - Año: <?php echo $anio; ?></h3>

	<table>
        <thead>
        <tr>
          <th>#</th>
          <th>Alumno</th>
          <th>Padre / Tutor</th>
          <th>Docente</th>
          <th>Fecha</th>
          <th>Hora</th>
        </tr>
        </thead>
        <tbody>
        	<?php foreach($salidas as $key => $salida): ?>
        		<tr>
		        	<td><?php echo ++$key; ?></td>
		        	<td><?php echo $salida->alumno_nombre . ' ' . $salida->alumno_apellidoPa . ' ' . $salida->alumno_apellidoMa; ?></td>
		        	<td><?php echo $salida->padre_nombre . ' ' . $salida->padre_apellidoPa . ' ' . $salida->padre_apellidoMa; ?></td>
		        	<td><?php echo $salida->docente_nombre . ' ' . $salida->docente_apellidoPa . ' ' . $salida->docente_apellidoMa; ?></td>
		        	<td><?php echo $salida->fecha; ?></td>
		        	<td><?php echo $salida->hora; ?></td>
		        </tr>
	        <?php endforeach; ?>
        </tbody>
      </table>
  </body>
</html>