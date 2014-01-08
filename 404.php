<?php include 'header.php'; ?>
		<div id="page-wrapper-noaside">

        <!-- Modal Sugerencias -->
        <div class="modal fade" id="modal_sugerencias" tabindex="-1" role="dialog" aria-labelledby="label_sugerencias" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form class="form-horizontal">
              <fieldset>
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="label_sugerencias">Envienos sus comentarios sobre su experiencia en el sitio</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="col-md-3 control-label" for="textinput">Comentarios</label>  
                  <div class="col-md-9">
                  <textarea class="form-control" id="textarea" name="textarea"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="radios">¿Cómo califica su experiencia en el sitio?</label>
                    <div class="col-md-9">
                      <div class="radio">
                        <label for="radios-0">
                          <input type="radio" name="radios" id="radios-0" value="5" checked="checked">
                          Excelente
                        </label>
                      </div>
                      <div class="radio">
                        <label for="radios-1">
                          <input type="radio" name="radios" id="radios-1" value="4">
                          Muy Buena
                        </label>
                      </div>
                      <div class="radio">
                        <label for="radios-2">
                          <input type="radio" name="radios" id="radios-2" value="3">
                            Buena
                        </label>
                      </div>
                      <div class="radio">
                        <label for="radios-3">
                          <input type="radio" name="radios" id="radios-3" value="2">
                            Mala
                        </label>
                      </div>
                      <div class="radio">
                        <label for="radios-4">
                          <input type="radio" name="radios" id="radios-4" value="1">
                              Pésima
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success">Enviar sugerencias</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div><!-- /.modal -->

        <div class="row">
	        <div class="col-lg-12">
            <h1>VSPT <small>Downloads</small></h1>
            <strong class="error">No existen coincidencias con su búsqueda</strong>
            <p>Para asegurarse de que existe lo que busca, por favor inténtelo nuevamnete cambiando los parámetros.</p>
          </div>

		</div><!-- /.row -->

		</div><!-- /#page-wrapper -->

	</div><!-- /#wrapper -->
  <?php include 'footer.php'; ?>