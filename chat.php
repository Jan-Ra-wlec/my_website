<?php include 'header.php'; ?>
<title>DJayKay.net | Chat</title>
  </head>
  <body>
     <div class="container">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Navigation Anzeigen</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">DJayKay.net</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
		<li class="active"><a href="chat.html">Chat <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Server <span class="caret"></span></a>
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
      <!--<form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Suchen sie was?">
        </div>
        <button type="submit" class="btn btn-default">Suchen</button>
      </form>-->
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
  </div><!-- /.container-fluid -->
</nav>
<div><div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-8" style="border-right: 1px solid #ccc;">
<ul id="content"></ul>
  <div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
<p>Wie bist du hier her gekommen?<p><br>
GEH! Hier gibts nichts zu sehen!</p>
</div>
</div>
	        <div class="col-xs-6 col-lg-4">
  <?PHP include 'sidebar/contact.php';?>
     </div>
      </div>
	  <div>
<?PHP include 'footer.php';?>