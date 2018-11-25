  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">¿Desea eliminar a este usuario?</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php echo form_open('alumnos/' . $alumno->id . '/eliminar_s'); ?>
          <div class="box-body">
          	<div class="row">
          		<div class="col-md-3">          			
          			<div class="row">
          				<div class="col-md-12">
          					<div class="form-group">
                      <?php echo form_input('', set_value('', $alumno->nombre . ' ' . $alumno->apellidoPa . ' ' . $alumno->apellidoMa), array('class'=>'form-control', 'disabled'=>'')); ?>
				            </div>
          				</div>
          			</div>

          		</div>
          	</div>
            
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Eliminar de todas maneras</button>
            <a href="<?php echo site_url('alumnos'); ?>" class="btn btn-danger">Cancelar</a>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (left) -->
  </div>
  <!-- /.row -->