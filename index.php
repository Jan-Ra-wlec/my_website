<?php include 'header.php'; ?>
    <title>DJayKay.net | Programming and Media</title>
	</head>
  <body>
    <div class="container">
 <nav class="navbar navbar-inverse"> <!-- navbar-fixed-top-->
  <!--<div class="container-fluid">-->
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Navigation Anzeigen</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="Logo.png" height= 32px/></a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
		<li><a href="blog.php">Blog</a></li>
		<li><a href="chat.php">Chat</a></li>
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Server <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tsreg.php">Teamspeak Registrierung</a></li>
            <li><a href="#">Serverliste</a></li>
            <li><a href="#">Technik</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Spenden</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Teammitglied werden</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Login</a></li>
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menü <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Webinterface</a></li>
            <li><a href="#">Profil</a></li>
            <li><a href="#">Einstellungen</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Abmelden</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  <!--</div><!-- /.container-fluid -->
</nav>
<div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-8" style="border-right: 1px solid #ccc;">
<div class="jumbotron">
  <h1>Umbauarbeiten</h1>
  <p>Programmer - Kind of BIOS - A Device, which turns #C0FFEE into Code. Input = C0FFEE Output = Code</p><br>
  <div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
    Unsere Website wird komplett erneuert!<br>
	Bitte habt noch Geduld. Es steht noch kein Datum für den Release fest!<br><br>
	DJayKay.net Dev-Center</p></div><br>
	Fertigstellungsprozess:<br>
<div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%">
    <span class="sr-only">12% Complete (success)</span>
  </div>
</div>
</p>
  <p><a class="btn btn-primary btn-lg" href="http://djaykay.net/" role="button">Zur alten Ansicht!</a></p>
</div>
</div>
	        <div class="col-xs-6 col-lg-4">
<?PHP include 'sidebar/sample.php';?>
      </div>
<?PHP include 'footer.php';?>