<div class="row">
	<div class="col-xs-12">
	  <div class="box">
	    <div class="box-header with-border">
	    	<h3 class="box-title">Registrar una salida</h3>
	    </div>
	    <!-- /.box-header -->
	    <?php echo form_open('salidas/search'); ?>
	    <div class="box-body">
	      <div class="row">
	      	<div class="col-md-12">
      			<div class="form-group <?php echo (form_error('ine')) ? 'has-error' : ''; ?>">
	              <?php echo form_label('Ingresar INE:'); ?>
	              <?php echo form_input('ine', set_value('ine'), array('class'=>'form-control')); ?>
	              <?php echo form_error('ine', '<span class="help-block">', '</span>'); ?>
	            </div>
      		</div>
	      </div>
	    </div>
	    <!-- /.box-body -->

	    <div class="box-footer">
            <?php echo form_submit('', 'Realizar búsqueda', array('class'=>'btn btn-danger')); ?>
          </div>
        <?php echo form_close(); ?>
	  </div>
	  <!-- /.box -->
	</div>
    <!-- /.col -->
</div>
<!-- /.row -->

<div class="row">
	<div class="col-md-6">
	  <div class="box">
	    <div class="box-header with-border">
	    	<h3 class="box-title">Alumno</h3>
	    </div>
	    <!-- /.box-header -->
	    <?php echo form_open('salidas/registro', '', array('alumno_id'=>$alumno->id, 'padre_id'=>$padre->id, 'usuario_id'=>$this->session->userdata('usuario_id'))); ?>
	    <div class="box-body">
	      <div class="row">
	      	<div class="col-md-12">
	      		<div class="row">
	      			<div class="col-md-12 text-center">
	      				<img class="img-thumbnail" src="<?php echo base_url('uploads/' . $alumno->foto_img); ?>" alt="" width="150" height="150"><br><br>
	      			</div>
	      		</div>

	      		<div class="row">
	      			<div class="col-md-12">
	      				<div class="form-group">
	              		<?php echo form_label('Nombre completo:'); ?>
		              	<?php echo form_input('nombre', set_value('nombre', $alumno->nombre . ' ' . $alumno->apellidoPa . ' ' . $alumno->apellidoMa), array('class'=>'form-control', 'disabled'=>'')); ?>
		           		</div>
	      			</div>
	      		</div>
	      		
      			<div class="row">
	      			<div class="col-md-12">
	      				<div class="form-group">
	              		<?php echo form_label('Dirección:'); ?>
		              	<?php echo form_input('direccion', set_value('direccion', $alumno->direccion), array('class'=>'form-control', 'disabled'=>'')); ?>
		           		</div>
	      			</div>
	      		</div>

	      		<div class="row">
	      			<div class="col-md-12">
	      				<div class="form-group">
	              		<?php echo form_label('Grado:'); ?>
		              	<?php echo form_input('grado', set_value('grado', $alumno->grado), array('class'=>'form-control', 'disabled'=>'')); ?>
		           		</div>
	      			</div>
	      		</div>

	      		<div class="row">
	      			<div class="col-md-12">
	      				<div class="form-group">
	              		<?php echo form_label('Grupo:'); ?>
		              	<?php echo form_input('grupo', set_value('grupo', $alumno->grupo), array('class'=>'form-control', 'disabled'=>'')); ?>
		           		</div>
	      			</div>
	      		</div>
      		</div>
	      </div>
	    </div>
	    <!-- /.box-body -->

	    <div class="box-footer">
            <?php echo form_submit('', 'Registrar salida del alumno', array('class'=>'btn btn-primary')); ?>
          </div>
        <?php echo form_close(); ?>
	  </div>
	  <!-- /.box -->
	</div>
    <!-- /.col -->

    <div class="col-md-6">
	  <div class="box">
	    <div class="box-header with-border">
	    	<h3 class="box-title">Padre</h3>
	    </div>
	    <!-- /.box-header -->
	    <div class="box-body">
	      <div class="row">
      		<div class="col-md-12">
	      		<div class="row">
	      			<div class="col-md-12 text-center">
	      				<img class="img-thumbnail" src="<?php echo base_url('uploads/' . $padre->foto_img); ?>" alt="" width="150" height="150"><br><br>
	      			</div>
	      		</div>

	      		<div class="row">
	      			<div class="col-md-12">
	      				<div class="form-group">
	              		<?php echo form_label('Nombre completo:'); ?>
		              	<?php echo form_input('nombre', set_value('nombre', $padre->nombre . ' ' . $padre->apellidoPa . ' ' . $padre->apellidoMa), array('class'=>'form-control', 'disabled'=>'')); ?>
		           		</div>
	      			</div>
	      		</div>
	      		
	      		<div class="row">
	      			<div class="col-md-12">
	      				<div class="form-group">
	              		<?php echo form_label('Dirección:'); ?>
		              	<?php echo form_input('nombre', set_value('nombre', $padre->nombre), array('class'=>'form-control', 'disabled'=>'')); ?>
		           		</div>
	      			</div>
	      		</div>

      			<div class="row">
	      			<div class="col-md-12">
	      				<div class="form-group">
	              		<?php echo form_label('Teléfono:'); ?>
		              	<?php echo form_input('nombre', set_value('nombre', $padre->telefono), array('class'=>'form-control', 'disabled'=>'')); ?>
		           		</div>
	      			</div>
	      		</div>

	      		<div class="row">
	      			<div class="col-md-12">
	      				<div class="form-group">
	              		<?php echo form_label('INE:'); ?>
		              	<?php echo form_input('nombre', set_value('nombre', $padre->ine), array('class'=>'form-control', 'disabled'=>'')); ?>
		           		</div>
	      			</div>
	      		</div>

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