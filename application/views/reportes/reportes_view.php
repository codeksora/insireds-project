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
            <?php echo form_submit('', 'Filtrar', array('class'=>'btn btn-danger')); ?>
          </div>
        <?php echo form_close(); ?>
	  </div>
	  <!-- /.box -->
	</div>
    <!-- /.col -->
</div>
<!-- /.row -->