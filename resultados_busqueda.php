<?php include 'header.php'; ?>
<?php include 'menu_lateral_empresa.php'; ?>
<?php include 'modals_marca.php'; ?>
      <div id="page-wrapper">

          <!-- Modal Eliminar Marca -->
          <div class="modal fade" id="modal_eliminar_marca" tabindex="-1" role="dialog" aria-labelledby="label_eliminar_marca" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="label_eliminar_marca">Eliminar La Celia</h4>
                </div>
                <div class="modal-body">
                  <p>¿Esta seguro que desea esta marca y todo su contenido?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_confirmar_eliminar_marca" data-dismiss="modal">Eliminar</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
              </div>
            </div>
          </div><!-- /.modal -->
          <!-- Modal Confirmar Eliminar Marca -->
          <div class="modal fade" id="modal_confirmar_eliminar_marca" tabindex="-1" role="dialog" aria-labelledby="label_confirmar_eliminar_marca" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="label_confirmar_eliminar_marca">¿Está seguro que desea eliminar La Celia?</h4>
                </div>
                <div class="modal-body">
                  <p class="modal-title" id="label_confirmar_eliminar_marca">Si elimina esta marca se eliminarán además todos los archivos que la componen, sin posibilidad de recuperación.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger">Eliminar de todas formas</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
              </div>
            </div>
          </div><!-- /.modal -->
        <!-- Modal Editar Marca -->
        <div class="modal fade" id="modal_editar_marca" tabindex="-1" role="dialog" aria-labelledby="label_editar_marca" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form class="form-horizontal">
                <fieldset>
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="label_editar_marca">Editar Marca</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="textinput">Nombre marca</label> 
                    <div class="col-md-9">
                      <input id="textinput" name="textinput" type="text" placeholder="Nombre de la Marca" class="form-control input-md">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Imagen</label>  
                    <div class="col-md-9">
                    <img src="img/la-celia.jpg" class="img-responsive img-thumbnail">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="filebutton">Nueva Imagen</label>  
                    <div class="col-md-9">
                    <input id="filebutton" name="filebutton" class="input-file" type="file">
                    <br>
                    <small>Las imágenes deben ser formato .jpg con un tamaño de 200x300px.</small>
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
        <!-- Modal agregar categoría -->
        <div id="modal_agregar_categoria" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="label_agregar_categoria" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="label_agregar_categoria" class="modal-title">Agregar categoría</h4>
              </div>
              <form action="">
                <div class="modal-body">
                  <div class="form-group">
                    <input class="form-control input-md nuevo" type="text" placeholder="Escriba aquí el nombre de la nueva categoría">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success" data-dismiss="modal">Agregar categoría</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <div class="clearboth"></div>
                </div>
              </form>
            </div>
          </div>
        </div><!-- /.modal -->
        <!-- Modal Agregar Recurso -->
        <div class="modal fade" id="modal_agregar_recurso" tabindex="-1" role="dialog" aria-labelledby="label_agregar_recurso" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="label_agregar_recurso" class="modal-title">Agregar Recurso</h4>
              </div>
              <form class="form-horizontal">
              <fieldset>
              <div class="modal-body">
                <div class="form-group">
                  <label class="col-md-3 control-label" for="nombre_marca">Nombre recurso</label> 
                  <div class="col-md-9">
                    <input name="nombre_marca" type="text" placeholder="Nombre del recurso" class="form-control input-md">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="descripcion_marca">Descripción</label> 
                  <div class="col-md-9">
                    <textarea name="descripcion_marca"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="filebutton">Seleccionar archivo</label>  
                  <div class="col-md-9">
                  <input class="input-file filebutton" name="filebutton" type="file">
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
          <!-- Modal Eliminar Recurso -->
          <div class="modal fade" id="modal_eliminar_recurso" tabindex="-1" role="dialog" aria-labelledby="label_eliminar_recurso" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="label_eliminar_recurso">Eliminar Recurso</h4>
                </div>
                <div class="modal-body">
                  <p>¿Esta seguro que desea borrar este recurso?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger">Eliminar</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
              </div>
            </div>
          </div><!-- /.modal -->
        <!-- Modal Editar Recurso -->
        <div class="modal fade" id="modal_editar_recurso" tabindex="-1" role="dialog" aria-labelledby="label_editar_recurso" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form class="form-horizontal">
              <fieldset>
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="label_editar_recurso">Editar Recurso</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="col-md-3 control-label" for="nombre_recurso">Nombre recurso</label> 
                  <div class="col-md-9">
                    <input name="nombre_recurso" type="text" placeholder="Nombre del recurso" class="form-control input-md">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="descripcion_recurso">Descripción</label> 
                  <div class="col-md-9">
                    <textarea name="descripcion_recurso"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Archivo actual</label>  
                  <div class="col-md-9">
                    <span>nombreArchivo.extension</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="filebutton">Seleccionar archivo</label>  
                  <div class="col-md-9">
                  <input class="input-file filebutton" name="filebutton" type="file">
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
          <div class="col-lg-12">
            <h1>La Celia <small>Resultados de la busqueda para: </small> <strong class="palabras_busqueda">Palabras búsqueda</strong></h1>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <!-- Listado de recursos -->
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 recursos">            
            <div class="thumbnail">
              <!--div class="pull-right action-buttons">
                <a href="" data-toggle="modal" data-target="#editar-recurso"><i class="fa fa-pencil fa-fw"></i></a>
                <a href="" data-toggle="modal" data-target="#eliminar-recurso"><i class="fa fa-trash-o fa-fw"></i></a>
              </div-->

              <div class="pull-right dropdown opciones">
                <a data-toggle="dropdown" href="#"><i class="fa fa-pencil fa-fw"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li><a href="#" data-toggle="modal" data-target="#modal_editar_recurso">Editar</a></li>
                  <li class="divider"></li>
                  <li><a href="#" data-toggle="modal" data-target="#modal_eliminar_recurso">Eliminar</a></li>
                </ul>
              </div>
              <div class="caption">
                <div class="description">
                  <h4>Logotipo</h4>
                  <p><small>Imagen png. Imagen con fondo transparente.</small></p>
                </div>
                <div class="picture" style="background-image: url(img/la-celia.jpg);">
                </div>
                <small>Type: png | Size: 30kb</small>
                <a href="#" class="btn btn-primary btn-success"><i class="fa fa-cloud-download"></i> Download</a>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 recursos">
            <div class="thumbnail">
              <!--div class="pull-right action-buttons">
                <a href="" data-toggle="modal" data-target="#editar-recurso"><i class="fa fa-pencil fa-fw"></i></a>
                <a href="" data-toggle="modal" data-target="#eliminar-recurso"><i class="fa fa-trash-o fa-fw"></i></a>
              </div-->

              <div class="pull-right dropdown opciones">
                <a data-toggle="dropdown" href="#"><i class="fa fa-pencil fa-fw"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li><a href="#" data-toggle="modal" data-target="#modal_editar_recurso">Editar</a></li>
                  <li class="divider"></li>
                  <li><a href="#" data-toggle="modal" data-target="#modal_eliminar_recurso">Eliminar</a></li>
                </ul>
              </div>
              <div class="caption">
                <div class="description">
                  <h4>Logotipo La Celia</h4>
                  <p><small>Imagen png</small></p>
                </div>
                <div class="picture"></div>
                <small>Type: png | Size: 30kb</small>
                <a href="#" class="btn btn-primary btn-success"><i class="fa fa-cloud-download"></i> Download</a>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 recursos">
            <div class="thumbnail">
              <!--div class="pull-right action-buttons">
                <a href="" data-toggle="modal" data-target="#editar-recurso"><i class="fa fa-pencil fa-fw"></i></a>
                <a href="" data-toggle="modal" data-target="#eliminar-recurso"><i class="fa fa-trash-o fa-fw"></i></a>
              </div-->

              <div class="pull-right dropdown opciones">
                <a data-toggle="dropdown" href="#"><i class="fa fa-pencil fa-fw"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li><a href="#"  data-toggle="modal" data-target="#modal_editar_recurso">Editar</a></li>
                  <li class="divider"></li>
                  <li><a href="#" data-toggle="modal" data-target="#modal_eliminar_recurso">Eliminar</a></li>
                </ul>
              </div>
              <div class="caption">
                <div class="description">
                  <h4>Logotipo La Celia</h4>
                  <p><small>Imagen png</small></p>
                </div>
                <div class="picture"></div>
                <small>Type: png | Size: 30kb</small>
                <a href="#" class="btn btn-primary btn-success"><i class="fa fa-cloud-download"></i> Download</a>
              </div>
            </div>
          </div>
      </div><!-- /.row -->

    </div><!-- /#page-wrapper -->

  </div><!-- /#wrapper -->

  <?php include 'footer.php'; ?>