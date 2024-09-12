<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta name='author' content='fortrainevolution.com'>
        <link rel='shortcut icon' href='./img/logo.png'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/hint.css/2.7.0/hint.min.css'>
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' integrity='sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf' crossorigin='anonymous'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css'>
        <link href='https://fonts.cdnfonts.com/css/modern-age' rel='stylesheet'>
        <link href="https://fonts.cdnfonts.com/css/island-moments" rel="stylesheet">
        <!-- <style>
            /* body{
                background: #552c8a;
            }
            header{
                background: #d3d3de;
            }
            .cabecera{
                width: 100%;
                height: auto;
            }
            nav{
              background: rgba(16, 16, 16, 0.5);
              right: 0;
              border-radius: 10px;
              width: 50%;
            }

            textarea{
              resize: none;
            }
            .nav-link{
              color:#d3d3de;
            }
            a{
              text-decoration: none;
              color:#d3d3de;
            }
            .logo{
                width: 8%;
                color:#d3d3de;
            }
            .publicidad{
                margin-left: auto;
                margin-right: auto;
                width: 40%;
                height: 200px;
                border: solid black 2px;
            }
            .redes-sociales{
              position: fixed;
              top:20%;
              right: 20px;
              display: flex;
              flex-direction: column;
              align-items: flex-end;
              /*position: absolute;
              right: 40px;*/
              font-size: 25px;
              color: #ddaf19;
            }
            .tarjetas{
              height: auto;
                display: flex;
                flex-wrap: wrap;
                margin: 1%;
                justify-content: center;

            }
            .card{
                margin: 1%;
                box-shadow: -10px 15px 3px rgba(16, 16, 16, 0.5);
            }
            footer{
              flex-wrap: wrap;
              display: flex;
              color:#d3d3de;
              padding: 2%;
            }
            footer > div{
              /*border: #d3d3de solid 2px;*/
              width: 300px;
              height: 300px;
              display: flex;
              flex-direction: column;
              justify-content: center;
            }
            .stair-card{
              width: 18rem;
              height: 400px;
              position: relative;
              margin-left: 20px;
              margin-top: 20px;
            }
            .stair-card:nth-child(2){
              margin-top: 50px;
              height: 425px;
            }
            .stair-card:nth-child(3){
              margin-top: 80px;
              height: 425px;
            }
        </style> */ -->
        <title>fortrain Evolution</title>
    </head>
<body>
    <!-- <header>
      <h1 style="position: absolute; font-family: 'Island Moments', sans-serif; font-size: 2.5rem;"><img src="./img/logo.png" class="logo">Fortran Evolution</h1>
        <nav class="navbar navbar-expand-lg position-absolute">
            <div class="container-fluid flex-row-reverse" style="margin:0 0 0 10%;">
              <a class="navbar-brand" href="#" style="color: #d3d3de;"><i class="bi bi-person" style="color: #d3d3de;"></i>Entrar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" style="color: #d3d3de;">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Servicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Información</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" style="color:#d3d3de;" aria-disabled="true">Contacto</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav> -->
          <div style="width: 100%; background: #eee; padding: 5%;">
          <?php
          if($_SERVER["REQUEST_METHOD"] === "POST"){
            $mensaje = $_POST["mensaje"];
            echo "<p>$mensaje</p>";
          }else{
            echo "<p>no se recibió mensaje</p>";
          }
          ?>
          </div>
        <img src="./img/fondo.png" class="cabecera">
        <div style="height: 350px; padding: 2%;">
            <div class="redes-sociales">
                <i class="bi bi-instagram"></i>
                <i class="bi bi-facebook"></i>
                <i class="bi bi-twitter"></i>
            </div>
        </div>
    </header>

    <footer>
      <div class="footer1">
        <h2 style="font-family: 'Island Moments', sans-serif;"><img src="./img/logo2.png" style="width: 15%;">fortrain evolution</h2>
        <p>Tel: 054 914-123-456</p>
        <p>Email: email@gmail.com</p>
        <p>Dirección:</p>
        <p>Av Santa Fe 1600.</p> 
        <p>B.A. Argentina</p>
      </div>
      <div class="footer2">
        <a href="#">Inicio</a>
        <a href="#">Servicio</a>
        <a href="#">Soluciones</a>
        <a href="#">Información</a>
      </div>
      <div class="footer3">
      </div>
      <div class="footer4">
        <p>Siguenos en:</p>
        <i class="bi bi-facebook"> facebook</i>
        <i class="bi bi-instagram"> instagram</i>
        <a href="#">política de privacidad</a>
        <p>Fortran Design</p>
      </div>
    </footer>
    <center>
      <div>
        <a href="#" class="btn btn-warning">volver arriba</a>
      </div>
    </center>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>