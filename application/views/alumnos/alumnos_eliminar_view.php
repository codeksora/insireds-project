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
        <form role="form">
          <div class="box-body">
          	<div class="row">
          		<div class="col-md-3">
          			<div class="row">
          				<div class="col-md-12">
          					<div class="form-group">
				              <input type="hidden" name="id" value="<?php echo $alumno->id; ?>">
				            </div>
          				</div>
          			</div>
          			
          			<div class="row">
          				<div class="col-md-12">
          					<div class="form-group">
				              <input type="text" class="form-control" value="<?php echo $alumno->nombre . ' ' . $alumno->apellidoPa . ' ' . $alumno->apellidoMa; ?>" disabled>
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