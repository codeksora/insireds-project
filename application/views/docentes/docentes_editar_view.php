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
				              <label>Nombre:</label>
				              <input type="text" class="form-control" value="<?php echo $docente->nombre; ?>">
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group">
				              <label>Apellido paterno:</label>
				              <input type="text" class="form-control" value="<?php echo $docente->apellidoPa; ?>">
				            </div>
		          		</div>

		          		<div class="col-md-12">
		          			<div class="form-group">
				              <label>Apellido materno:</label>
				              <input type="text" class="form-control" value="<?php echo $docente->apellidoMa; ?>">
				            </div>
		          		</div>
		          		
			            <div class="col-md-6">
			            	<div class="form-group">
				              <label for="exampleInputPassword1">Calle:</label>
				              <input type="text" class="form-control" value="<?php echo $docente->calle; ?>">
				            </div>
			            </div>

			            <div class="col-md-3">
			            	<div class="form-group">
				              <label for="exampleInputPassword1">Int.:</label>
				              <input type="text" class="form-control" value="<?php echo $docente->numeroInt; ?>">
				            </div>
			            </div>

			            <div class="col-md-3">
			            	<div class="form-group">
				              <label for="exampleInputPassword1">Ext.:</label>
				              <input type="text" class="form-control" value="<?php echo $docente->numeroEx; ?>">
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
				              		<option value="<?php echo $municipio->id; ?>" <?php echo ($municipio->id == $docente->municipio) ? 'selected' : ''; ?>><?php echo $municipio->nombre; ?></option>
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
				              		<option value="<?php echo $colonia->id; ?>" <?php echo ($colonia->id == $docente->colonia) ? 'selected' : ''; ?>><?php echo $colonia->nombre; ?></option>
				              	<?php endforeach; ?>
				              </select>
				            </div>
		          		</div>

		          		<div class="col-md-6">
		          			<div class="form-group">
				              <label for="exampleInputPassword1">Grado:</label>
				              <select class="form-control" name="" id="">
				              	<option value="">Seleccionar</option>
				              	<?php foreach ($grados as $grado): ?>
				              		<option value="<?php echo $grado->id; ?>" <?php echo ($grado->id == $docente->grado) ? 'selected' : ''; ?>><?php echo $grado->grado; ?></option>
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
				              		<option value="<?php echo $grupo->id; ?>" <?php echo ($grupo->id == $docente->grupo) ? 'selected' : ''; ?>><?php echo $grupo->grupo; ?></option>
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
          						<img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>" width="100%" class="img-thumbnail" alt="<?php echo $docente->foto_nombre; ?>">
          					</div>
          				</div>

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
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
            <a href="<?php echo site_url('docentes'); ?>" class="btn btn-danger">Cancelar</a>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (left) -->
  </div>
  <!-- /.row -->