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
        <!-- Modal editar categoría -->
        <div id="modal_editar_categoria" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="label_editar_categoria" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="label_editar_categoria" class="modal-title">Editar categoría</h4>
              </div>
              <form action="">
                <div class="modal-body">
                  <div class="form-group">
                    <input class="form-control input-md nuevo" type="text" placeholder="Escriba aquí el nuevo nombre de la categoría">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success" data-dismiss="modal">Guardar</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <div class="clearboth"></div>
                </div>
              </form>
            </div>
          </div>
        </div><!-- /.modal -->
          <!-- Modal Eliminar categoría -->
          <div class="modal fade" id="modal_eliminar_categoria" tabindex="-1" role="dialog" aria-labelledby="label_eliminar_categoria" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="label_eliminar_categoria">Eliminar categoría</h4>
                </div>
                <div class="modal-body">
                  <p>¿Esta seguro que desea esta categoría y todo su contenido?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_confirmar_eliminar_marca" data-dismiss="modal">Eliminar</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
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