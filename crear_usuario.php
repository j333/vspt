<?php include 'header.php'; ?>
  
      <div id="page-wrapper-noaside">
        <div class="row">
          <div class="col-lg-10 col-md-offset-1">
            <h1>VSPT <small>Creación de usuario</small></h1>
            <ol class="breadcrumb">
              <li class="active"><a href="index.html"><i class="fa fa-home"></i> Inicio</a> / Crear Usuario</li>
            </ol>
          </div>
        </div><!-- /.row -->
        <div class="row">
          <!-- Listado de usuarios -->

          <div class="col-lg-10  col-md-offset-1">
              <form class="form-horizontal" role="form">
              <fieldset>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="nombre_usuario">Nombre usuario</label> 
                  <div class="col-md-9">
                    <input name="nombre_usuario" type="text" placeholder="Nombre y Apellido" class="form-control input-md">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="email_usuario">Email usuario</label> 
                  <div class="col-md-9">
                    <input name="email_usuario" type="email" placeholder="usuario@email.com" class="form-control input-md">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="password_usuario">Contraseña</label> 
                  <div class="col-md-9">
                    <input name="password_usuario" type="text" placeholder="Contraseña" class="form-control input-md">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Privilegios</label>
                  <div class="col-md-9">
                    <select class="form-control">
                      <option>Tipo de administrador</option>
                      <option>Admin Primario</option>
                      <option>Admin Secundario</option>
                      <option>Cliente</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                	<label class="col-md-3 control-label">Marcas a ver/editar</label>
                	<div class="col-md-9">
                		<div class="checkbox col-xs-6 col-md-3">
                			<label for="checkboxes-0">
                				<input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                				Tamarí
                			</label>
                		</div>
                		<div class="checkbox col-xs-6 col-md-3">
                			<label for="checkboxes-1">
                				<input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                				La Celia
                			</label>
                		</div>
                		<div class="checkbox col-xs-6 col-md-3">
                			<label for="checkboxes-1">
                				<input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                				La Celia
                			</label>
                		</div>
                		<div class="checkbox col-xs-6 col-md-3">
                			<label for="checkboxes-1">
                				<input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                				La Celia
                			</label>
                		</div>
                		<div class="checkbox col-xs-6 col-md-3">
                			<label for="checkboxes-1">
                				<input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                				La Celia
                			</label>
                		</div>
                	</div>
                </div>
              <div class="form-group">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success pull-right">Crear usuario</button>
              </div>
              </fieldset>
              </form>
          </div>
        </div><!-- /.row -->

    </div><!-- /#page-wrapper -->

  </div><!-- /#wrapper -->

<?php include 'footer.php'; ?>