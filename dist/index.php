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
              <a class="nav-link " href="./about-us.html">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./menu.html">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./reservation.php">Reservas</a>
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
            <li class="nav-item">
              <a class="nav-link active" href="./login.php">Sair</a>
            </li>
          </ul>
    
        </div>
      </div>
    </nav>

    <!-- WELCOME -->
    <header data-jarallax data-speed=".8" style="background-image: url(assets/img/1.jpg);">
      <div class="d-flex flex-column min-vh-100 bg-black-50 pt-10 pt-md-8 pb-7 pb-md-0">
        <div class="container my-auto">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">

              <!-- Preheading -->
              <h6 class="text-xs text-white-75">
                <span class="text-primary">Restaurante</span> de pesca
              </h6>

              <!-- Heading -->
              <h1 class="display-1 text-white mb-4">
                Angels Pesca
              </h1>

              <!-- Subheading -->
              <p class="text-center text-white-75 mb-7">
                Um lugar único à beira-mar, na cidade de Arraial do Cabo. Pratos e bebibas únicas e refrescantes, fornecidos pelos pescadores locais.
              </p>

              <!-- Button -->
              <a class="btn btn-outline-primary text-white text-primary-hover mb-7 mb-md-0" href="#reservation">
                Faça uma reserva
              </a>

            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md">

        
                <li class="list-inline-item ms-5">
                  <a class="text-white-75 text-primary-hover" href="https://www.instagram.com/angelspesca/">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-md">

              <!-- Address -->
              <p class="font-serif text-white-75 text-center text-md-end text-lg-end my-md-5">
                <i class="fas fa-map-marker-alt text-primary me-3"></i> Av. Luís Joaquim Corrêa, 300 - Vila Canaa, Arraial do Cabo

              </p>

            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- DISCOVER -->
    <section class="pt-7 pt-md-9">
      <div class="container">
        <div class="row">
          <div class="col-md-2">

            <!-- Divider -->
            <hr class="hr-sm bg-primary">

            <!-- Text -->
            <p class="fs-lg lh-lg text-black mb-5 mb-md-0">
              Aproveite a íncrivel vista à beira-mar
            </p>

          </div>
          <div class="col-md-4">

            <!-- Media -->
            <div class="media-decoration media-decoration-1 mb-5 mb-md-0">

              <!-- Border -->
              <div class="media-decoration-border" data-jarallax-element="-40"></div>

              <!-- Image -->
              <img class="media-decoration-img img-fluid" src="assets/img/2.jpg" alt="...">

            </div>

          </div>
          <div class="col-md-5 align-self-center mx-auto">

            <!-- Heading -->
            <h2 class="mb-2">
              <em>Incrível</em> experiência
            </h2>

            <!-- Text -->
            <p class="mb-0">
             Nosso restaurante fornece uma vista íncrivel, enquanto você saboreia nossas iguarias e relaxa.
            </p>

          </div>
        </div>
      </div>
    </section>

    <!-- DISCOVER -->
    <section class="py-7 py-md-9">
      <div class="container">
        <div class="row">
          <div class="col-md-2 order-md-2 align-self-end">

            <!-- Divider -->
            <hr class="hr-sm bg-primary">

            <!-- Text -->
            <p class="fs-lg lh-lg text-black mb-5 mb-md-0">
              Uma grande variede de frutos do mar.
            </p>

          </div>
          <div class="col-md-4 order-md-3">

            <!-- Media -->
            <div class="media-decoration media-decoration-1 mb-5 mb-md-0">

              <!-- Solid -->
              <div class="media-decoration-solid" data-jarallax-element="-40"></div>

              <!-- Border -->
              <div class="media-decoration-border" data-jarallax-element="-40"></div>

              <!-- Image -->
              <img class="media-decoration-img img-fluid" src="assets/img/7.jpg" alt="...">

            </div>

          </div>
          <div class="col-md-5 order-md-1 align-self-center mx-auto">

            <!-- Heading -->
            <h2 class="mb-2">
              Pratos <em> saborosos</em> e íncriveis
            </h2>

            <!-- Text -->
            <p class="mb-0">
              Frutos do mar recém pescados pelos pescadores da região, contando com uma grande variedade de lagostas a peixes.
            </p>

          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section data-jarallax data-speed=".8" style="background-image: url(assets/img/19.jpg);">
      <div class="min-vh-100 py-7 py-md-9 bg-gradient-bottom-end-white">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">

              <!-- Divider -->
              <hr class="hr-sm bg-primary">

              <!-- Text -->
              <p class="fs-lg lh-lg text-black mb-0">
               
                Aproveite nossa especialidade.
                
              </p>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MENU -->
    <section class="py-7 py-md-9 border-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">
              Cardápio
            </h2>

            <!-- Subheading -->
            <p class="mb-6">
              Contamos com uma varieda de pratos deliciosos que irão te deixar com água na boca
            </p>

          </div>
        </div>
        <div class="row">
          <div class="col">

            <!-- Navigation -->
            <div class="nav justify-content-center mb-6" id="menuTabs" role="tablist">
              <a class="nav-link active" id="mainsTab" data-bs-toggle="tab" href="#mains" role="tab" aria-controls="mains" aria-selected="true">
                Sobremesas
              </a>
              <a class="nav-link" id="lunchTab" data-bs-toggle="tab" href="#lunch" role="tab" aria-controls="lunch">
                Almoço
              </a>
              <a class="nav-link" id="dinnerTab" data-bs-toggle="tab" href="#dinner" role="tab" aria-controls="dinner">
                Jantar 
              </a>
              <a class="nav-link" id="drinksTab" data-bs-toggle="tab" href="#drinks" role="tab" aria-controls="drinks">
                Bebidas
              </a>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-12">

            <!-- Content -->
            <div class="tab-content" id="menuContent">
              <div class="tab-pane fade show active" id="mains" role="tabpanel" aria-labelledby="mainsTab">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/26.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Torta de Canela</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Sobremesa delciosa feita de canela e chocolate. Você vai se apaixonar!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$25,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/27.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Mousse</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Mousse de maracujá, framboesa e morango disponíveis. Diversidade de sabores não falta aqui!
                                                   
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$7,50                        </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/28.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Donut de Chocolate</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Donut delicoso de Kit Kat e calda de chocolate. Um deleite pro seu paladar!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$10,50
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/29.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Torta de Jabuticaba</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Torta deliciosa feita de creme de baunilha e jabuticaba. Sabor ìncrivel!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$20,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/30.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Torta de Creme</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Torta deliciosa feita de creme e suspiro. O favorito da casa!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$25,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/31.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Brownie de Avelã</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Brownie íncrivel de chocolate e creme de avelã. Impossível não adorar!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$15,50
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunchTab">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/99.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Calzone de camarão</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Um clássico da cozinha! Nosso calzone vai te dar água na boca!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$15,50
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/98.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Moqueca de frutos do mar</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Quem não adora uma deliciosa moqueca  feita com frutos do mar recém-pescados? 
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$30,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/97.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Petit Gâteau de camarão</h5>

                          <!-- Text -->
                          <p class="mb-0">
                          Exótico e delicioso! Você nunca se esquecerá o sabor maravilhoso do nosso petit gâteau!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$27,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/96.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Risoto de frutos do mar</h5>

                          <!-- Text -->
                          <p class="mb-0">
                           Aproveite o nosso saboroso risoto que vem acompanhado de um delicoso caldo de peixe.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$20,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/95.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Lula recheada com legumes e camarão</h5>

                          <!-- Text -->
                          <p class="mb-0">
                           Além de uma lula deliciosa, uma íncrivel pasta de camarão, cebola e alho acompanha a mesma. 
                           Uma festa no seu paladar!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$35,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/94.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Bruschettas com anchovas</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Anchovas acompanham essas deliciosas bruschettas com tomate, alcachofra e mussarela. Você com
                            certeza irá se apaixonar!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$30,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinnerTab">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/93.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Peixe na brasa recheado</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Tainha, Xaréu, Anchova e Curvina disponíveis para esse prato íncrivel recheado com ervs finas.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$19,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/92.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Corvina ensopada</h5>

                          <!-- Text -->
                          <p class="mb-0">
                             Corvina temperada com ervas finas e salsa junto de legumes recém coletados. Um deleite 
                             pro seu paladar!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$25,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/91.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Peixe assado com batatas e legumes</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Tainha, Xaréu, Anchova e Curvina disponíveis para o preparo desse prato saboroso com cebola, salsa e brócolis.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$20,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/90.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Espaguete com Lula</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Prato exótico e delicioso feito de lula e massa com tomate.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$35,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/88.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2"> Sopa de mexilhões</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Sopa deliciosa feita de mexilhões, legumes e vinho branco. Sabor exótico e delicoso!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$23,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/87.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Caldeirada</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Prato feito com legumes, ervas e fruto do mar da sua escolha. Lula, Tainha, Xaréu, Anchova e Curvina disponíveis
                            .
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$35,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="drinks" role="tabpanel" aria-labelledby="drinksTab">
                <div class="row">

                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/78.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Garrafa de água</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Água mineral natural disponível. Clássico refrescante!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$2,50
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/79.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Drinks de Frutas</h5>

                          <!-- Text -->
                          <p class="mb-0">
                           Drink refrescante de maracujá, abacaxi, morango, manga, coco e hortelã. 
                           Diversifique e misture!  
                           Opções alcóolicas e não-alcóolicas disponíveis.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$25,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/80.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Pink Lemonade</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Drink feito com limão e cranberry. 
                            Seu sabor exótico é um dos favoritos da casa!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$15,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/81.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Milkshake de frutas</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Milkshake de manga, morango, coco e abacaxi disponíveis. Refrescante e saboroso!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$15,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/83.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Refrigerante</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Refrigerante de cola, limão e uva disponíveis. Refrescos maravilhosos!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$3,50
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/82.jpg" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Iced Coffe</h5>

                          <!-- Text -->
                          <p class="mb-0">
                              Café gelado e refrescante, disponível com chantilly e chocolate.
                              Opção sem lactose disponível.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            R$29,90
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- DISHES -->
    <section class="py-7 py-md-9 overflow-hidden">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">
            Nossos <em>favoritos</em>
            </h2>

            <!-- Subheading -->
            <p class="mb-6">
              Aqui estão os especiais da casa!
            </p>

          </div>
        </div>
        <div class="row">
          <div class="col-12">

            <!-- Slider -->
            <div class="flickity-viewport-visible" data-flickity='{"cellAlign": "left", "contain": true, "imagesLoaded": true, "pageDots": false}'>
              <div class="w-100 px-2" style="max-width: 320px;">

                <!-- Card -->
                <div class="card border-0">

                  <!-- Image -->
                  <img class="card-img-top" src="assets/img/944.jpg" alt="..." />

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Heading -->
                    <div class="row mb-2">
                      <div class="col">
                        <h5 class="mb-0">Bruschettas com anchovas </h5>
                      </div>
                      <div class="col-auto">
                        <span class="fs-4 font-serif text-black">R$30,90</span>
                      </div>
                    </div>

                    <!-- Text -->
                    <p class="mb-0">
                      Anchovas acompanham essas deliciosas bruschettas com tomate, alcachofra e mussarela. Sabor íncrivel!
                    </p>

                  </div>

                </div>

              </div>
              <div class="w-100 px-2" style="max-width: 320px;">

                <!-- Card -->
                <div class="card border-0">

                  <!-- Image -->
                  <img class="card-img-top" src="assets/img/27.jpg" alt="..." />

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Heading -->
                    <div class="row mb-2">
                      <div class="col">
                        <h5 class="mb-0">Mousse</h5>
                      </div>
                      <div class="col-auto">
                        <span class="fs-4 font-serif text-black">R$7,50</span>
                      </div>
                    </div>

                    <!-- Text -->
                    <p class="mb-0">
                      Mousse de maracujá, framboesa e morango disponíveis. Você vai adorar!
                    </p>

                  </div>

                </div>

              </div>
              <div class="w-100 px-2" style="max-width: 320px;">

                <!-- Card -->
                <div class="card border-0">

                  <!-- Image -->
                  <img class="card-img-top" src="assets/img/900.jpg" alt="..." />

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Heading -->
                    <div class="row mb-2">
                      <div class="col">
                        <h5 class="mb-0">Espaguete com Lula</h5>
                      </div>
                      <div class="col-auto">
                        <span class="fs-4 font-serif text-black">R$35,90</span>
                      </div>
                    </div>

                    <!-- Text -->
                    <p class="mb-0">
                      Prato exótico e delicioso feito de lula e massa com tomate. Prato perfeito pra você!
                    </p>

                  </div>

                </div>

              </div>
              <div class="w-100 px-2" style="max-width: 320px;">

                <!-- Card -->
                <div class="card border-0">

                  <!-- Image -->
                  <img class="card-img-top" src="assets/img/799.jpg" alt="..." />

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Heading -->
                    <div class="row mb-2">
                      <div class="col">
                        <h5 class="mb-0">Drinks de Frutas</h5>
                      </div>
                      <div class="col-auto">
                        <span class="fs-4 font-serif text-black">R$25,90</span>
                      </div>
                    </div>

                    <!-- Text -->
                    <p class="mb-0">
                      Drink refrescante de maracujá, abacaxi, morango, manga, coco e hortelã. Diversifique e misture!
                    </p>

                  </div>

                </div>

              </div>
              <div class="w-100 px-2" style="max-width: 320px;">

                <!-- Card -->
                <div class="card border-0">

                  <!-- Image -->
                  <img class="card-img-top" src="assets/img/30.jpg" alt="..." />

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Heading -->
                    <div class="row mb-2">
                      <div class="col">
                        <h5 class="mb-0">Torta de Creme e Suspiro</h5>
                      </div>
                      <div class="col-auto">
                        <span class="fs-4 font-serif text-black">R$25,90</span>
                      </div>
                    </div>

                    <!-- Text -->
                    <p class="mb-0">
                      Torta deliciosa feita de creme e suspiro. Não tem como não se apaixonar!
                    </p>

                  </div>

                </div>

              </div>
              <div class="w-100 px-2" style="max-width: 320px;">

                <!-- Card -->
                <div class="card border-0">

                  <!-- Image -->
                  <img class="card-img-top" src="assets/img/811.jpg" alt="..." />

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Heading -->
                    <div class="row mb-2">
                      <div class="col">
                        <h5 class="mb-0">Milkshake de frutas</h5>
                      </div>
                      <div class="col-auto">
                        <span class="fs-4 font-serif text-black">R$15,90</span>
                      </div>
                    </div>

                    <!-- Text -->
                    <p class="mb-0">
                      Milkshake de manga, morango, coco e abacaxi disponíveis. Refrescante e saboroso!
                    </p>

                  </div>

                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>


    <!-- RESERVATION -->
    <section class="py-7 py-md-9 bg-light" id="reservation">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">
              Faça a reserva online
            </h2>

            <!-- Subheading -->
            <p class="mb-6">            </p>

          </div>
        </div>
        <div class="row justify-content-lg-center">
          <div class="col-lg-8">

            <!-- Form -->
            <form id="reservationForm">
              <div class="row gx-3">
                <div class="col-md-6">

                  <!-- Contact number (hidden) -->
                  <input type="hidden" name="contact_number">

                  <!-- Full name -->
                  <div class="mb-3">
                    <label class="visually-hidden" for="user_name">Nome Completo</label>
                    <input class="form-control" id="user_name" name="user_name" type="text" placeholder="Nome Completo" required>
                  </div>

                  <!-- Phone number -->
                  <div class="mb-3">
                    <label class="visually-hidden" for="user_phone">Telefone</label>
                    <input class="form-control" id="user_phone" name="user_phone" type="tel" placeholder="Telefone" required>
                  </div>

                  <!-- Email address -->
                  <div class="mb-3">
                    <label class="visually-hidden" for="user_email">E-mail</label>
                    <input class="form-control" id="user_email" name="user_email" type="email" placeholder="E-mail" required>
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
                    <input class="form-control" id="date" name="date" type="date" value="2021-12-14" required>
                  </div>

                  <!-- Time -->
                  <div class="mb-3">
                    <label class="visually-hidden" for="time">Horário</label>
                    <input class="form-control" id="time" name="time" type="time" value="10:00" required>
                  </div>

                </div>
                <div class="col text-center">

                  <!-- Button -->
                  <button class="btn btn-outline-primary" type="submit">
                    Confirme a reserva
                  </button>

                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="py-7 py-md-9 border-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">
              Opiniões dos nossos clientes
            </h2>

            <!-- Subheading -->
            <p class="mb-6">
            </p>

          </div>
        </div>
        <div class="row">
          <div class="col-12">

            <!-- Slider -->
            <div data-flickity='{"imagesLoaded": true, "wrapAround": true}'>
              <div class="w-100">
                <div class="row align-items-center justify-content-center">
                  <div class="col-8 col-md-3 order-md-1">

                    <!-- Avatar -->
                    <img class="img-fluid rounded-circle mb-5 mb-md-0" src="assets/img/20.jpeg" alt="..." />

                  </div>
                  <div class="col-md-7 order-md-0">

                    <!-- Blockquote -->
                    <figure class="mx-auto mb-0" style="max-width: 500px;">
                      <blockquote class="blockquote mb-0">
                        <p class="font-serif text-black mb-5">
                          O preparo da comida foi muito rápido e os drinks são ìncriveis!
                        </p>
                      </blockquote>
                      <figcaption class="blockquote-footer text-xs mb-0">
                      José Lucas Rodrigues
                      </figcaption>
                    </figure>

                  </div>
                </div>
              </div>
              <div class="w-100">
                <div class="row align-items-center justify-content-center">
                  <div class="col-8 col-md-3 order-md-1">

                    <!-- Avatar -->
                    <img class="img-fluid rounded-circle mb-5 mb-md-0" src="assets/img/21.jpeg" alt="..." />

                  </div>
                  <div class="col-md-7 order-md-0">

                    <!-- Blockquote -->
                    <figure class="mx-auto mb-0" style="max-width: 500px;">
                      <blockquote class="blockquote mb-0">
                        <p class="font-serif text-black mb-5">
                         Eu achei íncrivel o trabalho volúntario que vocês fazem, além da comida ser uma delícia.
                        </p>
                      </blockquote>
                      <figcaption class="blockquote-footer text-xs mb-0">
                        João Lucas Mello
                      </figcaption>
                    </figure>

                  </div>
                </div>
              </div>
              <div class="w-100">
                <div class="row align-items-center justify-content-center">
                  <div class="col-8 col-md-3 order-md-1">

                    <!-- Avatar -->
                    <img class="img-fluid rounded-circle mb-5 mb-md-0" src="assets/img/22.jpeg" alt="..." />

                  </div>
                  <div class="col-md-7 order-md-0">

                    <!-- Blockquote -->
                    <figure class="mx-auto mb-0" style="max-width: 500px;">
                      <blockquote class="blockquote mb-0">
                        <p class="font-serif text-black mb-5">
                         Lagosta fresca e salada muito saborosa. Recomedo muito!                        </p>
                      </blockquote>
                      <figcaption class="blockquote-footer text-xs mb-0">
                        Kauane Ramos
                      </figcaption>
                    </figure>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- GALLERY -->
    <section class=" py-7 py-md-9">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">
              Galeria
            </h2>

            <!-- Subheading -->
            <p class=" mb-6">
              Dê uma olhada no nosso cantinho!
            </p>

          </div>
        </div>
        <div class="row gx-3" data-isotope>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "assets/img/11.jpg" }'>
              <img class="img-fluid" src="assets/img/11.jpg" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "assets/img/16.jpg" }'>
              <img class="img-fluid" src="assets/img/16.jpg" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "assets/img/13.jpeg" }'>
              <img class="img-fluid" src="assets/img/13.jpeg" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "assets/img/15.jpg" }'>
              <img class="img-fluid" src="assets/img/15.jpg" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "assets/img/14.jpg" }'>
              <img class="img-fluid" src="assets/img/14.jpg" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "assets/img/18.jpg" }'>
              <img class="img-fluid" src="assets/img/18.jpg" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "assets/img/17.jpg" }'>
              <img class="img-fluid" src="assets/img/17.jpg" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "assets/img/12.jpg" }'>
              <img class="img-fluid" src="assets/img/12.jpg" alt="...">
            </a>

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
                  Sobre nós:
                </h5>
        
                <!-- Text -->
                <p class="mb-6">
                  Uma vista linda, refeições saborosas e frescas, além de um íncrivel trabalho social na região.
                </p>
        
              </div>
              <div class="col-sm-4">
        
                <!-- Heading -->
                <h5 class="text-xs text-primary">
                  Contate-nos:
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
                    <div class="far fa-envelope me-3 mt-2 fs-sm"></div> <a href="mailto:angelspescarest@gmail.com">
                      angelspescarest@gmail.com</a>
                  </li>
                </ul>
        
              </div>
              <div class="col-sm-4">
        
                <!-- Heading -->
                <h5 class="text-xs text-primary">
                  Horário de Funcionamento:
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
