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
	      	<?php if($this->session->flashdata('salida_success')): ?>
                <div class="col-md-12">
                  <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Correcto!</h4>
                      <?php echo $this->session->flashdata('salida_success'); ?>
                    </div>
                </div>
              <?php endif; ?>
	      	<?php if($this->session->flashdata('salida_error')): ?>
                <div class="col-md-12">
                  <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-warning"></i> Error!</h4>
                      <?php echo $this->session->flashdata('salida_error'); ?>
                    </div>
                </div>
              <?php endif; ?>
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