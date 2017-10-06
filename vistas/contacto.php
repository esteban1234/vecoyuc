<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body id="body2">

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">VECOYUC</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><span style="color: #F2C512;">VECOYUC</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="../index.php"><i class="fa fa-home fa-fw"></i> INDEX</a>
            </li>
            <li>
              <a href="nosotros.php"><i class="fa fa-users fa-fw"></i> NOSTROS</a>
            </li>
            <li>
              <a href="servicios.php"><i class="fa fa-briefcase fa-fw"></i> SERVICIOS</a>
            </li>
            <li class="active">
              <a href="contacto.php"><i class="fa fa-phone fa-fw"></i> CONTACTO</a>
            </li>
          </ul>
         
        </div>
      </div>
    </div>

    <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.3177184879771!2d-99.17385681519826!3d19.42815149781853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff4b81cf1a11%3A0xbb8152077a00f3d1!2sPlaza+Melchor+Ocampo+36%2C+Cuauht%C3%A9moc%2C+06500+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1507315734118" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div> <br><br>

<div class="container" style="margin-bottom: 3%;">
    <div class="row">
        <div class="col-sm-4">
            <h3>Formulario de contacto</h3>
            <hr>
            <address>
                <strong>Dirección:</strong> C. Plaza Melchor Ocampo # 36 por Rio Ganges y Rio Mississippi. Col. Cuauhtémoc, CDMX. C.P. 06500.<br><br>
                <strong>Teléfono:</strong> PENDIENTE <br><br>
                <strong>Correo:</strong> <a href="mailto:#"> info@vecoyuc.com</a><br><br>
                <strong>Horario:</strong> Lunes a Viernes de 9 am a 6 pm
            </address>
        </div>
            
        <div class="col-sm-8 contact-form">
            <form id="contact" method="post" class="form" role="form">
            <div class="row">
            <div class=" col-md-4 form-group">
            <input class="form-control" id="name" name="name" placeholder="Escribe tu nombre completo" type="text" required />
            </div>
            <div class=" col-md-4 form-group">
            <input class="form-control" id="name" name="name" placeholder="Escribe tu teléfono" type="text" required />
            </div>
            <div class=" col-md-4 form-group">
            <input class="form-control" id="email" name="email" placeholder="Escribe tu correo" type="email" required />
            </div>
            </div>
            <textarea class="form-control" id="message" name="message" placeholder="Escribe tu comentario" rows="5"></textarea>
            <br />
            <div class="row">
            <div class="col-xs-12 col-md-12 form-group">
            <button class="btn btn-warning pull-right" type="submit">Enviar</button>
            </form>
        </div>
        </div>
        </div>
        </div>
</div>
	

<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/iconoarriba.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>

</body>
</html>
