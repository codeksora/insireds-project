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
    	<?php echo form_open('padres/agregar_s'); ?>
          <div class="box-body">
          	<div class="row">
          		<div class="col-md-12">
          			<div class="row">
          				<?php if($this->session->flashdata('agregar_padre')): ?>
				            <div class="col-md-12">
				              <div class="alert alert-success alert-dismissible">
				                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				                  <h4><i class="icon fa fa-check"></i> Correcto!</h4>
				                  <?php echo $this->session->flashdata('agregar_padre') ?>
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

		          		<div class="col-md-6">
		          			<div class="form-group <?php echo (form_error('municipio')) ? 'has-error' : ''; ?>">
			                <?php echo form_label('Municipio:'); ?>
			                <?php echo form_dropdown('municipio', $municipios, set_value('municipio'), array('class' => 'form-control')); ?>
			                <?php echo form_error('municipio', '<span class="help-block">', '</span>'); ?>
				            </div>
		          		</div>

		          		<div class="col-md-6">
		          			<div class="form-group <?php echo (form_error('colonia')) ? 'has-error' : ''; ?>">
			                <?php echo form_label('Colonia:'); ?>
			                <?php echo form_dropdown('colonia', $colonias, set_value('colonia'), array('class' => 'form-control')); ?>
			                <?php echo form_error('colonia', '<span class="help-block">', '</span>'); ?>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('telefono')) ? 'has-error' : ''; ?>">
				                <?php echo form_label('Telefóno:'); ?>
				                <?php echo form_input('telefono', set_value('telefono'), array('class'=>'form-control')); ?>
				                <?php echo form_error('telefono', '<span class="help-block">', '</span>'); ?>
				            </div>
		          		</div>

		          		<div class="col-md-6">
		          			<div class="form-group <?php echo (form_error('ine')) ? 'has-error' : ''; ?>">
				                <?php echo form_label('INE:'); ?>
				                <?php echo form_input('ine', set_value('ine'), array('class'=>'form-control')); ?>
				                <?php echo form_error('ine', '<span class="help-block">', '</span>'); ?>
				            </div>
		          		</div>

		          		<div class="col-md-6">
		          			<div class="form-group <?php echo (form_error('parentesco')) ? 'has-error' : ''; ?>">
			                <?php echo form_label('Parentesco:'); ?>
			                <?php echo form_dropdown('parentesco', $parentescos, set_value('parentesco'), array('class' => 'form-control')); ?>
			                <?php echo form_error('parentesco', '<span class="help-block">', '</span>'); ?>
				            </div>
		          		</div>
          			</div>	
          		</div>
          	</div>
            
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <?php echo form_submit('', 'Guardar padre', array('class'=>'btn btn-primary')); ?>
            <?php echo anchor(site_url('padres'), 'Cancelar', array('class'=>'btn btn-danger')); ?>
          </div>
        <?php echo form_close(); ?>
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (left) -->
  </div>
  <!-- /.row -->