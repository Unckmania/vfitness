<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
		.red{
			color:red;
		}
		.green{
			color:green;
		}
	</style>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="/assets/images/logo-nav.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Liga 5 dias</a></li>
        <li><a href="#">Liga 3 dias</a></li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Añadir Usuario</a></li>
            <li><a href="#">Borrar Usuario</a></li>
            <li class="divider"></li>
            <li><a href="#">Motivar Usuario</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

		<div class="bs-example table-responsive">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Ultimos 5 dias</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="success">
                    <td>1</td>
                    <td>Sandra</td>
                    <td>
                    	<span class="glyphicon glyphicon-ok green"></span>
                    	<span class="glyphicon glyphicon-ok green"></span>
                    	<span class="glyphicon glyphicon-ok green"></span>
                    	<span class="glyphicon glyphicon-ok green"></span>
                    	<span class="glyphicon glyphicon-ok green"></span>
                    </td>
                  </tr>
                  <tr class="warning">
                    <td>4</td>
                    <td>Francisco</td>
                    <td>
                    	<span class="glyphicon glyphicon-ok green"></span>
                    	<span class="glyphicon glyphicon-remove red"></span>
                    	<span class="glyphicon glyphicon-ok green"></span>
                    	<span class="glyphicon glyphicon-remove red"></span>
                    	<span class="glyphicon glyphicon-remove red"></span>
                    </td>
                  </tr>
                  <tr class="danger">
                    <td>5</td>
                    <td>Tere</td>
                    <td>
                    	<span class="glyphicon glyphicon-remove red"></span>
                    	<span class="glyphicon glyphicon-remove red"></span>
                    	<span class="glyphicon glyphicon-remove red"></span>
                    	<span class="glyphicon glyphicon-remove red"></span>
                    	<span class="glyphicon glyphicon-remove red"></span>
                    </td>
                  </tr>
                  <tr class="warning">
                    <td>6</td>
                    <td>Gabardino</td>
                    <td>
                    	<span class="glyphicon glyphicon-remove red"></span>
                    	<span class="glyphicon glyphicon-ok green"></span>
                    	<span class="glyphicon glyphicon-remove red"></span>
                    	<span class="glyphicon glyphicon-ok green"></span>
                    	<span class="glyphicon glyphicon-ok green"></span>
                    </td>
                  </tr>
                  <tr class="success">
                    <td>7</td>
                    <td>James</td>
                    <td>
                    	<span class="glyphicon glyphicon-ok green"></span>
                    	<span class="glyphicon glyphicon-ok green"></span>
                    	<span class="glyphicon glyphicon-ok green"></span>
                    	<span class="glyphicon glyphicon-ok green"></span>
                    	<span class="glyphicon glyphicon-ok green"></span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
	</div>
</body>
</html>
