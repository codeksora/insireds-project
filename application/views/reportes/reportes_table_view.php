<div class="row">
	<div class="col-xs-12">
	  <div class="box">
	    <div class="box-header with-border">
	    	<h3 class="box-title">Exportación en PDF</h3>
	    </div>
	    <!-- /.box-header -->
	    <?php echo form_open('reportes/search'); ?>
	    <div class="box-body">
	      <div class="row">
	      	<div class="col-md-4">
    			<div class="form-group <?php echo (form_error('tipo_reporte')) ? 'has-error' : ''; ?>">
		            <?php echo form_label("Tipo de reporte:"); ?>
		            <?php echo form_dropdown('tipo_reporte', $tipos_reporte, set_value('tipo_reporte'), array('class' => 'form-control')); ?>
		            <?php echo '<span class="help-block">' . form_error('tipo_reporte') . '</span>'; ?>
	            </div>
    		</div>

    		<div class="col-md-4">
    			<div class="form-group <?php echo (form_error('anio')) ? 'has-error' : ''; ?>">
		            <?php echo form_label("Año:"); ?>
		            <?php echo form_dropdown('anio', $anios, set_value('anio'), array('class' => 'form-control')); ?>
		            <?php echo '<span class="help-block">' . form_error('anio') . '</span>'; ?>
	            </div>
    		</div>

    		<div class="col-md-4">
    			<div class="form-group <?php echo (form_error('mes')) ? 'has-error' : ''; ?>">
		            <?php echo form_label("Mes:"); ?>
		            <?php echo form_dropdown('mes', $meses, set_value('mes'), array('class' => 'form-control')); ?>
		            <?php echo '<span class="help-block">' . form_error('mes') . '</span>'; ?>
	            </div>
    		</div>
	      </div>
	    </div>
	    <!-- /.box-body -->

	    <div class="box-footer">
	    	<?php echo form_submit('', 'Realizar búsqueda', array('class'=>'btn btn-danger')); ?>
            <?php echo form_submit('export_pdf', 'Exportar en PDF', array('class'=>'btn btn-primary')); ?>
          </div>
        <?php echo form_close(); ?>
	  </div>
	  <!-- /.box -->
	</div>
    <!-- /.col -->
</div>
<!-- /.row -->

<div class="row">
	<div class="col-xs-12">
	  <div class="box">
	    <div class="box-header with-border">
	    	<h3 class="box-title">Resultados</h3>
	    </div>
	    <!-- /.box-header -->
	    <div class="box-body">
	      <div class="row">
	      	<div class="col-md-12">
    			<table id="datatable_1" class="table table-bordered table-hover">
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
	      </div>
	    </div>
	    <!-- /.box-body -->
	  </div>
	  <!-- /.box -->
	</div>
    <!-- /.col -->
</div>
<!-- /.row -->