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

  require_once('../portfolio/config/settings.php');
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
          $query = 'SELECT id, name, status, start, duration, goal, appointment, stack, tags, "references", artefacts, achievements, roles_participants, vacancys
          FROM public.info_project;';
          $result = pg_query($db, $query) or die('Ошибка запроса: ' . pg_last_error($db));

          while ($line = pg_fetch_array($result)) {
            $cur_idx = $line['id'];
          ?>
            <form action="project_view.php" method="post">
              <button type="submit" style="border: none; background-color: #F6F6F6;">
                <div style="margin-bottom: 3rem;">
                  <div class="row">
                    <div class="col-4 d-flex justify-content-left"
                      style="border-top: 0; border-right: 2px solid #202020; border-left: 0; border-bottom: 0; max-width: 10%; padding-bottom: 2rem;">
                      <h1><?= $line['id'] ?></h1>
                    </div>
                    <div class="col-8 d-flex justify-content-left"
                      style="font-family: 'Lack', arial; font-size: 48px; color: #EA5657; line-height: .5em; padding-left: 170px;">
                      <?= $line['name'] ?></div>
                  </div>
                  <div class="row">
                    <div class="col-4 d-flex justify-content-left"
                      style="border-top: 0; border-right: 2px solid #202020; border-left: 0; border-bottom: 0; max-width: 10%; padding-bottom: 2rem;">
                      <h1 style="color: #F6F6F6;">01</h1>
                    </div>
                    <div class="col d-flex justify-content-left"
                      style="font-family: 'Helvetica', arial; font-weight: lighter; font-size: 24px; color: #202020; line-height: 1.2em; padding-left: 170px; text-align: left;">
                      <?= $line['appointment'] ?></div>

                  </div>

                  <div class="d-flex flex-row justify-content-between align-items: end;" style="background-color: #F6F6F6; color: #202020; padding: 3rem 3% 3rem 23%; font-family: 'Helvetica', arial; font-size: 24px; font-weight: lighter;">
                    <div class="d-inline-flex">
                      <div class="d-inline-flex">
                        <div class="d-inline-flex">1444<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#EA5657" class="bi bi-heart-fill"
                            viewBox="0 0 32 32" style="padding-top: 1rem;">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                          </svg>
                        </div>
                      </div>
                      <div class="d-inline-flex">
                        <div class="d-inline-flex">213<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-chat-left-text" viewBox="0 0 20 20">
                            <path
                              d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path
                              d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div class="d-inline-flex" style="color: #202020; font-family: 'Vasek', arial; font-size: 36px;">
                      <div class="d-inline-flex">
                        <?= $line['tags'] ?>
                      </div>
                    </div>
                  </div>
                  <input hidden name="id" id="id" type="number" value="<?= $cur_idx ?>">
              </button>
            </form>
          <?php
          }
          ?>
        </div>
      </div>
    </section><!-- /About Section -->

    <a href="progect_all.php">
      <div class="d-flex justify-content-end bd-highlight" style="background-color: #EA5657;">
        <div class="p-2 bd-highlight" style="color: #F6F6F6; font-family: 'Vasek', arial; font-size: 48px;">Посмотрите все
          наши проекты</div>

        <div class="p-2 bd-highlight"
          style="color: #F6F6F6; font-family: 'Vasek', arial; font-size: 48px; margin-right: 2rem;"> <svg
            xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
          </svg></div>
      </div>
    </a>

    <section id="about" class="about section" style="background-color: #F6F6F6;">

      <div class="d-flex justify-content-begin bd-highlight"
        style="background-color: #202020; border-radius: 20px 20px 0 0;">
        <p
          style="color: #F6F6F6; font-family: 'Helvetica', arial; font-size: 2.5rem; padding: 5% 0 0 3%; font-weight: 100; width: 100%; line-height: 1.5rem;">
          А
          это основные
        </p>
      </div>
      <div class="d-flex justify-content-begin" style="background-color: #202020;">
        <p
          style="color: #EA5657; font-family: 'Vasek', arial; font-size: 5rem; padding-left: 13%; font-weight: 100; width: 100%; line-height: 1.5rem;">
          направления
        </p>
      </div>
      <div class="d-flex justify-content-begin" style="background-color: #202020; padding-bottom: 5rem;">
        <p
          style="color: #F6F6F6; font-family: 'Helvetica', arial; font-size: 2.5rem; padding-left: 20%; font-weight: 100; width: 100%; line-height: 1.5rem;">
          исследований и разработки
        </p>
      </div>
      <div>
        <hr style="margin: 0;">
        <div class="d-flex flex-row justify-content-between"
          style="background-color: #202020; color: #F6F6F6; padding: 3rem 3% 3rem 3%; font-family: 'Helvetica', arial; font-size: 24px; font-weight: lighter;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">//</div>
            <div class="d-inline-flex" style="padding-left: 5rem;">Frontend</div>
          </div>
          <div class="d-inline-flex">
            <div class="d-inline-flex">PHP</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">JS</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">CSS</div>
            <div class="d-inline-flex"
              style="color: #F6F6F6; font-family: 'Vasek', arial; font-size: 48px; margin-left: 2rem;"> <svg
                xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
                </path>
              </svg></div>
          </div>
        </div>
      </div>
      <hr style="margin: 0;">
      <div class="d-flex flex-row justify-content-between"
        style="background-color: #202020; color: #F6F6F6; padding: 3rem 3% 3rem 3%; font-family: 'Helvetica', arial; font-size: 24px; font-weight: lighter;">
        <div class="d-inline-flex">
          <div class="d-inline-flex">//</div>
          <div class="d-inline-flex" style="padding-left: 5rem;">Backend</div>
        </div>
        <div class="d-inline-flex">
          <div class="d-inline-flex">C#</div>
          <div class="d-inline-flex" style="padding-left: 1rem;">Python</div>
          <div class="d-inline-flex" style="padding-left: 1rem;">C/C++</div>
          <div class="d-inline-flex" style="padding-left: 1rem; ">Java</div>
          <div class="d-inline-flex"
            style="color: #F6F6F6; font-family: 'Vasek', arial; font-size: 48px; margin-left: 2rem;"> <svg
              xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
              </path>
            </svg></div>
        </div>
      </div>
      <hr style="margin: 0;">
      <div class="d-flex flex-row justify-content-between"
        style="background-color: #202020; color: #F6F6F6; padding: 3rem 3% 3rem 3%; font-family: 'Helvetica', arial; font-size: 24px; font-weight: lighter;">
        <div class="d-inline-flex">
          <div class="d-inline-flex">//</div>
          <div class="d-inline-flex" style="padding-left: 5rem;">DevOps</div>
        </div>
        <div class="d-inline-flex">
          <div class="d-inline-flex">Docker</div>
          <div class="d-inline-flex" style="padding-left: 1rem;">GitLab</div>
          <div class="d-inline-flex"
            style="color: #F6F6F6; font-family: 'Vasek', arial; font-size: 48px; margin-left: 2rem;"> <svg
              xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
              </path>
            </svg></div>
        </div>
      </div>
      <hr style="margin: 0;">
      <div class="d-flex flex-row justify-content-between"
        style="background-color: #202020; color: #F6F6F6; padding: 3rem 3% 3rem 3%; font-family: 'Helvetica', arial; font-size: 24px; font-weight: lighter;">
        <div class="d-inline-flex">
          <div class="d-inline-flex">//</div>
          <div class="d-inline-flex" style="padding-left: 5rem;">Web-дизайн</div>
        </div>
        <div class="d-inline-flex">
          <div class="d-inline-flex">Figma</div>
          <div class="d-inline-flex"
            style="color: #F6F6F6; font-family: 'Vasek', arial; font-size: 48px; margin-left: 2rem;"> <svg
              xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
              </path>
            </svg></div>
        </div>
      </div>
      <hr style="margin: 0;">
      <div class="d-flex flex-row justify-content-between"
        style="background-color: #202020; color: #F6F6F6; padding: 3rem 3% 3rem 3%; font-family: 'Helvetica', arial; font-size: 24px; font-weight: lighter;">
        <div class="d-inline-flex">
          <div class="d-inline-flex">//</div>
          <div class="d-inline-flex" style="padding-left: 5rem;">Data Science</div>
        </div>
        <div class="d-inline-flex">
          <div class="d-inline-flex">Spark</div>
          <div class="d-inline-flex"
            style="color: #F6F6F6; font-family: 'Vasek', arial; font-size: 48px; margin-left: 2rem;"> <svg
              xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
              </path>
            </svg></div>
        </div>
      </div>
      <hr style="margin: 0;">
      <div class="d-flex flex-row justify-content-between"
        style="background-color: #202020; color: #F6F6F6; padding: 3rem 3% 3rem 3%; font-family: 'Helvetica', arial; font-size: 24px; font-weight: lighter;">
        <div class="d-inline-flex">
          <div class="d-inline-flex">//</div>
          <div class="d-inline-flex" style="padding-left: 5rem;">AI технологии</div>
        </div>
        <div class="d-inline-flex">
          <div class="d-inline-flex">Azure</div>
          <div class="d-inline-flex" style="padding-left: 1rem;">OpenAI</div>
          <div class="d-inline-flex"
            style="color: #F6F6F6; font-family: 'Vasek', arial; font-size: 48px; margin-left: 2rem;"> <svg
              xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
              </path>
            </svg></div>
        </div>
      </div>
      <hr style="margin: 0;">
      <div class="d-flex flex-row justify-content-between"
        style="background-color: #202020; color: #F6F6F6; padding: 3rem 3% 3rem 3%; font-family: 'Helvetica', arial; font-size: 24px; font-weight: lighter;">
        <div class="d-inline-flex">
          <div class="d-inline-flex">//</div>
          <div class="d-inline-flex" style="padding-left: 5rem;">Базы данных</div>
        </div>
        <div class="d-inline-flex">
          <div class="d-inline-flex">MongoDB</div>
          <div class="d-inline-flex" style="padding-left: 1rem;">PostgresSQl</div>
          <div class="d-inline-flex"
            style="color: #F6F6F6; font-family: 'Vasek', arial; font-size: 48px; margin-left: 2rem;"> <svg
              xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
              </path>
            </svg></div>
        </div>
      </div>
      <hr style="margin: 0;">
      <div class="d-flex flex-row justify-content-between"
        style="background-color: #202020; color: #F6F6F6; padding: 3rem 3% 3rem 3%; font-family: 'Helvetica', arial; font-size: 24px; font-weight: lighter;">
        <div class="d-inline-flex">
          <div class="d-inline-flex">//</div>
          <div class="d-inline-flex" style="padding-left: 5rem;">Боты</div>
        </div>
        <div class="d-inline-flex">
          <div class="d-inline-flex">Telegram Bot</div>
          <div class="d-inline-flex"
            style="color: #F6F6F6; font-family: 'Vasek', arial; font-size: 48px; margin-left: 2rem;"> <svg
              xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
              </path>
            </svg></div>
        </div>
      </div>
      </div>
    </section>

    <section id="glory" class="about section" style="background-color: #F6F6F6; margin: 0;">
      <div class="container section-title" data-aos="fade-up">
        <div class="row" style="padding-top: 60px;">
          <div class="col d-flex justify-content-left">
            <h1>Наши звёзды с</h1>
          </div>
        </div><!-- End Section Title -->
        <div class="row" style="padding-left: 150px; padding-top: 0rem; margin: 0">
          <div class="col d-flex justify-content-left">
            <p style="font-family: 'Vasek', arial; font-size: 96px; color: #EA5657; margin: 0; line-height: .8em;">
              Аллеи Славы</p>
          </div>
        </div><!-- End Section Title -->
        <div class="row" style="padding-left: 300px; padding-top: 0rem; margin: 0">
          <div class="col d-flex justify-content-left">
            <h1>сияют ярче, чем в Голливуде</h1>
          </div>
        </div><!-- End Section Title -->


        <div class="bd-example">
          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item carousel-item-next carousel-item-start" data-bs-interval="10000">
                <svg width="500.00000000000006" height="480" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                  class="bi bi-star-fill" style="margin-bottom: 5rem;">
                  <g>
                    <title>Layer 1</title>
                    <path
                      d="m112.6083,466.54868c-12.03834,6.17511 -25.69843,-4.64693 -23.26581,-18.46295l25.88556,-147.51649l-109.87327,-104.66497c-10.26066,-9.79285 -4.92761,-27.69443 8.82604,-29.62805l152.75597,-21.70644l68.11332,-134.94796c6.14392,-12.16309 22.76682,-12.16309 28.91074,0l68.11332,134.94796l152.75597,21.70644c13.75365,1.93362 19.0867,19.8352 8.79485,29.62805l-109.84209,104.66497l25.88556,147.51649c2.43262,13.81603 -11.22747,24.63806 -23.26581,18.46295l-136.94395,-70.35881l-136.88158,70.35881l0.03119,0z"
                      id="svg_1" />
                    <ellipse stroke="#ff0000" stroke-width="4" ry="120.22019" rx="117" id="svg_7" cy="262.22019"
                      cx="246" />
                    <path fill="none"
                      d="m262,380c1,0 2,0 3,0c1,0 3,0 4,0c1,0 2,0 3,0c1,0 2.02676,0.22977 3,0c2.17624,-0.51373 3,-1 4,-1c1,0 2,-1 5,-1c1,0 2,-1 3,-1c1,0 2.02676,0.22977 3,0c2.17624,-0.51373 3,-1 5,-1c1,0 2,-1 3,-1c2,0 4.29291,-0.29291 5,-1c0.70709,-0.70709 1.69345,-1.4588 3,-2c0.92389,-0.38269 2.07611,0.38269 3,0c1.30655,-0.5412 2.186,-0.69254 4,-2c1.14728,-0.8269 2,-1 3,-1c1,0 2.07611,-0.61731 3,-1c1.30655,-0.5412 1.82376,-2.48627 4,-3c1.9465,-0.4595 2.69345,-1.4588 4,-2c0.92389,-0.38269 2.29291,-0.29291 3,-1c0.70709,-0.70709 0.29291,-1.29291 1,-2c0.70709,-0.70709 2.14935,-0.47427 3,-1c1.9021,-1.17557 2.186,-2.69254 4,-4c1.14728,-0.8269 1.29291,-1.29291 2,-2c0.70709,-0.70709 1.07611,-0.61731 2,-1c1.30655,-0.5412 1.29291,-1.29291 2,-2c0.70709,-0.70709 1.4588,-0.69345 2,-2c0.38269,-0.92389 1.29291,-0.29291 2,-1c0.70709,-0.70709 1.29291,-2.29291 2,-3c0.70709,-0.70709 1.29291,-0.29291 2,-1c0.70709,-0.70709 0.29291,-1.29291 1,-2c0.70709,-0.70709 1.29291,-0.29291 2,-1c0.70709,-0.70709 0.4588,-1.69345 1,-3c0.38269,-0.92389 0.29291,-1.29291 1,-2c0.70709,-0.70709 1.29291,-0.29291 2,-1c0.70709,-0.70709 0.4588,-1.69345 1,-3c0.38269,-0.92389 1.48627,-0.82376 2,-3c0.22977,-0.97324 0.29291,-1.29291 1,-2c0.70709,-0.70709 1,-1 1,-2l2,-2"
                      id="svg_9" stroke-width="4" stroke="#ff0000" />
                    <path fill="none"
                      d="m140,207c0,-1 1.77025,-3.02675 2,-4c0.51375,-2.17625 -0.07193,-5.61104 2,-8c1.46507,-1.68924 2.29289,-2.29289 3,-3c0.70711,-0.70711 1.41885,-0.41885 3,-2c1.58115,-1.58115 1.85274,-3.1731 3,-4c1.814,-1.30745 3.41885,-3.41885 5,-5c1.58115,-1.58115 1,-3 2,-4c2,-2 2.29289,-3.29289 3,-4c0.70711,-0.70711 1,-1 2,-2c1,-1 1.69255,-2.186 3,-4c0.8269,-1.14726 1.186,-1.69255 3,-3c1.14726,-0.8269 1.77025,-3.02675 2,-4c0.51375,-2.17625 1.69255,-3.186 3,-5c0.8269,-1.14726 2.4588,-1.69344 3,-3c0.38269,-0.92387 0.29289,-2.29289 1,-3c0.70711,-0.70711 2.29289,-0.29289 3,-1c0.70711,-0.70711 0.85274,-2.1731 2,-3c1.814,-1.30745 2.85274,-2.1731 4,-3c1.814,-1.30745 3.29289,-2.29289 4,-3c0.70711,-0.70711 2,0 3,-1c1,-1 3.29289,-1.29289 4,-2c0.70711,-0.70711 2.29289,0.70711 3,0c0.70711,-0.70711 1,-1 2,-1l1,0l1,0"
                      id="svg_10" stroke-width="4" stroke="#ff0000" />
                    <path fill="none"
                      d="m142,194c0,1 -0.29289,1.29289 -1,2c-0.70711,0.70711 -0.4588,1.69344 -1,3c-0.38269,0.92387 -0.4588,3.69344 -1,5c-0.38269,0.92387 -1,2 -1,3c0,1 -1,2 -1,3c0,1 -0.4588,1.69344 -1,3c-0.76537,1.84776 -0.4588,2.69344 -1,4c-0.76537,1.84776 -1,4 -1,5c0,1 -0.4588,1.69344 -1,3c-0.38269,0.92387 0,2 0,3c0,1 -0.4588,1.69344 -1,3c-0.38269,0.92387 0,2 -1,3c-1,1 -1.48625,2.82375 -2,5c-0.22975,0.97325 -1,2 -1,3c0,1 -0.1731,1.85274 -1,3c-1.30745,1.814 -0.23463,3.15224 -1,5c-0.5412,1.30656 -1,2 -1,3c0,1 0,2 0,3c0,1 0,2 0,3c0,1 -1,2 -1,3c0,1 0,2 0,3c0,2 0,3 0,5c0,1 0,3 0,5c0,2 0,4 0,5c0,1 0,2 0,3c0,2 1,3 1,5c0,1 1.4588,1.69345 2,3c0.76537,1.84775 -0.4595,3.0535 0,5c0.51374,2.17624 1,3 1,5c0,1 -0.22975,4.02676 0,5c0.51375,2.17624 1,4 1,5c0,2 0,3 0,4c0,1 0,2 0,3c0,1 0.5405,2.0535 1,4c0.51375,2.17624 1,3 1,4c0,1 1,2 1,4c0,1 0.4588,1.69345 1,3c0.38269,0.92389 2,3 2,5c0,1 0.29289,2.29291 1,3c0.70711,0.70709 1.9176,1.38687 3,4c0.38269,0.92389 0.4588,1.69345 1,3c0.38269,0.92389 -0.05147,1.29871 1,3c1.17557,1.9021 3,3 4,4c2,2 3.41528,4.18875 4,5c1.84901,2.56537 6.88855,4.19409 12,7c3.9203,2.15204 6.797,4.2565 8,5c2.68999,1.66251 6.86829,2.28857 11,4c2.92157,1.21014 4.64749,2.9725 9,4c3.89299,0.91901 7,1 11,1c5,0 10,0 14,0c3,0 5,0 7,0c1,0 2,0 4,0c1,0 2,1 4,1c1,0 3.02248,-0.36655 6,0c4.09221,0.50378 5.69344,1.4588 7,2c1.84776,0.76538 6.93796,0.49829 13,1c3.98636,0.32993 6,0 7,0c1,0 3.03873,-0.48056 6,0c3.12143,0.50653 7,1 9,1c2,0 3,0 6,0c2,0 5,0 7,0c1,0 2,0 3,0c1,0 2.07611,0.38269 3,0c1.30655,-0.5412 3.14935,-0.47427 4,-1c1.9021,-1.17557 2.69345,-2.4588 4,-3c0.92389,-0.38269 0.41885,-1.41885 2,-3c1.58115,-1.58115 4,-2 5,-3c1,-1 2,-2 4,-4c1,-1 1.07611,-1.61731 2,-2c1.30655,-0.5412 3,-4 5,-5c2,-1 4.07611,-2.61731 5,-3c1.30655,-0.5412 1.29291,-1.29291 2,-2c0.70709,-0.70709 1.07611,-0.61731 2,-1c1.30655,-0.5412 1.85272,-1.1731 3,-2c1.814,-1.30746 3.07611,-2.61731 4,-3c1.30655,-0.5412 2.29291,-1.29291 3,-2c0.70709,-0.70709 0.29291,-2.29291 1,-3c0.70709,-0.70709 1,-1 2,-1c1,0 0.29291,-1.29291 1,-2c0.70709,-0.70709 1.4588,-0.69345 2,-2c0.38269,-0.92389 2,-2 2,-3l0,-1"
                      id="svg_12" stroke-width="4" stroke="#ff0000" />
                    <path fill="none"
                      d="m364,322c0,-1 0,-2 0,-3c0,-1 0.29291,-1.29291 1,-2c0.70709,-0.70709 -0.70709,-2.29291 0,-3c0.70709,-0.70709 1.4588,-0.69345 2,-2c1.14804,-2.77164 0.23462,-4.15225 1,-6c0.5412,-1.30655 1,-2 1,-3c0,-2 1.48627,-3.82376 2,-6c0.4595,-1.9465 -0.14804,-4.22836 1,-7c0.5412,-1.30655 0.23462,-2.15225 1,-4c0.5412,-1.30655 2,-4 2,-5c0,-1 0.4588,-1.69345 1,-3c0.76538,-1.84775 0,-3 0,-4c0,-1 0,-2 0,-3c0,-1 0,-2 0,-3c0,-2 0,-4 0,-6c0,-1 0,-2 0,-4c0,-2 0,-3 0,-4c0,-1 0,-2 0,-3c0,-2 0,-3 0,-4c0,-3 0,-5 0,-8c0,-1 -0.61731,-3.07613 -1,-4c-0.5412,-1.30656 -1.49347,-2.87856 -2,-6c-0.32037,-1.97418 -0.42044,-5.08582 -1,-7c-1.04483,-3.45085 -2.51944,-5.03874 -3,-8c-0.50653,-3.12144 -2.4588,-3.69344 -3,-5c-0.38269,-0.92387 0,-2 -1,-3c-1,-1 -2,-2 -3,-3c-1,-1 -2,-3 -4,-5c-1,-1 -1,-3 -2,-4c-1,-1 -0.29291,-2.29289 -1,-3c-0.70709,-0.70711 -1,-1 -2,-2c-1,-1 -0.41885,-2.41885 -2,-4c-1.58115,-1.58115 -2,-2 -3,-3c-1,-1 -3.85272,-4.1731 -5,-5c-1.814,-1.30745 -2,-2 -3,-3c-1,-1 -1,-2 -2,-2c-1,0 -1.29291,-1.29289 -2,-2c-0.70709,-0.70711 -3,-1 -5,-2c-2,-1 -3,-2 -5,-3c-2,-1 -4.29291,-0.29289 -5,-1c-0.70709,-0.70711 -0.29291,-1.29289 -1,-2c-0.70709,-0.70711 -1.0535,-0.5405 -3,-1c-2.17624,-0.51375 -6.31,-3.33749 -9,-5c-1.203,-0.7435 -1,-2 -2,-2c-1,0 -2,0 -3,0c-1,0 -1.29291,-0.29289 -2,-1c-0.70709,-0.70711 -1,-1 -2,-1c-1,0 -1,-1 -2,-1l-1,0l0,-1l-1,0"
                      id="svg_13" stroke-width="4" stroke="#ff0000" />
                  </g>

                </svg>


                <div class="carousel-caption d-none d-md-block">
                  <h5>Лучший дизайнер</h5>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <svg width="500.00000000000006" height="480" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                  class="bi bi-star-fill" style="margin-bottom: 5rem;">
                  <g>
                    <title>Layer 1</title>
                    <path
                      d="m112.6083,466.54868c-12.03834,6.17511 -25.69843,-4.64693 -23.26581,-18.46295l25.88556,-147.51649l-109.87327,-104.66497c-10.26066,-9.79285 -4.92761,-27.69443 8.82604,-29.62805l152.75597,-21.70644l68.11332,-134.94796c6.14392,-12.16309 22.76682,-12.16309 28.91074,0l68.11332,134.94796l152.75597,21.70644c13.75365,1.93362 19.0867,19.8352 8.79485,29.62805l-109.84209,104.66497l25.88556,147.51649c2.43262,13.81603 -11.22747,24.63806 -23.26581,18.46295l-136.94395,-70.35881l-136.88158,70.35881l0.03119,0z"
                      id="svg_1" />
                    <ellipse stroke="#ff0000" stroke-width="4" ry="120.22019" rx="117" id="svg_7" cy="262.22019"
                      cx="246" />
                    <path fill="none"
                      d="m262,380c1,0 2,0 3,0c1,0 3,0 4,0c1,0 2,0 3,0c1,0 2.02676,0.22977 3,0c2.17624,-0.51373 3,-1 4,-1c1,0 2,-1 5,-1c1,0 2,-1 3,-1c1,0 2.02676,0.22977 3,0c2.17624,-0.51373 3,-1 5,-1c1,0 2,-1 3,-1c2,0 4.29291,-0.29291 5,-1c0.70709,-0.70709 1.69345,-1.4588 3,-2c0.92389,-0.38269 2.07611,0.38269 3,0c1.30655,-0.5412 2.186,-0.69254 4,-2c1.14728,-0.8269 2,-1 3,-1c1,0 2.07611,-0.61731 3,-1c1.30655,-0.5412 1.82376,-2.48627 4,-3c1.9465,-0.4595 2.69345,-1.4588 4,-2c0.92389,-0.38269 2.29291,-0.29291 3,-1c0.70709,-0.70709 0.29291,-1.29291 1,-2c0.70709,-0.70709 2.14935,-0.47427 3,-1c1.9021,-1.17557 2.186,-2.69254 4,-4c1.14728,-0.8269 1.29291,-1.29291 2,-2c0.70709,-0.70709 1.07611,-0.61731 2,-1c1.30655,-0.5412 1.29291,-1.29291 2,-2c0.70709,-0.70709 1.4588,-0.69345 2,-2c0.38269,-0.92389 1.29291,-0.29291 2,-1c0.70709,-0.70709 1.29291,-2.29291 2,-3c0.70709,-0.70709 1.29291,-0.29291 2,-1c0.70709,-0.70709 0.29291,-1.29291 1,-2c0.70709,-0.70709 1.29291,-0.29291 2,-1c0.70709,-0.70709 0.4588,-1.69345 1,-3c0.38269,-0.92389 0.29291,-1.29291 1,-2c0.70709,-0.70709 1.29291,-0.29291 2,-1c0.70709,-0.70709 0.4588,-1.69345 1,-3c0.38269,-0.92389 1.48627,-0.82376 2,-3c0.22977,-0.97324 0.29291,-1.29291 1,-2c0.70709,-0.70709 1,-1 1,-2l2,-2"
                      id="svg_9" stroke-width="4" stroke="#ff0000" />
                    <path fill="none"
                      d="m140,207c0,-1 1.77025,-3.02675 2,-4c0.51375,-2.17625 -0.07193,-5.61104 2,-8c1.46507,-1.68924 2.29289,-2.29289 3,-3c0.70711,-0.70711 1.41885,-0.41885 3,-2c1.58115,-1.58115 1.85274,-3.1731 3,-4c1.814,-1.30745 3.41885,-3.41885 5,-5c1.58115,-1.58115 1,-3 2,-4c2,-2 2.29289,-3.29289 3,-4c0.70711,-0.70711 1,-1 2,-2c1,-1 1.69255,-2.186 3,-4c0.8269,-1.14726 1.186,-1.69255 3,-3c1.14726,-0.8269 1.77025,-3.02675 2,-4c0.51375,-2.17625 1.69255,-3.186 3,-5c0.8269,-1.14726 2.4588,-1.69344 3,-3c0.38269,-0.92387 0.29289,-2.29289 1,-3c0.70711,-0.70711 2.29289,-0.29289 3,-1c0.70711,-0.70711 0.85274,-2.1731 2,-3c1.814,-1.30745 2.85274,-2.1731 4,-3c1.814,-1.30745 3.29289,-2.29289 4,-3c0.70711,-0.70711 2,0 3,-1c1,-1 3.29289,-1.29289 4,-2c0.70711,-0.70711 2.29289,0.70711 3,0c0.70711,-0.70711 1,-1 2,-1l1,0l1,0"
                      id="svg_10" stroke-width="4" stroke="#ff0000" />
                    <path fill="none"
                      d="m142,194c0,1 -0.29289,1.29289 -1,2c-0.70711,0.70711 -0.4588,1.69344 -1,3c-0.38269,0.92387 -0.4588,3.69344 -1,5c-0.38269,0.92387 -1,2 -1,3c0,1 -1,2 -1,3c0,1 -0.4588,1.69344 -1,3c-0.76537,1.84776 -0.4588,2.69344 -1,4c-0.76537,1.84776 -1,4 -1,5c0,1 -0.4588,1.69344 -1,3c-0.38269,0.92387 0,2 0,3c0,1 -0.4588,1.69344 -1,3c-0.38269,0.92387 0,2 -1,3c-1,1 -1.48625,2.82375 -2,5c-0.22975,0.97325 -1,2 -1,3c0,1 -0.1731,1.85274 -1,3c-1.30745,1.814 -0.23463,3.15224 -1,5c-0.5412,1.30656 -1,2 -1,3c0,1 0,2 0,3c0,1 0,2 0,3c0,1 -1,2 -1,3c0,1 0,2 0,3c0,2 0,3 0,5c0,1 0,3 0,5c0,2 0,4 0,5c0,1 0,2 0,3c0,2 1,3 1,5c0,1 1.4588,1.69345 2,3c0.76537,1.84775 -0.4595,3.0535 0,5c0.51374,2.17624 1,3 1,5c0,1 -0.22975,4.02676 0,5c0.51375,2.17624 1,4 1,5c0,2 0,3 0,4c0,1 0,2 0,3c0,1 0.5405,2.0535 1,4c0.51375,2.17624 1,3 1,4c0,1 1,2 1,4c0,1 0.4588,1.69345 1,3c0.38269,0.92389 2,3 2,5c0,1 0.29289,2.29291 1,3c0.70711,0.70709 1.9176,1.38687 3,4c0.38269,0.92389 0.4588,1.69345 1,3c0.38269,0.92389 -0.05147,1.29871 1,3c1.17557,1.9021 3,3 4,4c2,2 3.41528,4.18875 4,5c1.84901,2.56537 6.88855,4.19409 12,7c3.9203,2.15204 6.797,4.2565 8,5c2.68999,1.66251 6.86829,2.28857 11,4c2.92157,1.21014 4.64749,2.9725 9,4c3.89299,0.91901 7,1 11,1c5,0 10,0 14,0c3,0 5,0 7,0c1,0 2,0 4,0c1,0 2,1 4,1c1,0 3.02248,-0.36655 6,0c4.09221,0.50378 5.69344,1.4588 7,2c1.84776,0.76538 6.93796,0.49829 13,1c3.98636,0.32993 6,0 7,0c1,0 3.03873,-0.48056 6,0c3.12143,0.50653 7,1 9,1c2,0 3,0 6,0c2,0 5,0 7,0c1,0 2,0 3,0c1,0 2.07611,0.38269 3,0c1.30655,-0.5412 3.14935,-0.47427 4,-1c1.9021,-1.17557 2.69345,-2.4588 4,-3c0.92389,-0.38269 0.41885,-1.41885 2,-3c1.58115,-1.58115 4,-2 5,-3c1,-1 2,-2 4,-4c1,-1 1.07611,-1.61731 2,-2c1.30655,-0.5412 3,-4 5,-5c2,-1 4.07611,-2.61731 5,-3c1.30655,-0.5412 1.29291,-1.29291 2,-2c0.70709,-0.70709 1.07611,-0.61731 2,-1c1.30655,-0.5412 1.85272,-1.1731 3,-2c1.814,-1.30746 3.07611,-2.61731 4,-3c1.30655,-0.5412 2.29291,-1.29291 3,-2c0.70709,-0.70709 0.29291,-2.29291 1,-3c0.70709,-0.70709 1,-1 2,-1c1,0 0.29291,-1.29291 1,-2c0.70709,-0.70709 1.4588,-0.69345 2,-2c0.38269,-0.92389 2,-2 2,-3l0,-1"
                      id="svg_12" stroke-width="4" stroke="#ff0000" />
                    <path fill="none"
                      d="m364,322c0,-1 0,-2 0,-3c0,-1 0.29291,-1.29291 1,-2c0.70709,-0.70709 -0.70709,-2.29291 0,-3c0.70709,-0.70709 1.4588,-0.69345 2,-2c1.14804,-2.77164 0.23462,-4.15225 1,-6c0.5412,-1.30655 1,-2 1,-3c0,-2 1.48627,-3.82376 2,-6c0.4595,-1.9465 -0.14804,-4.22836 1,-7c0.5412,-1.30655 0.23462,-2.15225 1,-4c0.5412,-1.30655 2,-4 2,-5c0,-1 0.4588,-1.69345 1,-3c0.76538,-1.84775 0,-3 0,-4c0,-1 0,-2 0,-3c0,-1 0,-2 0,-3c0,-2 0,-4 0,-6c0,-1 0,-2 0,-4c0,-2 0,-3 0,-4c0,-1 0,-2 0,-3c0,-2 0,-3 0,-4c0,-3 0,-5 0,-8c0,-1 -0.61731,-3.07613 -1,-4c-0.5412,-1.30656 -1.49347,-2.87856 -2,-6c-0.32037,-1.97418 -0.42044,-5.08582 -1,-7c-1.04483,-3.45085 -2.51944,-5.03874 -3,-8c-0.50653,-3.12144 -2.4588,-3.69344 -3,-5c-0.38269,-0.92387 0,-2 -1,-3c-1,-1 -2,-2 -3,-3c-1,-1 -2,-3 -4,-5c-1,-1 -1,-3 -2,-4c-1,-1 -0.29291,-2.29289 -1,-3c-0.70709,-0.70711 -1,-1 -2,-2c-1,-1 -0.41885,-2.41885 -2,-4c-1.58115,-1.58115 -2,-2 -3,-3c-1,-1 -3.85272,-4.1731 -5,-5c-1.814,-1.30745 -2,-2 -3,-3c-1,-1 -1,-2 -2,-2c-1,0 -1.29291,-1.29289 -2,-2c-0.70709,-0.70711 -3,-1 -5,-2c-2,-1 -3,-2 -5,-3c-2,-1 -4.29291,-0.29289 -5,-1c-0.70709,-0.70711 -0.29291,-1.29289 -1,-2c-0.70709,-0.70711 -1.0535,-0.5405 -3,-1c-2.17624,-0.51375 -6.31,-3.33749 -9,-5c-1.203,-0.7435 -1,-2 -2,-2c-1,0 -2,0 -3,0c-1,0 -1.29291,-0.29289 -2,-1c-0.70709,-0.70711 -1,-1 -2,-1c-1,0 -1,-1 -2,-1l-1,0l0,-1l-1,0"
                      id="svg_13" stroke-width="4" stroke="#ff0000" />
                  </g>

                </svg>


                <div class="carousel-caption d-none d-md-block">
                  <h5>Руководитель</h5>
                </div>
              </div>
              <div class="carousel-item active carousel-item-start">
                <svg width="500.00000000000006" height="480" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                  class="bi bi-star-fill" style="margin-bottom: 5rem;">
                  <g>
                    <title>Layer 1</title>
                    <path
                      d="m112.6083,466.54868c-12.03834,6.17511 -25.69843,-4.64693 -23.26581,-18.46295l25.88556,-147.51649l-109.87327,-104.66497c-10.26066,-9.79285 -4.92761,-27.69443 8.82604,-29.62805l152.75597,-21.70644l68.11332,-134.94796c6.14392,-12.16309 22.76682,-12.16309 28.91074,0l68.11332,134.94796l152.75597,21.70644c13.75365,1.93362 19.0867,19.8352 8.79485,29.62805l-109.84209,104.66497l25.88556,147.51649c2.43262,13.81603 -11.22747,24.63806 -23.26581,18.46295l-136.94395,-70.35881l-136.88158,70.35881l0.03119,0z"
                      id="svg_1" />
                    <ellipse stroke="#ff0000" stroke-width="4" ry="120.22019" rx="117" id="svg_7" cy="262.22019"
                      cx="246" />
                    <path fill="none"
                      d="m262,380c1,0 2,0 3,0c1,0 3,0 4,0c1,0 2,0 3,0c1,0 2.02676,0.22977 3,0c2.17624,-0.51373 3,-1 4,-1c1,0 2,-1 5,-1c1,0 2,-1 3,-1c1,0 2.02676,0.22977 3,0c2.17624,-0.51373 3,-1 5,-1c1,0 2,-1 3,-1c2,0 4.29291,-0.29291 5,-1c0.70709,-0.70709 1.69345,-1.4588 3,-2c0.92389,-0.38269 2.07611,0.38269 3,0c1.30655,-0.5412 2.186,-0.69254 4,-2c1.14728,-0.8269 2,-1 3,-1c1,0 2.07611,-0.61731 3,-1c1.30655,-0.5412 1.82376,-2.48627 4,-3c1.9465,-0.4595 2.69345,-1.4588 4,-2c0.92389,-0.38269 2.29291,-0.29291 3,-1c0.70709,-0.70709 0.29291,-1.29291 1,-2c0.70709,-0.70709 2.14935,-0.47427 3,-1c1.9021,-1.17557 2.186,-2.69254 4,-4c1.14728,-0.8269 1.29291,-1.29291 2,-2c0.70709,-0.70709 1.07611,-0.61731 2,-1c1.30655,-0.5412 1.29291,-1.29291 2,-2c0.70709,-0.70709 1.4588,-0.69345 2,-2c0.38269,-0.92389 1.29291,-0.29291 2,-1c0.70709,-0.70709 1.29291,-2.29291 2,-3c0.70709,-0.70709 1.29291,-0.29291 2,-1c0.70709,-0.70709 0.29291,-1.29291 1,-2c0.70709,-0.70709 1.29291,-0.29291 2,-1c0.70709,-0.70709 0.4588,-1.69345 1,-3c0.38269,-0.92389 0.29291,-1.29291 1,-2c0.70709,-0.70709 1.29291,-0.29291 2,-1c0.70709,-0.70709 0.4588,-1.69345 1,-3c0.38269,-0.92389 1.48627,-0.82376 2,-3c0.22977,-0.97324 0.29291,-1.29291 1,-2c0.70709,-0.70709 1,-1 1,-2l2,-2"
                      id="svg_9" stroke-width="4" stroke="#ff0000" />
                    <path fill="none"
                      d="m140,207c0,-1 1.77025,-3.02675 2,-4c0.51375,-2.17625 -0.07193,-5.61104 2,-8c1.46507,-1.68924 2.29289,-2.29289 3,-3c0.70711,-0.70711 1.41885,-0.41885 3,-2c1.58115,-1.58115 1.85274,-3.1731 3,-4c1.814,-1.30745 3.41885,-3.41885 5,-5c1.58115,-1.58115 1,-3 2,-4c2,-2 2.29289,-3.29289 3,-4c0.70711,-0.70711 1,-1 2,-2c1,-1 1.69255,-2.186 3,-4c0.8269,-1.14726 1.186,-1.69255 3,-3c1.14726,-0.8269 1.77025,-3.02675 2,-4c0.51375,-2.17625 1.69255,-3.186 3,-5c0.8269,-1.14726 2.4588,-1.69344 3,-3c0.38269,-0.92387 0.29289,-2.29289 1,-3c0.70711,-0.70711 2.29289,-0.29289 3,-1c0.70711,-0.70711 0.85274,-2.1731 2,-3c1.814,-1.30745 2.85274,-2.1731 4,-3c1.814,-1.30745 3.29289,-2.29289 4,-3c0.70711,-0.70711 2,0 3,-1c1,-1 3.29289,-1.29289 4,-2c0.70711,-0.70711 2.29289,0.70711 3,0c0.70711,-0.70711 1,-1 2,-1l1,0l1,0"
                      id="svg_10" stroke-width="4" stroke="#ff0000" />
                    <path fill="none"
                      d="m142,194c0,1 -0.29289,1.29289 -1,2c-0.70711,0.70711 -0.4588,1.69344 -1,3c-0.38269,0.92387 -0.4588,3.69344 -1,5c-0.38269,0.92387 -1,2 -1,3c0,1 -1,2 -1,3c0,1 -0.4588,1.69344 -1,3c-0.76537,1.84776 -0.4588,2.69344 -1,4c-0.76537,1.84776 -1,4 -1,5c0,1 -0.4588,1.69344 -1,3c-0.38269,0.92387 0,2 0,3c0,1 -0.4588,1.69344 -1,3c-0.38269,0.92387 0,2 -1,3c-1,1 -1.48625,2.82375 -2,5c-0.22975,0.97325 -1,2 -1,3c0,1 -0.1731,1.85274 -1,3c-1.30745,1.814 -0.23463,3.15224 -1,5c-0.5412,1.30656 -1,2 -1,3c0,1 0,2 0,3c0,1 0,2 0,3c0,1 -1,2 -1,3c0,1 0,2 0,3c0,2 0,3 0,5c0,1 0,3 0,5c0,2 0,4 0,5c0,1 0,2 0,3c0,2 1,3 1,5c0,1 1.4588,1.69345 2,3c0.76537,1.84775 -0.4595,3.0535 0,5c0.51374,2.17624 1,3 1,5c0,1 -0.22975,4.02676 0,5c0.51375,2.17624 1,4 1,5c0,2 0,3 0,4c0,1 0,2 0,3c0,1 0.5405,2.0535 1,4c0.51375,2.17624 1,3 1,4c0,1 1,2 1,4c0,1 0.4588,1.69345 1,3c0.38269,0.92389 2,3 2,5c0,1 0.29289,2.29291 1,3c0.70711,0.70709 1.9176,1.38687 3,4c0.38269,0.92389 0.4588,1.69345 1,3c0.38269,0.92389 -0.05147,1.29871 1,3c1.17557,1.9021 3,3 4,4c2,2 3.41528,4.18875 4,5c1.84901,2.56537 6.88855,4.19409 12,7c3.9203,2.15204 6.797,4.2565 8,5c2.68999,1.66251 6.86829,2.28857 11,4c2.92157,1.21014 4.64749,2.9725 9,4c3.89299,0.91901 7,1 11,1c5,0 10,0 14,0c3,0 5,0 7,0c1,0 2,0 4,0c1,0 2,1 4,1c1,0 3.02248,-0.36655 6,0c4.09221,0.50378 5.69344,1.4588 7,2c1.84776,0.76538 6.93796,0.49829 13,1c3.98636,0.32993 6,0 7,0c1,0 3.03873,-0.48056 6,0c3.12143,0.50653 7,1 9,1c2,0 3,0 6,0c2,0 5,0 7,0c1,0 2,0 3,0c1,0 2.07611,0.38269 3,0c1.30655,-0.5412 3.14935,-0.47427 4,-1c1.9021,-1.17557 2.69345,-2.4588 4,-3c0.92389,-0.38269 0.41885,-1.41885 2,-3c1.58115,-1.58115 4,-2 5,-3c1,-1 2,-2 4,-4c1,-1 1.07611,-1.61731 2,-2c1.30655,-0.5412 3,-4 5,-5c2,-1 4.07611,-2.61731 5,-3c1.30655,-0.5412 1.29291,-1.29291 2,-2c0.70709,-0.70709 1.07611,-0.61731 2,-1c1.30655,-0.5412 1.85272,-1.1731 3,-2c1.814,-1.30746 3.07611,-2.61731 4,-3c1.30655,-0.5412 2.29291,-1.29291 3,-2c0.70709,-0.70709 0.29291,-2.29291 1,-3c0.70709,-0.70709 1,-1 2,-1c1,0 0.29291,-1.29291 1,-2c0.70709,-0.70709 1.4588,-0.69345 2,-2c0.38269,-0.92389 2,-2 2,-3l0,-1"
                      id="svg_12" stroke-width="4" stroke="#ff0000" />
                    <path fill="none"
                      d="m364,322c0,-1 0,-2 0,-3c0,-1 0.29291,-1.29291 1,-2c0.70709,-0.70709 -0.70709,-2.29291 0,-3c0.70709,-0.70709 1.4588,-0.69345 2,-2c1.14804,-2.77164 0.23462,-4.15225 1,-6c0.5412,-1.30655 1,-2 1,-3c0,-2 1.48627,-3.82376 2,-6c0.4595,-1.9465 -0.14804,-4.22836 1,-7c0.5412,-1.30655 0.23462,-2.15225 1,-4c0.5412,-1.30655 2,-4 2,-5c0,-1 0.4588,-1.69345 1,-3c0.76538,-1.84775 0,-3 0,-4c0,-1 0,-2 0,-3c0,-1 0,-2 0,-3c0,-2 0,-4 0,-6c0,-1 0,-2 0,-4c0,-2 0,-3 0,-4c0,-1 0,-2 0,-3c0,-2 0,-3 0,-4c0,-3 0,-5 0,-8c0,-1 -0.61731,-3.07613 -1,-4c-0.5412,-1.30656 -1.49347,-2.87856 -2,-6c-0.32037,-1.97418 -0.42044,-5.08582 -1,-7c-1.04483,-3.45085 -2.51944,-5.03874 -3,-8c-0.50653,-3.12144 -2.4588,-3.69344 -3,-5c-0.38269,-0.92387 0,-2 -1,-3c-1,-1 -2,-2 -3,-3c-1,-1 -2,-3 -4,-5c-1,-1 -1,-3 -2,-4c-1,-1 -0.29291,-2.29289 -1,-3c-0.70709,-0.70711 -1,-1 -2,-2c-1,-1 -0.41885,-2.41885 -2,-4c-1.58115,-1.58115 -2,-2 -3,-3c-1,-1 -3.85272,-4.1731 -5,-5c-1.814,-1.30745 -2,-2 -3,-3c-1,-1 -1,-2 -2,-2c-1,0 -1.29291,-1.29289 -2,-2c-0.70709,-0.70711 -3,-1 -5,-2c-2,-1 -3,-2 -5,-3c-2,-1 -4.29291,-0.29289 -5,-1c-0.70709,-0.70711 -0.29291,-1.29289 -1,-2c-0.70709,-0.70711 -1.0535,-0.5405 -3,-1c-2.17624,-0.51375 -6.31,-3.33749 -9,-5c-1.203,-0.7435 -1,-2 -2,-2c-1,0 -2,0 -3,0c-1,0 -1.29291,-0.29289 -2,-1c-0.70709,-0.70711 -1,-1 -2,-1c-1,0 -1,-1 -2,-1l-1,0l0,-1l-1,0"
                      id="svg_13" stroke-width="4" stroke="#ff0000" />
                  </g>

                </svg>


                <div class="carousel-caption d-none d-md-block">
                  <h5>Frontend Dev</h5>
                </div>


              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </section>

    <section id="vocancy" class="about section" style="background-color: #F6F6F6; padding-bottom: 0;">
      <hr style="border-width: 3px; border-color: #202020;">
      <div class="container section-title" data-aos="fade-up">
        <div class="row" style="padding-top: 60px;">
          <div class="col d-flex justify-content-left">
            <h1>Открытые</h1>
          </div>
        </div><!-- End Section Title -->
        <div class="row" style="padding-left: 150px; padding-top: 0rem; margin: 0">
          <div class="col d-flex justify-content-left">
            <p style="font-family: 'Vasek', arial; font-size: 96px; color: #EA5657; margin: 0; line-height: .8em;">
              вакансии</p>
          </div>
        </div><!-- End Section Title -->
        <div class="row" style="padding-left: 300px; padding-top: 0rem; margin: 0">
          <div class="col d-flex justify-content-left">
            <h1>в команды</h1>
          </div>
          <div class="col d-flex justify-content-end">
            <button type="button" class="btn btn-outline-secondary"
              style="color:#202020; border-radius: 20px; border-color: #202020;">Добавить вакансию</button>
          </div>
        </div><!-- End Section Title -->
      </div>
      <hr style="border-width: 3px; border-color: #202020;">

      <div class="container section-title" data-aos="fade-up">
        <div class="row">
          <div class="col-6" style="margin: 0; padding: 0;">
            <div class="card" style="width: 100%; padding: 0; border-radius: 0px; margin: 0;">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-end mb-3">
                  <div class="bd-highlight"
                    style="text-align: start; font-family: 'Lack', arial; font-size: 36px; color: #EA5657; font-weight: normal;">
                    Программист C++</div>
                  <button type="button" class="btn btn-outline-secondary"
                    style="color:#202020; border-radius: 20px; border-color: #202020;">Откликнуться</button>
                </div>
              </div>

              <h6 class="card-subtitle d-flex justify-content-begin"
                style="text-align: start; font-family: 'Helvetica', arial; font-size: 20px; color: #202020; margin: 0 0 3rem 1rem; font-weight: 100;">
                Автоматизация проведения лабораторных работ по программированию</h6>
              <h6 class="card-subtitle d-flex justify-content-begin"
                style="text-align: start; font-family: 'Helvetica', arial; font-size: 18px; color: #202020; margin: 0 0 3rem 1rem; font-weight: 100;">
                Обязанности:</h6>
              <ul
                style="text-align: start; font-family: 'Helvetica', arial; font-size: 16px; color: #202020; margin: 0 0 3rem 1rem; font-weight: 100;">
                <li>Участие в разработке архитектуры и функций системы автоматизации лабораторных работ.
                </li>
                <li>Проектирование и реализация компонентов системы, включая интерфейсы для студентов и
                  преподавателей.
                </li>
                <li>Разработка алгоритмов автоматической проверки кода на различных языках программирования.</li>
                <li>Интеграция системы с внешними сервисами.
                </li>
                <li>Написание документации и проведение тестирования разработанных функций.

                </li>
                <li>Участие в код-ревью и обмене знаниями с командой.

                </li>
                <li>Поддержка и улучшение существующих функций системы на основе отзывов пользователей.
                </li>
              </ul>
            </div>
          </div>

          <div class="col-6" style="margin: 0; padding: 0;">
            <div class="card" style="width: 100%; padding: 0; border-radius: 0px; margin: 0;">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-end mb-3">
                  <div class="bd-highlight"
                    style="text-align: start; font-family: 'Lack', arial; font-size: 36px; color: #EA5657; font-weight: normal;">
                    Программист C++</div>
                  <button type="button" class="btn btn-outline-secondary"
                    style="color:#202020; border-radius: 20px; border-color: #202020;">Откликнуться</button>
                </div>
              </div>

              <h6 class="card-subtitle d-flex justify-content-begin"
                style="text-align: start; font-family: 'Helvetica', arial; font-size: 20px; color: #202020; margin: 0 0 3rem 1rem; font-weight: 100;">
                Автоматизация проведения лабораторных работ по программированию</h6>
              <h6 class="card-subtitle d-flex justify-content-begin"
                style="text-align: start; font-family: 'Helvetica', arial; font-size: 18px; color: #202020; margin: 0 0 3rem 1rem; font-weight: 100;">
                Обязанности:</h6>
              <ul
                style="text-align: start; font-family: 'Helvetica', arial; font-size: 16px; color: #202020; margin: 0 0 3rem 1rem; font-weight: 100;">
                <li>Участие в разработке архитектуры и функций системы автоматизации лабораторных работ.
                </li>
                <li>Проектирование и реализация компонентов системы, включая интерфейсы для студентов и
                  преподавателей.
                </li>
                <li>Разработка алгоритмов автоматической проверки кода на различных языках программирования.</li>
                <li>Интеграция системы с внешними сервисами.
                </li>
                <li>Написание документации и проведение тестирования разработанных функций.

                </li>
                <li>Участие в код-ревью и обмене знаниями с командой.

                </li>
                <li>Поддержка и улучшение существующих функций системы на основе отзывов пользователей.
                </li>
              </ul>
            </div>
          </div>

          <div class="col-6" style="margin: 0; padding: 0;">
            <div class="card" style="width: 100%; padding: 0; border-radius: 0px; margin: 0;">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-end mb-3">
                  <div class="bd-highlight"
                    style="text-align: start; font-family: 'Lack', arial; font-size: 36px; color: #EA5657; font-weight: normal;">
                    Программист C++</div>
                  <button type="button" class="btn btn-outline-secondary"
                    style="color:#202020; border-radius: 20px; border-color: #202020;">Откликнуться</button>
                </div>
              </div>

              <h6 class="card-subtitle d-flex justify-content-begin"
                style="text-align: start; font-family: 'Helvetica', arial; font-size: 20px; color: #202020; margin: 0 0 3rem 1rem; font-weight: 100;">
                Автоматизация проведения лабораторных работ по программированию</h6>
              <h6 class="card-subtitle d-flex justify-content-begin"
                style="text-align: start; font-family: 'Helvetica', arial; font-size: 18px; color: #202020; margin: 0 0 3rem 1rem; font-weight: 100;">
                Обязанности:</h6>
              <ul
                style="text-align: start; font-family: 'Helvetica', arial; font-size: 16px; color: #202020; margin: 0 0 3rem 1rem; font-weight: 100;">
                <li>Участие в разработке архитектуры и функций системы автоматизации лабораторных работ.
                </li>
                <li>Проектирование и реализация компонентов системы, включая интерфейсы для студентов и
                  преподавателей.
                </li>
                <li>Разработка алгоритмов автоматической проверки кода на различных языках программирования.</li>
                <li>Интеграция системы с внешними сервисами.
                </li>
                <li>Написание документации и проведение тестирования разработанных функций.

                </li>
                <li>Участие в код-ревью и обмене знаниями с командой.

                </li>
                <li>Поддержка и улучшение существующих функций системы на основе отзывов пользователей.
                </li>
              </ul>
            </div>
          </div>


        </div>

      </div>
      </div>

      <a href="vocancy.php">
        <div class="d-flex justify-content-end bd-highlight"
          style="background-color: #EA5657; border-radius: 0 0 20px 20px;">
          <div class="p-2 bd-highlight" style="color: #F6F6F6; font-family: 'Vasek', arial; font-size: 48px;">Посмотрите
            все
            вакансии</div>

          <div class="p-2 bd-highlight"
            style="color: #F6F6F6; font-family: 'Vasek', arial; font-size: 48px; margin-right: 2rem;"> <svg
              xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
              </path>
            </svg></div>
        </div>
      </a>
    </section>

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