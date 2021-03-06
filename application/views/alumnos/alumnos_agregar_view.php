  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $breadcrumb; ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
    	<?php echo form_open('alumnos/agregar_s'); ?>
          <div class="box-body">
          	<div class="row">
          		<div class="col-md-12">
          			<div class="row">
          				<?php if($this->session->flashdata('agregar_alumno')): ?>
				            <div class="col-md-12">
				              <div class="alert alert-success alert-dismissible">
				                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				                  <h4><i class="icon fa fa-check"></i> Correcto!</h4>
				                  <?php echo $this->session->flashdata('agregar_alumno') ?>
				                </div>
				            </div>
				          <?php endif; ?>

          				<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('nombre')) ? 'has-error' : ''; ?>">
				              <?php echo form_label('Nombre:'); ?>
				              <?php echo form_input('nombre', set_value('nombre'), array('class'=>'form-control')); ?>
				              <?php echo form_error('nombre', '<span class="help-block">', '</span>'); ?>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('apellidoPa')) ? 'has-error' : ''; ?>">
			                  <?php echo form_label('Apellido Paterno:'); ?>
			                  <?php echo form_input('apellidoPa', set_value('apellidoPa'), array('class'=>'form-control')); ?>
				              <?php echo form_error('apellidoPa', '<span class="help-block">', '</span>'); ?>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('apellidoMa')) ? 'has-error' : ''; ?>">
				              <?php echo form_label('Apellido Materno:'); ?>
			                <?php echo form_input('apellidoMa', set_value('apellidoMa'), array('class'=>'form-control')); ?>
			                <?php echo form_error('apellidoMa', '<span class="help-block">', '</span>'); ?>
				            </div>
		          		</div>
		          		
			            <div class="col-md-6">
			            	<div class="form-group <?php echo (form_error('calle')) ? 'has-error' : ''; ?>">
				              <?php echo form_label('Calle:'); ?>
			                <?php echo form_input('calle', set_value('calle'), array('class'=>'form-control')); ?>
			                <?php echo form_error('calle', '<span class="help-block">', '</span>'); ?>
				            </div>
			            </div>

			            <div class="col-md-3">
			            	<div class="form-group <?php echo (form_error('numeroInt')) ? 'has-error' : ''; ?>">
			                <?php echo form_label('Int.:'); ?>
			                <?php echo form_input('numeroInt', set_value('numeroInt'), array('class'=>'form-control')); ?>
			                <?php echo form_error('numeroInt', '<span class="help-block">', '</span>'); ?>
				            </div>
			            </div>

			            <div class="col-md-3">
			            	<div class="form-group <?php echo (form_error('numeroExt')) ? 'has-error' : ''; ?>">
			                <?php echo form_label('Ext.:'); ?>
			                <?php echo form_input('numeroExt', set_value('numeroExt'), array('class'=>'form-control')); ?>
			                <?php echo form_error('numeroExt', '<span class="help-block">', '</span>'); ?>
				            </div>
			            </div>

		          		<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('municipio')) ? 'has-error' : ''; ?>">
			                <?php echo form_label('Municipio:'); ?>
			                <?php echo form_dropdown('municipio', $municipios, set_value('municipio'), array('class' => 'form-control')); ?>
			                <?php echo form_error('municipio', '<span class="help-block">', '</span>'); ?>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('colonia')) ? 'has-error' : ''; ?>">
			                <?php echo form_label('Colonia:'); ?>
			                <?php echo form_dropdown('colonia', $colonias, set_value('colonia'), array('class' => 'form-control')); ?>
			                <?php echo form_error('colonia', '<span class="help-block">', '</span>'); ?>
				            </div>
		          		</div>

		          		<div class="col-md-4">
		          			<div class="form-group <?php echo (form_error('grado')) ? 'has-error' : ''; ?>">
			                <?php echo form_label("Grado:"); ?>
			                <?php echo form_dropdown('grado', $grados, set_value('grado'), array('class' => 'form-control')); ?>
			                <?php echo '<span class="help-block">' . form_error('grado') . '</span>'; ?>
				            </div>
		          		</div>

		          		<div class="col-md-4">
		          			<div class="form-group <?php echo (form_error('atencion')) ? 'has-error' : ''; ?>">
			                <?php echo form_label("Grado de Atención:"); ?>
			                <?php echo form_dropdown('atencion', $gradosAtencion, set_value('atencion'), array('class' => 'form-control')); ?>
			                <?php echo '<span class="help-block">' . form_error('atencion') . '</span>'; ?>
			              </div>
		          		</div>

		          		<div class="col-md-4">
		          			<div class="form-group <?php echo (form_error('grupo')) ? 'has-error' : ''; ?>">
			                <?php echo form_label('Grupo:'); ?>
			                <?php echo form_dropdown('grupo', $grupos, set_value('grupo'), array('class' => 'form-control')); ?>
			                <?php echo form_error('grupo', '<span class="help-block">', '</span>'); ?>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('tutor')) ? 'has-error' : ''; ?>">
			                <?php echo form_label('Padre / Tutor:'); ?>
			                <?php echo form_dropdown('tutor', $padres, set_value('tutor'), array('class' => 'form-control')); ?>
			                <?php echo form_error('tutor', '<span class="help-block">', '</span>'); ?>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('autorizado1')) ? 'has-error' : ''; ?>">
			                <?php echo form_label('Tercer autorizado 1:'); ?>
			                <?php echo form_dropdown('autorizado1', $padres, set_value('autorizado1'), array('class' => 'form-control')); ?>
			                <?php echo form_error('autorizado1', '<span class="help-block">', '</span>'); ?>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('autorizado2')) ? 'has-error' : ''; ?>">
				              <?php echo form_label('Tercer autorizado 2:'); ?>
			                <?php echo form_dropdown('autorizado2', $padres, set_value('autorizado2'), array('class' => 'form-control')); ?>
			                <?php echo form_error('autorizado2', '<span class="help-block">', '</span>'); ?>
				            </div>
		          		</div>
          			</div>	
          		</div>
          	</div>
            
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <?php echo form_submit('', 'Guardar alumno', array('class'=>'btn btn-primary')); ?>
            <?php echo anchor(site_url('alumnos'), 'Cancelar', array('class'=>'btn btn-danger')); ?>
          </div>
        <?php echo form_close(); ?>
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (left) -->
  </div>
  <!-- /.row -->