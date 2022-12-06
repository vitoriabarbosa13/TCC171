<?php 
    if(!isset($_SESSION)){
     session_start();
    }
?>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/My project-2.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/My project-2.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/My project-2.png">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Libs CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    <!-- Title -->
    <title>Angels Pesca - Restaurante de Frutos do Mar</title>
  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark navbar-expand-lg navbar-togglable fixed-top">
      <div class="container">
    
        <!-- Navbar brand (mobile) -->
        <a class="navbar-brand d-lg-none" href="./index.php">Angels Pesca</a>
    
        <!-- Navbar toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Navbar collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
    
          <!-- Navbar nav -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="./about-us.html">Sobre nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./menu.html">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./reservation.php">Reservas</a>
            </li>
          </ul>
    
          <!-- Navbar brand -->
          <a class="navbar-brand d-none d-lg-flex mx-lg-auto" href="./index.php">
            Angels Pesca
          </a>
    
          <!-- Navbar nav -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="./news-and-events.html">Doe aqui</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./gallery.html">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./contact-us.html">Contate-nos</a>
            </li>
          </ul>
    
        </div>
      </div>
    </nav>

    <!-- HEADER -->
    <header data-jarallax data-speed=".8" style="background-image: url(assets/img/38.jpg);">
      <div class="pt-10 pb-8 pt-md-15 pb-md-13 bg-black-50">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">

              <!-- Heading -->
              <h1 class="display-6 fw-bold text-white">
                Reservas
              </h1>

            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- RESERVATION -->
    <section class="pt-7 pt-md-9">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">
              Reserve sua mesa online
            </h2>

            <!-- Subheading -->
            <p class="mb-6">
            </p>

          </div>
        </div>
        <div class="row justify-content-lg-center">
          <div class="col-lg-8">

            <!-- Form -->
            <form id="reservationForm" action="receberes.php" method="POST">
              <div class="row gx-3">
                <div class="col-md-6">

                  <!-- Contact number (hidden) -->
                  <input type="hidden" name="contact_number">

                  <!-- Full name -->
                  <div class="mb-3">
                    <label class="visually-hidden" for="user_name">Nome Completo</label>
                    <input class="form-control" id="user_name" name="nome_reserva" type="text" placeholder="Nome Completo" required>
                  </div>

                  <!-- Phone number -->
                  <div class="mb-3">
                    <label class="visually-hidden" for="user_phone">Telefone</label>
                    <input class="form-control" id="user_phone" name="tel_res" type="text" placeholder="Telefone" required>
                  </div>

                  <!-- Email address -->
                  <div class="mb-3">
                    <label class="visually-hidden" for="user_email">E-mail</label>
                    <input class="form-control" id="user_email" name="email_res" type="email" placeholder="E-mail" required>
                  </div>

                </div>
                <div class="col-md-6">

                  <!-- Guests -->
                  <div class="mb-3">
                    <label class="visually-hidden" for="guests">Número de pessoas</label>
                    <select class="form-select" id="guests" name="guests" required>
                      <option value="1">1 pessoa</option>
                      <option value="2" selected="">2 pessoas</option>
                      <option value="3">3 pessoas</option>
                      <option value="4">4 pessoas</option>
                      <option value="5">5 pessoas</option>
                    </select>
                  </div>

                  <!-- Date -->
                  <div class="mb-3">
                    <label class="visually-hidden" for="date">Data</label>
                    <input class="form-control" id="date" name="data_res" type="date" required>
                  </div>

                  <!-- Time -->
                  <div class="mb-3">
                    <label class="visually-hidden" for="time">Horário</label>
                    <select class="form-select" id="horario" name="horario" required>
                      <option value="1">10:00</option>
                      <option value="2" selected="">11:00</option>
                      <option value="3">12:00</option>
                      <option value="4">13:00</option>
                      <option value="5">14:00</option>
                      <option value="6">15:00</option>
                      <option value="7">19:00</option>
                      <option value="8">20:00</option>
                      <option value="9">21:00</option>
                      <option value="10">22:00</option>
                      <option value="11">23:00</option>
                    </div>
                    
                </div>
                <div class="col text-center">
                <input class="form-control" type="submit" value="RESERVAR">
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>

    <!-- PHONE -->
    <section class="py-7 py-md-9">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <div class="block-decoration-1 py-3">

              <!-- Text -->
              <p class="mb-2 text-xs text-center">
                Ligue para nós:
              </p>

              <!-- Phone -->
              <a class="display-6 font-serif text-decoration-none text-black" href="tel:+5522997271684">+55 22 99727-1684</a>

            </div>
          </div>
        </div>
      </div>
    </section>

      <!-- FOOTER -->
      <footer class="py-7 py-md-9 bg-black">
        <div class="container px-4">
          <div class="row gx-7">
            <div class="col-sm-4">
      
              <!-- Heading -->
              <h5 class="text-xs text-primary">
                Sobre Nós 
              </h5>
      
              <!-- Text -->
              <p class="mb-6">
                Uma vista linda, refeições saborosas e frescas, além de um íncrivel trabalho social na região.
              </p>
      
            </div>
            <div class="col-sm-4">
      
              <!-- Heading -->
              <h5 class="text-xs text-primary">
                Contate-nos
              </h5>
      
              <!-- List -->
              <ul class="list-unstyled mb-6">
                <li class="d-flex mb-2">
                  <div class="fas fa-map-marker-alt me-3 mt-2 fs-sm"></div>
                  Av. Luís Joaquim Corrêa, 300 - Vila Canaa, Arraial do Cabo - RJ, 28930-000
                </li>
                <li class="d-flex mb-2">
                  <div class="fas fa-phone me-3 mt-2 fs-sm"></div>
                  +55 22 99727-1684
                </li>
                <li class="d-flex">
                  <div class="far fa-envelope me-3 mt-2 fs-sm"></div> <a href="mailto:admin@domain.com">angelspescarest@gmail.com</a>
                </li>
              </ul>
      
            </div>
            <div class="col-sm-4">
      
              <!-- Heading -->
              <h5 class="text-xs text-primary">
                Horário de Funcionamento
              </h5>
      
              <!-- Text -->
              <div class="mb-3">
                <div class="text-xs">Segunda - Quinta</div>
                <div class="font-serif">10:00 AM - 23:00 PM</div>
              </div>
      
              <!-- Text -->
              <div class="mb-6">
                <div class="text-xs">Sexta - Domingo</div>
                <div class="font-serif">12:00 AM - 03:00 AM</div>
              </div>
      
            </div>
          </div>
          <div class="row">
            <div class="col-12">
      
              <!-- Copyright -->
              <div class="d-flex align-items-center">
                <hr class="hr-sm me-3" style="height: 1px;" /> &copy; 2023 AngelsPescaRestaurante.
                 Todos os direitos reservados.
              </div>
      
            </div>
          </div>
        </div>
      </footer>
      
      
      <!--  -->
      <!-- TOAST -->
      <div class="toast position-fixed bottom-0 start-50 translate-middle-x mb-3 mb-md-5" id="notification" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body mx-auto"></div>
        </div>
      </div>
  
      <!-- JAVASCRIPT -->
      <!-- Vendor JS -->
      <script src="./assets/js/vendor.bundle.js"></script>
      
      <!-- Theme JS -->
      <script src="./assets/js/theme.bundle.js"></script>
  
    </body>
  </html>
  