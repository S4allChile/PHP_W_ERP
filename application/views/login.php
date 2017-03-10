<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

  <title>ERP-WEB</title>

  <link rel="stylesheet" href="<?= base_url(); ?>template/lib/fontawesome/css/font-awesome.css">

  <link rel="stylesheet" href="<?= base_url(); ?>template/css/quirk.css">
  <link href="<?= base_url(); ?>template/css/propio.css" rel="stylesheet" type="text/css"/>
  <script src="<?= base_url(); ?>template/lib/modernizr/modernizr.js"></script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="../lib/html5shiv/html5shiv.js"></script>
  <script src="../lib/respond/respond.src.js"></script>
  <![endif]-->
</head>

<body class="signwrapper">
    
<div class="se-pre-con">CARGANDO ESPERE POR FAVOR ...</div>

  <div class="sign-overlay"></div>
  <div class="signpanel"></div>

  <div class="panel signin">
    <div class="panel-heading">
      <h1>ERP-WEB</h1>
      <h4 class="panel-title">Bienvenido - Iniciar Sesion</h4>
      
    </div>
    <div class="panel-body">
      
      <div class="or">o</div>
      <div id="msjLogin" style="display: none">
          <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Error !</strong> <span id="mensajeLogin"></span>
              </div>
      </div>
      <form action="#" id="frmLogin" method="post">
        <div class="form-group mb10">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="email" name="usuario" class="form-control" placeholder="Ingrese Email">
          </div>
        </div>
        <div class="form-group nomargin">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" name="pass" class="form-control" placeholder="Ingrese Contraseña">
          </div>
        </div>
        <div><a href="" class="forgot">Olvido su contraseña?</a></div>
        <div class="form-group">
          <button class="btn btn-success btn-quirk btn-block">Ingresar</button>
        </div>
      </form>
      <hr class="invisible">
      
    </div>
  </div><!-- panel -->

  
  
  <script src="<?= base_url(); ?>/template/lib/jquery/jquery.js" type="text/javascript"></script>
 
  <script>
      $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");
	});
        
      $(document).ready(function(){
          
          $('#frmLogin').submit(function(e){
              
            e.preventDefault();
            var datos = $(this).serialize();
            $.ajax({
            type: 'POST',
            url:  'login/validaLogin',
            data: datos,
            beforeSend:   function(){
                
                $(".se-pre-con").fadeIn("slow");
                
            },
            success:      function(res){
                
               
                
                switch(res){
                    case '0':
                        $('#msjLogin').fadeIn();
                        $('#mensajeLogin').html('El usuario no existe');
                        break;
                    case '1':
                        window.location.replace('inicio');
                        break;
                    case '2':
                        $('#msjLogin').fadeIn();
                        $('#mensajeLogin').html('Conraseña no corresponde');
                        break;    
                }

                $(".se-pre-con").fadeOut("slow");
               
                
            },
            error:        function(data){
                alert("Error Ajax "+ data);
            },
    });
              
          });
      });
  </script>
</body>
</html>
