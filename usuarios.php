<?php include 'header.php'; ?>

      <div id="page-wrapper-noaside">

          <!-- Modal Eliminar Usuario -->
          <div class="modal fade" id="modal_eliminar_usuario" tabindex="-1" role="dialog" aria-labelledby="label_eliminar_usuario" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="label_eliminar_usuario">Eliminar Nombre Usuario</h4>
                </div>
                <div class="modal-body">
                  <p>¿Esta seguro que desea eliminar este usuario?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger"data-dismiss="modal">Eliminar</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
              </div>
            </div>
          </div><!-- /.modal -->
        <!-- Modal Editar Usuario -->
        <div id="modal_editar_usuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="label_editar_usuario" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form class="form-horizontal" role="form">
              <fieldset>
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="label_editar_usuario">Editar Usuario</h4>
              </div>
              <div class="modal-body">
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
                  <label class="col-md-3 control-label">Marcas</label>
                  <div class="col-md-9">
                    <select class="form-control">
                      <option>Nombre Marcas</option>
                      <option>Todas</option>
                      <option>Tamarí</option>
                      <option>La Celia</option>
                      <option>Gato Negro</option>
                    </select>
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
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success">Guardar cambios</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              </div>
              </fieldset>
              </form>
            </div>
          </div>
        </div><!-- /.modal -->

        <div class="row">
          <div class="col-lg-10 col-md-offset-1">
            <h1>Tamarí <small>Aministración de usuarios</small></h1>
            <ol class="breadcrumb">
              <li class="active"><a href="index.html"><i class="fa fa-home"></i> Inicio</a> / Administrar usuarios</li>
            </ol>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <!-- Listado de usuarios -->
          <div class="col-lg-10 col-md-offset-1">
            <div class="table-responsive">
              <table class="table table-hover table-striped tablesorter usuarios">
                <thead>
                  <tr>
                    <th>Nombre usuario <i class="fa fa-sort"></i></th>
                    <th>Marcas <i class="fa fa-sort"></i></th>
                    <th>Privilegios <i class="fa fa-sort"></i></th>
                    <th>Fecha de creación <i class="fa fa-sort"></i></th>
                    <th>Última visita <i class="fa fa-sort"></i></th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Juan Carlos</td>
                    <td>Tamarí</td>
                    <td>Admin Primario</td>
                    <td>9-10-12</td>
                    <td>24-12-12</td>
                    <td>
                      <a href="" data-toggle="modal" data-target="#modal_editar_usuario"><i class="fa fa-pencil aclaracion" data-toggle="tooltip" title="editar usuario"></i></a>
                      <a href="" data-toggle="modal" data-target="#modal_eliminar_usuario"><i class="fa fa-trash-o aclaracion" data-toggle="tooltip" title="eliminar usuario"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Ana Laura</td>
                    <td>La Celia</td>
                    <td>Admin Secundario</td>
                    <td>9-10-12</td>
                    <td>24-12-12</td>
                    <td>
                      <a href="" data-toggle="modal" data-target="#modal_editar_usuario"><i class="fa fa-pencil aclaracion" data-toggle="tooltip" title="editar usuario"></i></a>
                      <a href="" data-toggle="modal" data-target="#modal_eliminar_usuario"><i class="fa fa-trash-o aclaracion" data-toggle="tooltip" title="eliminar usuario"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>José Alberto</td>
                    <td>Gato Negro</td>
                    <td>Admin Secundario</td>
                    <td>9-10-12</td>
                    <td>24-12-12</td>
                    <td>
                      <a href="" data-toggle="modal" data-target="#modal_editar_usuario"><i class="fa fa-pencil aclaracion" data-toggle="tooltip" title="editar usuario"></i></a>
                      <a href="" data-toggle="modal" data-target="#modal_eliminar_usuario"><i class="fa fa-trash-o aclaracion" data-toggle="tooltip" title="eliminar usuario"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>María Clara</td>
                    <td>La Celia</td>
                    <td>Admin Secundario</td>
                    <td>9-10-12</td>
                    <td>24-12-12</td>
                    <td>
                      <a href="" data-toggle="modal" data-target="#modal_editar_usuario"><i class="fa fa-pencil aclaracion" data-toggle="tooltip" title="editar usuario"></i></a>
                      <a href="" data-toggle="modal" data-target="#modal_eliminar_usuario"><i class="fa fa-trash-o aclaracion" data-toggle="tooltip" title="eliminar usuario"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Enzo</td>
                    <td>La Celia</td>
                    <td>Cliente</td>
                    <td>9-10-12</td>
                    <td>24-12-12</td>
                    <td>
                      <a href="" data-toggle="modal" data-target="#modal_editar_usuario"><i class="fa fa-pencil aclaracion" data-toggle="tooltip" title="editar usuario"></i></a>
                      <a href="" data-toggle="modal" data-target="#modal_eliminar_usuario"><i class="fa fa-trash-o aclaracion" data-toggle="tooltip" title="eliminar usuario"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Pablo</td>
                    <td>Gato Negro</td>
                    <td>Cliente</td>
                    <td>9-10-12</td>
                    <td>24-12-12</td>
                    <td>
                      <a href="" data-toggle="modal" data-target="#modal_editar_usuario"><i class="fa fa-pencil aclaracion" data-toggle="tooltip" title="editar usuario"></i></a>
                      <a href="" data-toggle="modal" data-target="#modal_eliminar_usuario"><i class="fa fa-trash-o aclaracion" data-toggle="tooltip" title="eliminar usuario"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Estefanía</td>
                    <td>Gato Negro</td>
                    <td>Cliente</td>
                    <td>9-10-12</td>
                    <td>24-12-12</td>
                    <td>
                      <a href="" data-toggle="modal" data-target="#modal_editar_usuario"><i class="fa fa-pencil aclaracion" data-toggle="tooltip" title="editar usuario"></i></a>
                      <a href="" data-toggle="modal" data-target="#modal_eliminar_usuario"><i class="fa fa-trash-o aclaracion" data-toggle="tooltip" title="eliminar usuario"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Juan Carlos</td>
                    <td>Tamarí</td>
                    <td>Admin Primario</td>
                    <td>9-10-12</td>
                    <td>24-12-12</td>
                    <td>
                      <a href="" data-toggle="modal" data-target="#modal_editar_usuario"><i class="fa fa-pencil aclaracion" data-toggle="tooltip" title="editar usuario"></i></a>
                      <a href="" data-toggle="modal" data-target="#modal_eliminar_usuario"><i class="fa fa-trash-o aclaracion" data-toggle="tooltip" title="eliminar usuario"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Ana Laura</td>
                    <td>La Celia</td>
                    <td>Admin Secundario</td>
                    <td>9-10-12</td>
                    <td>24-12-12</td>
                    <td>
                      <a href="" data-toggle="modal" data-target="#modal_editar_usuario"><i class="fa fa-pencil aclaracion" data-toggle="tooltip" title="editar usuario"></i></a>
                      <a href="" data-toggle="modal" data-target="#modal_eliminar_usuario"><i class="fa fa-trash-o aclaracion" data-toggle="tooltip" title="eliminar usuario"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div><!-- /.row -->

    </div><!-- /#page-wrapper -->

  </div><!-- /#wrapper -->

  <!-- JavaScript -->
<?php include 'footer.php'; ?>