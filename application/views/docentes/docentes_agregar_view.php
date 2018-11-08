  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Quick Example</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
          	<div class="row">
          		<div class="col-md-9">
          			<div class="row">
          				<div class="col-md-12">
		          			<div class="form-group">
				              <label for="exampleInputEmail1">Nombre:</label>
				              <input type="text" class="form-control">
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group">
				              <label for="exampleInputPassword1">Apellido paterno:</label>
				              <input type="text" class="form-control">
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group">
				              <label for="exampleInputPassword1">Apellido materno:</label>
				              <input type="text" class="form-control">
				            </div>
		          		</div>
		          		
			            <div class="col-md-6">
			            	<div class="form-group">
				              <label for="exampleInputPassword1">Calle:</label>
				              <input type="text" class="form-control">
				            </div>
			            </div>

			            <div class="col-md-3">
			            	<div class="form-group">
				              <label for="exampleInputPassword1">Int.:</label>
				              <input type="text" class="form-control">
				            </div>
			            </div>

			            <div class="col-md-3">
			            	<div class="form-group">
				              <label for="exampleInputPassword1">Ext.:</label>
				              <input type="text" class="form-control">
				            </div>
			            </div>

			            <div class="col-md-12">
		          			<div class="form-group">
				              <label for="exampleInputPassword1">Estado:</label>
				              <select class="form-control" name="" id="">
				              	<option value="">Seleccionar</option>
				              </select>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group">
				              <label for="exampleInputPassword1">Municipio:</label>
				              <select class="form-control" name="" id="">
				              	<option value="">Seleccionar</option>
				              	<?php foreach ($municipios as $municipio): ?>
				              		<option value="<?php echo $municipio->id; ?>"><?php echo $municipio->nombre; ?></option>
				              	<?php endforeach; ?>
				              </select>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group">
				              <label for="exampleInputPassword1">Colonia:</label>
				              <select class="form-control" name="" id="">
				              	<option value="">Seleccionar</option>
				              	<?php foreach ($colonias as $colonia): ?>
				              		<option value="<?php echo $colonia->id; ?>"><?php echo $colonia->nombre; ?></option>
				              	<?php endforeach; ?>
				              </select>
				            </div>
		          		</div>

		          		<div class="col-md-6">
		          			<div class="form-group">
				              <label for="exampleInputPassword1">Grado a cargo:</label>
				              <select class="form-control" name="" id="">
				              	<option value="">Seleccionar</option>
				              	<?php foreach ($grados as $grado): ?>
				              		<option value="<?php echo $grado->id; ?>"><?php echo $grado->grado; ?></option>
				              	<?php endforeach; ?>
				              </select>
				            </div>
		          		</div>

		          		<div class="col-md-6">
		          			<div class="form-group">
				              <label for="exampleInputPassword1">Grupo:</label>
				              <select class="form-control" name="" id="">
				              	<option value="">Seleccionar</option>
				              	<?php foreach ($grupos as $grupo): ?>
				              		<option value="<?php echo $grupo->id; ?>"><?php echo $grupo->grupo; ?></option>
				              	<?php endforeach; ?>
				              </select>
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group">
				              <label for="exampleInputPassword1">Teléfono:</label>
				              <input type="text" class="form-control">
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group">
				              <label for="exampleInputPassword1">INE:</label>
				              <input type="text" class="form-control">
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group">
				              <label for="exampleInputPassword1">Puesto:</label>
				              <select class="form-control" name="" id="">
				              	<option value="">Seleccionar</option>
				              </select>
				            </div>
		          		</div>
          			</div>	
          		</div>
		
          		<div class="col-md-3">
          			<div class="row">
          				<div class="col-md-12">
          					<div class="form-group">
				              <label for="exampleInputFile">Imagen de perfíl</label>
				              <input type="file" id="exampleInputFile">
				            </div>
          				</div>
          			</div>
          		</div>
          	</div>
            
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Agregar docente</button>
            <a href="<?php echo site_url('docentes'); ?>" class="btn btn-danger">Cancelar</a>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (left) -->
  </div>
  <!-- /.row -->