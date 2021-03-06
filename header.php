<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>VSPT Downloads / La Celia</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Add custom CSS here -->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
  
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png" />
</head>

<body>

  <div>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->

      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">VSPT Downloads</a>
      </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

          <div class="pull-left search">
            <form class="navbar-form" role="search">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Buscar recursos" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                  <button class="btn btn-danger" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li>
              <a href="#" data-toggle="modal" data-target="#modal_sugerencias"><i class="fa fa-lightbulb-o"></i> Sugerencias</a>
            </li>
            <li class="dropdown">
              <a href="#"  data-toggle="dropdown"><i class="fa fa-users"></i> Usuarios <i class="fa fa-sort-asc"></i></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <li><a href="usuarios.php"><i class="fa fa-cog"></i> Administrar usuarios</a></li>
                <li class="divider"></li>
                <li><a href="crear_usuario.php"><i class="fa fa-plus"></i> Crear usuario</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#"  data-toggle="dropdown"><i class="fa fa-user"></i> Nombre Usuario <i class="fa fa-sort-asc"></i></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <a href="login.php" class="salir"> <i class="fa fa-power-off"></i> Salir</a>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <!-- Mensajes en Modal -->

          <!-- Modal Genérico
          <div class="modal fade" id="modal_nombre_id" tabindex="-1" role="dialog" aria-labelledby="label_nombre_id" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="label_nombre_id">Título modal</h4>
                </div>
                <div class="modal-body">
                  <p>Acción del modal</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
              </div>
            </div>
          </div>
          /.modal -->
        <!-- Modal Sugerencias -->
        <div class="modal fade" id="modal_sugerencias" tabindex="-1" role="dialog" aria-labelledby="label_comentarios" aria-hidden="true">
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