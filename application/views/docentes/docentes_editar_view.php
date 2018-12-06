  <div class="row">
    <!-- left column -->
    <div class="col-md-9">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Información personal</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php echo form_open('docentes/' . $docente->id . '/editar_s'); ?>
          <div class="box-body">
  			<div class="row">
				        <?php if($this->session->flashdata('editar_docente')): ?>
	                <div class="col-md-12">
	                  <div class="alert alert-success alert-dismissible">
	                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                      <h4><i class="icon fa fa-check"></i> Correcto!</h4>
	                      <?php echo $this->session->flashdata('editar_docente') ?>
	                    </div>
	                </div>
	              <?php endif; ?>

  				<div class="col-md-12">
          			<div class="form-group <?php echo (form_error('nombre')) ? 'has-error' : ''; ?>">
	                <?php echo form_label('Nombre:'); ?>
	            	  <?php echo form_input('nombre', set_value('nombre', $docente->nombre), array('class'=>'form-control')); ?>
	                <?php echo form_error('nombre', '<span class="help-block">', '</span>'); ?>
		            </div>
          		</div>

          		<div class="col-md-12">
        			<div class="form-group <?php echo (form_error('apellidoPa')) ? 'has-error' : ''; ?>">
	                <?php echo form_label('Apellido Paterno:'); ?>
	                <?php echo form_input('apellidoPa', set_value('apellidoPa', $docente->apellidoPa), array('class'=>'form-control')); ?>
		              <?php echo form_error('apellidoPa', '<span class="help-block">', '</span>'); ?>
		            </div>
        		</div>

        		<div class="col-md-12">
        			<div class="form-group <?php echo (form_error('apellidoMa')) ? 'has-error' : ''; ?>">
		              <?php echo form_label('Apellido Materno:'); ?>
	                <?php echo form_input('apellidoMa', set_value('apellidoMa', $docente->apellidoMa), array('class'=>'form-control')); ?>
	                <?php echo form_error('apellidoMa', '<span class="help-block">', '</span>'); ?>
		            </div>
        		</div>
          		
	            <div class="col-md-6">
            	<div class="form-group <?php echo (form_error('calle')) ? 'has-error' : ''; ?>">
	              <?php echo form_label('Calle:'); ?>
                <?php echo form_input('calle', set_value('calle', $docente->calle), array('class'=>'form-control')); ?>
                <?php echo form_error('calle', '<span class="help-block">', '</span>'); ?>
	            </div>
            </div>

            <div class="col-md-3">
            	<div class="form-group <?php echo (form_error('numeroInt')) ? 'has-error' : ''; ?>">
                <?php echo form_label('Int.:'); ?>
                <?php echo form_input('numeroInt', set_value('numeroInt', $docente->numeroInt), array('class'=>'form-control')); ?>
                <?php echo form_error('numeroInt', '<span class="help-block">', '</span>'); ?>
	            </div>
            </div>

            <div class="col-md-3">
            	<div class="form-group <?php echo (form_error('numeroExt')) ? 'has-error' : ''; ?>">
                <?php echo form_label('Ext.:'); ?>
                <?php echo form_input('numeroExt', set_value('numeroExt', $docente->numeroExt), array('class'=>'form-control')); ?>
                <?php echo form_error('numeroExt', '<span class="help-block">', '</span>'); ?>
	            </div>
            </div>

	        <div class="col-md-12">
    			<div class="form-group <?php echo (form_error('municipio')) ? 'has-error' : ''; ?>">
	            <?php echo form_label('Municipio:'); ?>
	            <?php echo form_dropdown('municipio', $municipios, set_value('municipio', $docente->municipio), array('class' => 'form-control')); ?>
	            <?php echo form_error('municipio', '<span class="help-block">', '</span>'); ?>
	            </div>
    		</div>

    		<div class="col-md-12">
    			<div class="form-group <?php echo (form_error('colonia')) ? 'has-error' : ''; ?>">
	            <?php echo form_label('Colonia:'); ?>
	            <?php echo form_dropdown('colonia', $colonias, set_value('colonia', $docente->colonia), array('class' => 'form-control')); ?>
	            <?php echo form_error('colonia', '<span class="help-block">', '</span>'); ?>
	            </div>
    		</div>

          	<div class="col-md-12">
            	<div class="form-group <?php echo (form_error('telefono')) ? 'has-error' : ''; ?>">
                <?php echo form_label('Teléfono:'); ?>
                <?php echo form_input('telefono', set_value('telefono', $docente->telefono), array('class'=>'form-control')); ?>
                <?php echo form_error('telefono', '<span class="help-block">', '</span>'); ?>
	            </div>
	        </div>

          	<div class="col-md-12">
    			<div class="form-group <?php echo (form_error('escuela')) ? 'has-error' : ''; ?>">
	            <?php echo form_label('Escuela:'); ?>
	            <?php echo form_dropdown('escuela', $escuelas, set_value('escuela', $docente->escuela), array('class' => 'form-control')); ?>
	            <?php echo form_error('escuela', '<span class="help-block">', '</span>'); ?>
	            </div>
    		</div>
          	</div>            
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <?php echo form_submit('', 'Guardar cambios', array('class'=>'btn btn-primary')); ?>
            <?php echo anchor(site_url('docentes'), 'Cancelar', array('class'=>'btn btn-danger')); ?>
          </div>
        <?php echo form_close(); ?>
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (left) -->

    <!-- right column -->
    <div class="col-md-3">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Foto</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
          <?php echo form_open_multipart('docentes/' . $docente->id . '/editar_photo_s', '', array('foto_id'=>$docente->foto_id)); ?>
          <div class="box-body">
      			<div class="row">
      				<?php if($this->session->flashdata('editar_foto_docente_success')): ?>
                <div class="col-md-12">
                  <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Correcto!</h4>
                      <?php echo $this->session->flashdata('editar_foto_docente_success'); ?>
                    </div>
                </div>
              <?php endif; ?>
              <?php if($this->session->flashdata('editar_foto_docente_error')): ?>
                <div class="col-md-12">
                  <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-warning"></i> Error!</h4>
                      <?php echo $this->session->flashdata('editar_foto_docente_error'); ?>
                    </div>
                </div>
              <?php endif; ?>

      				<div class="col-md-12">
      					<div class="form-group">
      						<img src="<?php echo base_url('uploads/' . $docente->foto_img); ?>" width="100%" class="img-thumbnail" alt="<?php echo $docente->foto_nombre; ?>">
      					</div>
      				</div>

      				<div class="col-md-12">
      					<div class="form-group">
                      <?php echo form_label('Imagen de perfíl:'); ?>
                      <?php echo form_upload('foto'); ?>
    		            </div>
      				</div>
          	</div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <?php echo form_submit('', 'Guardar foto', array('class'=>'btn btn-primary btn-block')); ?>
          </div>
        <?php echo form_close(); ?>
      </div>
      <!-- /.box -->

      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Cambiar contraseña</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
          <?php echo form_open_multipart('docentes/' . $docente->id . '/editar_contrasena_s', '', array('foto_id'=>$docente->foto_id)); ?>
          <div class="box-body">
            <div class="row">
              <?php if($this->session->flashdata('editar_contrasena_docente_success')): ?>
                <div class="col-md-12">
                  <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Correcto!</h4>
                      <?php echo $this->session->flashdata('editar_contrasena_docente_success'); ?>
                    </div>
                </div>
              <?php endif; ?>

              <div class="col-md-12">
                <div class="form-group <?php echo (form_error('nueva_contrasena')) ? 'has-error' : ''; ?>">
                  <?php echo form_label('Nueva contraseña:'); ?>
                  <?php echo form_password('nueva_contrasena', set_value('nueva_contrasena'), array('class'=>'form-control')); ?>
                  <?php echo form_error('nueva_contrasena', '<span class="help-block">', '</span>'); ?>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group <?php echo (form_error('repetir_contrasena')) ? 'has-error' : ''; ?>">
                  <?php echo form_label('Repetir nueva contraseña:'); ?>
                  <?php echo form_password('repetir_contrasena', set_value('repetir_contrasena'), array('class'=>'form-control')); ?>
                  <?php echo form_error('repetir_contrasena', '<span class="help-block">', '</span>'); ?>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <?php echo form_submit('', 'Cambiar contraseña', array('class'=>'btn btn-primary btn-block')); ?>
          </div>
        <?php echo form_close(); ?>
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (right) -->
  </div>
  <!-- /.row -->