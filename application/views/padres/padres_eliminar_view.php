  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">¿Desea eliminar a este padre?</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php echo form_open('padres/' . $padre->id . '/eliminar_s'); ?>
          <div class="box-body">
          	<div class="row">
          		<div class="col-md-3">          			
          			<div class="row">
          				<div class="col-md-12">
          					<div class="form-group">
                      <?php echo form_input('', set_value('', $padre->nombre . ' ' . $padre->apellidoPa . ' ' . $padre->apellidoMa), array('class'=>'form-control', 'disabled'=>'')); ?>
				            </div>
          				</div>
          			</div>

          		</div>
          	</div>
            
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <?php echo form_submit('', 'Eliminar de todas maneras', array('class'=>'btn btn-primary')); ?>
            <?php echo anchor(site_url('padres'), 'Cancelar', array('class'=>'btn btn-danger')); ?>
          </div>
        <?php echo form_close(); ?>
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (left) -->
  </div>
  <!-- /.row -->