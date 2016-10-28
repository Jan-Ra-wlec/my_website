<?php include 'header.php'; ?>
    <title>DJayKay.net | TS³ Registrierung</title>
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
		<li><a href="chat.php">Chat</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Server <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="active"><a href="tsreg.html">Teamspeak Registrierung <span class="sr-only">(current)</span></a></li>
            <li><a href="tsreg.php">Serverliste</a></li>
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
<div>
<div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-8" style="border-right: 1px solid #ccc;">
<ul id="content"></ul>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Teamspeak³ Registrierung</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
  <input id="name" name="textinput" type="text" placeholder="Benutzername im Teamspeak³" class="form-control input-md" required="">
  <span class="help-block">Kann nach der Registrierung geändert werden!</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
  <input id="tsid" name="textinput" type="text" placeholder="TeamSpeak³ Identität" class="form-control input-md" required="">
  <span class="help-block">Deine Teamspeak Identitätsnummer kannst du im Teamspeak³ Client finden. Solltest du Probleme haben, kontaktiere einen Admin</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
  <button id="submit" name="submit" class="btn btn-success">Registrierung abschließen!</button>
  </div>
</div>

</fieldset>
</form>
<!-- Formular Beginn -->

            <form role="form" id="frmContact">
                <div class="form-group" id="frmGrpVorname">
                    <label for="vorname" class="control-label">Vorname</label>
                    <input type="text" id="vorname" class="form-control" placeholder="Ihr Vorname">
                </div>
                <div class="form-group" id="frmGrpNachname">
                    <label for="nachname" class="control-label">Nachname</label>
                    <input type="text" id="nachname" class="form-control" placeholder="Ihr Nachname">
                </div>
                <div class="form-group" id="frmGrpEmail">
                    <label for="email" class="control-label">E-Mail Adresse</label>
                    <input type="text" id="email" class="form-control"  placeholder="Ihre E-Mail Adresse">
                </div>
                <div class="form-group" id="frmGrpNachricht">
                    <label for="nachricht" class="control-label">Nachricht</label>
                    <textarea id="nachricht" class="form-control">Ihre Nachricht an uns...</textarea>
                </div>
                <div class="form-group" id="frmGrpCaptcha">
                    <label for="captcha" class="control-label">Wie viel ist "2 + 3"?</label>
                    <input type="text" id="captcha" class="form-control" placeholder="Ergebnis der o.g. Rechenaufgabe">
                </div>

                <div class="form-group text-right">
                    <button type="submit" id="submitBtn" class="btn btn-primary btn-lg">Absenden</button>
                </div>
            </form>

            <!-- Formular Ende -->

        </div>
    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    $( '#frmContact').submit( function() {
        var formControl = true;

        $( '#frmGrpVorname' ).removeClass( 'has-error' );
        $( '#frmGrpNachname' ).removeClass( 'has-error' );
        $( '#frmGrpEmail' ).removeClass( 'has-error' );
        $( '#frmGrpNachricht' ).removeClass( 'has-error' );
        $( '#frmGrpCaptcha' ).removeClass( 'has-error' );


        var vorname = $( '#vorname' );
        var nachname = $( '#nachname' );
        var email = $( '#email' );
        var nachricht = $( '#nachricht' );
        var captcha = $( '#captcha' );

        if(vorname.val() == '') {
            formControl = false;
            $( '#frmGrpVorname' ).addClass( 'has-error' );
        }

        if(nachname.val() == '') {
            formControl = false;
            $( '#frmGrpNachname' ).addClass( 'has-error' );
        }

        if(nachricht.val() == '') {
            formControl = false;
            $( '#frmGrpNachricht' ).addClass( 'has-error' );
        }

        if(validateEmail(email.val()) == false) {
            formControl = false;
            $( '#frmGrpEmail' ).addClass( 'has-error' );
        }

        if(captcha.val() != '5') {
            formControl = false;
            $( '#frmGrpCaptcha' ).addClass( 'has-error' );
        }

        if(formControl) {
            $.ajax({
                type: "POST",
                url: "php/senden.php",
                data: { keyword:vorname }
            }).done(function(msg) {
                $( '#message' ).addClass( 'alert' );
                $( '#message' ).addClass( 'alert-success' );
                $( '#message').html( msg );
            });
        }

        return false;
    } );
</script>
 <div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
  <span class="sr-only">Success!</span>
<strong>Deine Registrierung wurde versendet!</strong><br>
Bis dein Account freigeschaltet wird, kann es ein wenig dauern!</p>
</div>
</div>
	        <div class="col-xs-6 col-lg-4">
<?PHP include 'sidebar/contact.php';?>
      </div>
<?PHP include 'footer.php';?>