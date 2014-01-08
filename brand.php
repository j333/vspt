<?php include 'header.php'; ?>
<?php include 'menu_lateral_empresa.php'; ?>
<?php include 'modals_marca.php'; ?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>La Celia <small>Downloads</small></h1>
            <ol class="breadcrumb">
              <li class="active"><a href="index.html"><i class="fa fa-home"></i> Inicio</a> / La Celia</li>
            </ol>
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
          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 recursos">
            <!--a class="agregar" href="" data-toggle="modal" data-target="#agregar-recurso" data-toggle="tooltip" title="Agregar nuevo recurso"-->
            <a class="agregar" href="" data-toggle="modal" data-target="#modal_agregar_recurso">
              <div class="hero-widget well well-sm">
                <div class="icon">
                 <i class="fa fa-plus-circle"></i>
					<span>Agregar nuevo recurso</span>
               </div>
             </div>
           </a>
        </div>
      </div><!-- /.row -->

    </div><!-- /#page-wrapper -->

  </div><!-- /#wrapper -->
<?php include 'footer.php'; ?>