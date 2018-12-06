<div class="row">
	<div class="col-xs-12">
	  <div class="box">
	    <div class="box-header with-border">
	    	
	    	<h3 class="box-title">Lista de alumnos</h3>
	      
	    </div>
	    <!-- /.box-header -->
	    <div class="box-body">
	    	<div class="row">
	    		<?php if($this->session->flashdata('eliminar_alumno_success')): ?>
	            <div class="col-md-12">
	              <div class="alert alert-success alert-dismissible">
	                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                  <h4><i class="icon fa fa-check"></i> Correcto!</h4>
	                  <?php echo $this->session->flashdata('eliminar_alumno_success') ?>
	                </div>
	            </div>
	          <?php endif; ?>
	    	</div>
	    	<a href="<?php echo site_url('alumnos/agregar'); ?>" class="btn btn-sm btn-primary">Agregar alumno</a>
	    	<br><br>
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