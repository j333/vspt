<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Vspt Download / Login</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Add custom CSS here #DF3F4D #333-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png" />
  <style type="text/css">
    body { 
      background: url(http://lacelia.com.ar/wp-content/uploads/2013/07/106.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    .panel-default {
      border-radius: 0;
      background-color: #eee;
      opacity: 0.95;
      margin-top:30px;
      padding-top: 10px;
      padding-bottom: 20px;
      border: 0;
      border-top: 5px solid #DF3F4D;
    }

    .form-group.last { margin-bottom:0px; }

    #logo {
      background-image: url(img/logo-vspt-wine-group.png);
      background-position: 0 0;
      background-repeat: no-repeat;
      height: 49px;
      width: 260px;
      text-indent: -9999px;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .btn {
      width: 100%;
    }

    .btn-success {
      color: #FFF;
      background-color: #333;
      border-color: #EEE;
    }

    .btn-success:hover {
      color: #FFF;
      background-color: #DF3F4D;
      border-color: transparent;
    }

  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-7">
        <div class="panel panel-default">
          <h1 id="logo">VSPT Downloads</h1>
          <div class="panel-body">
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña" required="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"/>
                      Recordarme
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group last">
                <div class="col-sm-offset-2 col-sm-8">
                  <button type="submit" class="btn btn-success">Entrar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch([
      "img/01.jpg",
      "img/02.jpg",
      "img/03.jpg"
      ], {
        fade: 750,
        duration: 10000
      });
  </script>

</body>
</html>