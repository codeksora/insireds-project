<div class="row">
	<div class="col-xs-12">
	  <div class="box">
	    <div class="box-header with-border">
	    	
	    	<h3 class="box-title">Lista de padres</h3>
	      
	    </div>
	    <!-- /.box-header -->
	    <div class="box-body">
	    	<div class="row">
	    		<?php if($this->session->flashdata('eliminar_padre_success')): ?>
	            <div class="col-md-12">
	              <div class="alert alert-success alert-dismissible">
	                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                  <h4><i class="icon fa fa-check"></i> Correcto!</h4>
	                  <?php echo $this->session->flashdata('eliminar_padre_success') ?>
	                </div>
	            </div>
	          <?php endif; ?>
	    	</div>
	    	<a href="<?php echo site_url('padres/agregar'); ?>" class="btn btn-sm btn-primary">Agregar padre</a>
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
	        	<?php foreach($padres as $padre): ?>
	        		<tr>
			        	<td><?php echo $padre->id; ?></td>
			        	<td><?php echo $padre->nombre; ?></td>
			        	<td><?php echo $padre->apellidoPa; ?></td>
			        	<td><?php echo $padre->apellidoMa; ?></td>
			        	<td>
			        		<a href="<?php echo site_url('padres/' . $padre->id . '/editar'); ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
			        		<a href="<?php echo site_url('padres/' . $padre->id . '/eliminar'); ?>" class="btn btn-danger btn-xs"><i class="fa fa-close"></i></a>
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