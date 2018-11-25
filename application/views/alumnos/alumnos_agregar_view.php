  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Formulario para agregar alumno</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="<?php echo site_url('alumnos/agregar_s'); ?>">
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
				              <label>Nombre:</label>
				              <input type="text" class="form-control" name="nombre" value="<?php echo set_value('nombre'); ?>">
				              <?php echo '<span class="help-block">' . form_error('nombre') . '</span>'; ?>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('apellidoPa')) ? 'has-error' : ''; ?>">
				              <label>Apellido paterno:</label>
				              <input type="text" class="form-control" name="apellidoPa" value="<?php echo set_value('apellidoPa'); ?>">
				              <?php echo '<span class="help-block">' . form_error('apellidoPa') . '</span>'; ?>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('apellidoMa')) ? 'has-error' : ''; ?>">
				              <label>Apellido materno:</label>
				              <input type="text" class="form-control" name="apellidoMa" value="<?php echo set_value('apellidoMa'); ?>">
				              <?php echo '<span class="help-block">' . form_error('apellidoMa') . '</span>'; ?>
				            </div>
		          		</div>
		          		
			            <div class="col-md-6">
			            	<div class="form-group <?php echo (form_error('calle')) ? 'has-error' : ''; ?>">
				              <label>Calle:</label>
				              <input type="text" class="form-control" name="calle" value="<?php echo set_value('calle'); ?>">
				              <?php echo '<span class="help-block">' . form_error('calle') . '</span>'; ?>
				            </div>
			            </div>

			            <div class="col-md-3">
			            	<div class="form-group <?php echo (form_error('numeroInt')) ? 'has-error' : ''; ?>">
				              <label>Int.:</label>
				              <input type="text" class="form-control" name="numeroInt" value="<?php echo set_value('numeroInt'); ?>">
				              <?php echo '<span class="help-block">' . form_error('numeroInt') . '</span>'; ?>
				            </div>
			            </div>

			            <div class="col-md-3">
			            	<div class="form-group <?php echo (form_error('numeroExt')) ? 'has-error' : ''; ?>">
				              <label>Ext.:</label>
				              <input type="text" class="form-control" name="numeroExt" value="<?php echo set_value('numeroExt'); ?>">
				              <?php echo '<span class="help-block">' . form_error('numeroExt') . '</span>'; ?>
				            </div>
			            </div>

		          		<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('municipio')) ? 'has-error' : ''; ?>">
				              <label>Municipio:</label>
				              <select class="form-control" name="municipio">
				              	<option value="">Seleccionar</option>
				              	<?php foreach ($municipios as $municipio): ?>
				              		<option value="<?php echo $municipio->id; ?>" <?php echo (set_value('municipio') == $municipio->id) ? 'selected' : ''; ?>><?php echo $municipio->nombre; ?></option>
				              	<?php endforeach; ?>
				              </select>
				              <?php echo '<span class="help-block">' . form_error('municipio') . '</span>'; ?>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('colonia')) ? 'has-error' : ''; ?>">
				              <label>Colonia:</label>
				              <select class="form-control" name="colonia">
				              	<option value="">Seleccionar</option>
				              	<?php foreach ($colonias as $colonia): ?>
				              		<option value="<?php echo $colonia->id; ?>" <?php echo (set_value('colonia') == $colonia->id) ? 'selected' : ''; ?>><?php echo $colonia->nombre; ?></option>
				              	<?php endforeach; ?>
				              </select>
				              <?php echo '<span class="help-block">' . form_error('colonia') . '</span>'; ?>
				            </div>
		          		</div>

		          		<div class="col-md-4">
		          			<div class="form-group <?php echo (form_error('grado')) ? 'has-error' : ''; ?>">
				              <label>Grado:</label>
				              <select class="form-control" name="grado">
				              	<option value="">Seleccionar</option>
				              	<?php foreach ($grados as $grado): ?>
				              		<option value="<?php echo $grado->id; ?>" <?php echo (set_value('grado') == $grado->id) ? 'selected' : ''; ?>><?php echo $grado->grado; ?></option>
				              	<?php endforeach; ?>
				              </select>
				              <?php echo '<span class="help-block">' . form_error('grado') . '</span>'; ?>
				            </div>
		          		</div>

		          		<div class="col-md-4">
		          			<div class="form-group <?php echo (form_error('atencion')) ? 'has-error' : ''; ?>">
				              <!-- <label>Grado de Atención:</label> -->
				              <!-- select class="form-control" name="atencion">
				              	<option value="">Seleccionar</option>
				              	<?php foreach ($gradosAtencion as $gradoAtencion): ?>
				              		<option value="<?php echo $gradoAtencion->id; ?>" <?php echo (set_value('atencion') == $gradoAtencion->id) ? 'selected' : ''; ?>><?php echo $gradoAtencion->gradoAt; ?></option>
				              	<?php endforeach; ?>
				              </select> -->
				              <?php
			                    echo form_label("Grado de Atención:");
			                    $att = array('class' => 'form-control');
			                    echo form_dropdown('atencion', $gradosAtencion, set_value('atencion'), $att);
			                  ?>
				              <?php echo '<span class="help-block">' . form_error('atencion') . '</span>'; ?>
				            </div>
		          		</div>

		          		<div class="col-md-4">
		          			<div class="form-group <?php echo (form_error('grupo')) ? 'has-error' : ''; ?>">
				              <label>Grupo:</label>
				              <select class="form-control" name="grupo">
				              	<option value="">Seleccionar</option>
				              	<?php foreach ($grupos as $grupo): ?>
				              		<option value="<?php echo $grupo->id; ?>" <?php echo (set_value('grupo') == $grupo->id) ? 'selected' : ''; ?>><?php echo $grupo->grupo; ?></option>
				              	<?php endforeach; ?>
				              </select>
				              <?php echo '<span class="help-block">' . form_error('grupo') . '</span>'; ?>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('tutor')) ? 'has-error' : ''; ?>">
				              <label>Padre / Tutor:</label>
				              <select class="form-control" name="tutor">
				              	<option value="">Seleccionar</option>
				              	<?php foreach ($padres as $padre): ?>
				              		<option value="<?php echo $padre->id; ?>" <?php echo (set_value('tutor') == $padre->id) ? 'selected' : ''; ?>><?php echo $padre->nombre . ' ' . $padre->apellidoPa . ' ' . $padre->apellidoMa; ?></option>
				              	<?php endforeach; ?>
				              </select>
				              <?php echo '<span class="help-block">' . form_error('tutor') . '</span>'; ?>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('autorizado1')) ? 'has-error' : ''; ?>">
				              <label>Tercer autorizado 1:</label>
				              <select class="form-control" name="autorizado1">
				              	<option value="">Seleccionar</option>
				              	<?php foreach ($padres as $padre): ?>
				              		<option value="<?php echo $padre->id; ?>" <?php echo (set_value('autorizado1') == $padre->id) ? 'selected' : ''; ?>><?php echo $padre->nombre . ' ' . $padre->apellidoPa . ' ' . $padre->apellidoMa; ?></option>
				              	<?php endforeach; ?>
				              </select>
				              <?php echo '<span class="help-block">' . form_error('autorizado1') . '</span>'; ?>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group <?php echo (form_error('autorizado2')) ? 'has-error' : ''; ?>">
				              <label>Tercer autorizado 2:</label>
				              <select class="form-control" name="autorizado2">
				              	<option value="">Seleccionar</option>
				              	<?php foreach ($padres as $padre): ?>
				              		<option value="<?php echo $padre->id; ?>" <?php echo (set_value('autorizado2') == $padre->id) ? 'selected' : ''; ?>><?php echo $padre->nombre . ' ' . $padre->apellidoPa . ' ' . $padre->apellidoMa; ?></option>
				              	<?php endforeach; ?>
				              </select>
				              <?php echo '<span class="help-block">' . form_error('autorizado2') . '</span>'; ?>
				            </div>
		          		</div>
          			</div>	
          		</div>
          	</div>
            
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Guardar alumno</button>
            <a href="<?php echo site_url('alumnos'); ?>" class="btn btn-danger">Cancelar</a>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (left) -->
  </div>
  <!-- /.row -->