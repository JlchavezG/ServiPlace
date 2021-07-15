<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>ServicePlace | IscjlchavezG</title>
  </head>
  <body>
    <!-- inicia el contenedor principal -->
    <div class="container py-4">
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="darkSwitch" checked>
        <label class="form-check-label" for="darkSwitch">
          <svg class="bi" width="15" height="15" fill="currentColor">
              <use xlink:href="main/icons/bootstrap-icons.svg#brightness-high-fill"/>
          </svg> |
          <svg class="bi" width="15" height="15" fill="currentColor">
              <use xlink:href="main/icons/bootstrap-icons.svg#moon-stars-fill"/>
          </svg>
        </label>
      </div>
      <div class="row justify-content-center h-100 py-4">
           <img src="img/Logo_iscjlchavez-craken.png" class="rounded mx-auto d-block" alt="Logotipo iscjlchavezg" style="width:250px;">
      </div>
      <div class="row justify-content-center h-100">
         <div class="col-sm-8 col-md-6 col-lg-6 rounded">
             <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                      <form class="" action="index.html" method="post">
                        <div class="input-group mb-3">
                           <span class="input-group-text" id="basic-addon1">
                             <svg class="bi" width="15" height="15" fill="currentColor">
                                 <use xlink:href="main/icons/bootstrap-icons.svg#person-fill"/>
                             </svg>
                           </span>
                           <input type="text" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                           <span class="input-group-text" id="basic-addon1">
                             <svg class="bi" width="15" height="15" fill="currentColor">
                                 <use xlink:href="main/icons/bootstrap-icons.svg#lock-fill"/>
                             </svg>
                           </span>
                           <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-sm" type="button"> Ingresar</button>
                        </div>
                      </form>
                </div>
         </div>
      </div>
      <div class="container text-center">
          <p class="text-center text-muted py-2">Sistema desarrollado por el trayecto de desarrollo web</p>
          <div class="row text-start">
               <div class="col"></div>
               <div class="col">
                 <a href="#" class="text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><svg class="bi" width="15" height="15" fill="currentColor">
                     <use xlink:href="main/icons/bootstrap-icons.svg#info-circle"/>
                 </svg><span> Ayuda</span></a>
               </div>
          </div>
      </div>
        <!-- termina la linea principal -->
    </div>
    <!-- termina el contenedor principal -->
    <div class="container py-2">
          <p class="text-center"><a href="mailto:iscjlchavez@hotmail.com" class="text-decoration-none text-info">IscjlchavezG@desarrollorWeb</a></p>
          <div class="row text-center">
               <div class="col">
                 <svg class="bi" width="18" height="18" fill="currentColor">
                     <use xlink:href="main/icons/bootstrap-icons.svg#facebook"/>
                 </svg>
                 <svg class="bi" width="18" height="18" fill="currentColor">
                     <use xlink:href="main/icons/bootstrap-icons.svg#whatsapp"/>
                 </svg>
                 <svg class="bi" width="18" height="18" fill="currentColor">
                     <use xlink:href="main/icons/bootstrap-icons.svg#twitter"/>
                 </svg>
               </div>
          </div>
   </div>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
             <h5 id="offcanvasRightLabel"> Ayuda</h5>
             <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <p class="text-justify">Para ingresar a la plataforma por favor ingresa el usuario y password si aun no tienes cuenta por favor registrate.</p>
        </div>
  </div>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/dark-mode.js"></script>
  </body>
</html>
