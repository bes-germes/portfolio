<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Impact Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link href="https://myfonts.ru/myfonts?fonts=lack-line" rel="stylesheet" type="text/css" />
  <link href="https://myfonts.ru/myfonts?fonts=vasek" rel="stylesheet" type="text/css" />
  <link href="https://myfonts.ru/myfonts?fonts=lack" rel="stylesheet" type="text/css" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <?php

  require_once('../potfolio/config/settings.php');
  $db = new dbFunc();
  $db = $db->dbConn();


  ?>


</head>

<body class="index-page">

  <header id="header" class="header fixed-top">
    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">ПОРТФОЛИО</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="progect_all.php">Проекты<br></a></li>
            <li><a href="#about">Команды</a></li>
            <li><a href="vocancy.php">Вакансии</a></li>
            <li><a href="profile.php">
                <div class="text-center">
                  <img src="assets\img\MAGNWwAFX6E.jpg" class="rounded" alt="..." style="width: 50px; height: 50px;">
                </div>
              </a>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">
    <!-- About Section -->
    <section id="about" class="about section" style="background-color: #F6F6F6;">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <div class="row" style="padding-top: 60px;">
          <div class="col d-flex justify-content-left">
            <h1>Представляем вам</h1>
          </div>
        </div><!-- End Section Title -->
        <div class="row" style="padding-left: 150px; padding-top: 0rem; margin: 0">
          <div class="col d-flex justify-content-left">
            <p style="font-family: 'Vasek', arial; font-size: 96px; color: #EA5657; margin: 0; line-height: .8em;">
              лучшие проекты</p>
          </div>
        </div><!-- End Section Title -->
        <div class="row" style="padding-left: 300px; padding-top: 0rem; margin: 0">
          <div class="col d-flex justify-content-left">
            <h1>базовой кафедры №536</h1>
          </div>
        </div><!-- End Section Title -->

        <div class="container" style="margin-top: 2rem;">

          <?php
          $query = 'SELECT * FROM public.info_user;';
          $result = pg_query($db, $query) or die('Ошибка запроса: ' . pg_last_error($db));

          while ($line = pg_fetch_array($result)) {
            $cur_idx = $line['id'] + 1;
          ?>
            <form action="profile.php" method="post">
              <button type="submit" style="border: none; background-color: #F6F6F6;">
                <div class="d-flex flex-row" style="background-color: #F6F6F6; color: #202020; padding: 3rem 3% 3rem 0; font-family: 'Helvetica', arial; font-size: 36px; font-weight: lighter;">
                  <div class="d-flex flex-column">
                    <h1 class="d-inline-flex" style="text-align: left;">
                      <?php
                      $idx_length = strlen((string)$cur_idx);
                      if ($idx_length > 1) {
                        print_r($cur_idx--);
                      } else {
                        print_r('0' . (string)$cur_idx--);
                      } ?>
                  </div>
                  </h1>
                  <div class="d-flex justify-content-start" style="border-color: #202020; border-left: 2px solid; margin-left: 2rem;">
                    <div class="d-inline-flex" style="margin-left: 3%;">
                      <img src="assets\img\team\photo-1620067925093-801122ac1408.avif" alt="..." style="width: 150px; height: 200px; border-radius: 50%;">
                    </div>
                    <div class="d-flex flex-column">
                      <div class="d-inline-flex align-items-center" style="padding-left: 3rem; color: #EA5657; margin-bottom: 1rem;">
                        <div class="d-inline-flex" style="color: #EA5657; font-family: 'Lack', arial; font-size: 48px; font-weight: lighter; text-align: left;">
                          <?= $line['firstname'] ?> <?= $line['lastname'] ?></div>
                      </div>
                      <div class="d-inline-flex" style="padding-left: 3rem; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: lighter;
                       text-align: left; min-width: 100%; width: 75rem;">
                        Тут должно быть описание но в бд нет этой инфы ¯\_(ツ)_/¯
                      </div>
                      <div class="d-inline-flex justify-content-between" style="padding-left: 3rem; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: lighter;
                       text-align: left; min-width: 100%; width: 75rem;">
                        <div class="d-inline-flex p-2">

                          <div class="d-inline-flex p-2">
                            <div class="d-inline-flex p-2" style="align-items: center;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" color="#EA5657" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                              </svg>
                            </div>
                            <div class="d-inline-flex p-2">
                              12
                            </div>
                          </div>
                          <div class="d-inline-flex p-2" style="align-items: center;">
                            <div class=" d-inline-flex p-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-text" viewBox="0 0 16 16">
                                <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                              </svg>
                            </div>
                            <div class="d-inline-flex p-2">
                              1234
                            </div>
                          </div>
                        </div>
                        <div class="d-inline-flex p-2" style="align-items: center; color: #202020; font-family: 'Vasek', arial; font-size: 36px;">
                          <?= $line['tags'] ?>
                        </div>
                      </div>
                      <!-- <div class="d-inline-flex" style="padding-left: 3rem; min-width: 50%;">
                        <img src="<?= $line['preview'] ?>" class="img-fluid" alt="...">
                      </div> -->
                    </div>
                  </div>
                </div>

                <input hidden name="user_id" id="user_id" type="number" value="<?= $cur_idx ?>">
              </button>
            </form>
          <?php
          }
          ?>
        </div>
      </div>
    </section><!-- /About Section -->

  </main>

  <footer id="footer" class="footer accent-background" style="background-color: #202020;">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename"
              style="text-align: start; font-family: 'Lack', arial; font-size: 28px; color: #202020; margin: 0; font-weight: normal;"></span>Контакты</span>
          </a>
          <p
            style="text-align: start; font-family: 'Helvetica', arial; font-size: 16px; color: #202020; margin: 0 0 3rem 1rem; font-weight: 100;">
          </p> +7 (499) 215-65-65 доб. 2404 <br>
          vega@mirea.ru</p>
        </div>
      </div>
    </div>


  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"
    style="background-color: #202020;"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>