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

        <div id="inicio_marcas" class="row">
	        <div class="col-lg-12">
            <h1>VSPT <small>Downloads</small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-home"></i> Inicio</li>
            </ol>
            <!--div class="alert alert-success alert-dismissable">
              	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              	Bienvenido a VSPT Download, aquí encontrará todo el material de nuestras marcas. Haga click en la marca de cual necesita recursos.
            </div-->
            <strong class="msj_inicio">Bienvenido a <em>VSPT Downloads</em>, aquí encontrará todo el material de nuestras marcas. Haga click en la marca de cual necesita recursos.</strong>
          </div>
	        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 brands">
	        	<a href="brand.php">
	        		<img class="img-responsive" src="img/la-celia.jpg" alt="Responsive image">
	        	</a>
	        </div>
	        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 brands">
	        	<a href="">
	        		<img class="img-responsive" src="img/bodega-tamari.jpg" alt="Responsive image">
	        	</a>
	        </div>
	        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 brands">
	        	<a href="">
		        	<img class="img-responsive" src="img/san-pedro.jpg" alt="Responsive image">
		       	</a>
	        </div>
	        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 brands">
	        	<a href="">
		        	<img class="img-responsive" src="img/casa-rivas.jpg" alt="Responsive image">
		        </a>
	        </div>
	        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 brands">
	        	<a href="">
		        	<img class="img-responsive" src="img/leyda.jpg" alt="Responsive image">
		        </a>
	        </div>
	        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 brands">
	        	<a href="">
		        	<img class="img-responsive" src="img/misiones-de-rengo.jpg" alt="Responsive image">
		        </a>
	        </div>
	        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 brands">
	        	<a href="">
	        		<img class="img-responsive" src="img/santa-helena.jpg" alt="Responsive image">
	        	</a>
	        </div>
	        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 brands">
	        	<a href="">
	        		<img class="img-responsive" src="img/tarapaca.jpg" alt="Responsive image">
	        	</a>
	        </div>
	        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 brands">
	       		<a href="">
	        		<img class="img-responsive" src="img/vina-mar.jpg" alt="Responsive image">
	        	</a>
	        </div>
	        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 brands">

	        	<!--a class="agregar" href="" data-toggle="modal" data-target="#modal_agregar_marca" data-toggle="tooltip" title="Agregar nueva marca"-->
	        	<a class="agregar" href="" data-toggle="modal" data-target="#modal_agregar_marca">

	       		<div class="hero-widget well well-sm">
		                <div class="icon">
		                	<i class="fa fa-plus-circle"></i>
		                	<span>Agregar nueva marca</span>
		                </div>
		        </div>
		        </a>

				<!-- Modal agregar marca -->
				<div id="modal_agregar_marca" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="label_agregar_marca" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 id="label_agregar_marca" class="modal-title">Agregar marca</h4>
				      </div>
				      <form action="">
				      	<div class="modal-body">
				      		<input class="form-control input-md nuevo" type="text" placeholder="Escriba aquí el nombre de la nueva marca">
				      	</div>
				      	<div class="modal-footer">
				        	<button type="submit" class="btn btn-success" data-toggle="modal" data-target="#modal_marca_agregada" data-dismiss="modal">Agregar Marca</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				      	</div>
				      </form>
				    </div>
				  </div>
				</div><!-- /.modal -->

				<!-- Modal marca agregada -->
				<div id="modal_marca_agregada" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="label_marca_agregada" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 id="label_marca_agregada" class="modal-title">Marca agregada</h4>
				      </div>
				      <div class="modal-body">
				      	<p><strong>Marca X</strong> se ha agregado a la lista.</p>
				      </div>
				      <div class="modal-footer">
				      	<button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
      				</div>
				    </div>
				  </div>
				</div><!-- /.modal -->

				</div>
			</div><!-- /.row -->

		</div><!-- /#page-wrapper -->

	</div><!-- /#wrapper -->

	<?php include 'footer.php'; ?>