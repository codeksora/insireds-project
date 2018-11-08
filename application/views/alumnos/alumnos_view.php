<div class="row">
	<div class="col-xs-12">
	  <div class="box">
	    <div class="box-header">
	      <a href="<?php echo site_url('alumnos/agregar'); ?>" class="btn btn-primary">Agregar alumno</a>
	    </div>
	    <!-- /.box-header -->
	    <div class="box-body">
	      <table id="datatable_1" class="table table-bordered table-hover">
	        <thead>
	        <tr>
	          <th>#</th>
	          <th>Nombre</th>
	          <th>Apellido Paterno</th>
	          <th>Apellido Materno</th>
	          <th>Acción</th>
	        </tr>
	        </thead>
	        <tbody>
	        	<?php foreach($alumnos as $alumno): ?>
	        		<tr>
			        	<td><?php echo $alumno->id; ?></td>
			        	<td><?php echo $alumno->nombre; ?></td>
			        	<td><?php echo $alumno->apellidoPa; ?></td>
			        	<td><?php echo $alumno->apellidoMa; ?></td>
			        	<td>
			        		<a href="<?php echo site_url('alumnos/' . $alumno->id . '/editar'); ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
			        		<a href="<?php echo site_url('alumnos/' . $alumno->id . '/eliminar'); ?>" class="btn btn-danger btn-xs"><i class="fa fa-close"></i></a>
			        	</td>
			        </tr>
		        <?php endforeach; ?>
	        </tbody>
	        <tfoot>
	        <tr>
	          <th>#</th>
	          <th>Nombre</th>
	          <th>Apellido Paterno</th>
	          <th>Apellido Materno</th>
	          <th>Acción</th>
	        </tr>
	        </tfoot>
	      </table>
	    </div>
	    <!-- /.box-body -->
	  </div>
	  <!-- /.box -->
	</div>
    <!-- /.col -->
</div>
<!-- /.row -->