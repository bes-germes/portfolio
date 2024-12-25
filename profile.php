<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Impact Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Include jQuery. -->
  <script type="text/javascript" src="assets/js/jquery-3.7.1.min.js"></script>

  <!-- Include Thumbelina CSS. -->
  <link rel="stylesheet" type="text/css" href="assets/css/thumbelina.css" />

  <!-- Include Thumbelina script. -->
  <script type="text/javascript" src="assets/js/thumbelina.js"></script>

  <!-- Create sliders. -->
  <script type="text/javascript">
    $(function() {

      $('#slider1').Thumbelina({
        $bwdBut: $('#slider1 .left'), // Selector to left button.
        $fwdBut: $('#slider1 .right') // Selector to right button.
      });

      $('#slider2').Thumbelina({
        $bwdBut: $('#slider2 .left'), // Selector to left button.
        $fwdBut: $('#slider2 .right') // Selector to right button.
      });

      $('#slider23').Thumbelina({
        $bwdBut: $('#slider23 .left'), // Selector to left button.
        $fwdBut: $('#slider23 .right') // Selector to right button.
      });

      $('#slider3').Thumbelina({
        orientation: 'vertical', // Use vertical mode (default horizontal).
        $bwdBut: $('#slider3 .top'), // Selector to top button.
        $fwdBut: $('#slider3 .bottom') // Selector to bottom button.
      });

    })
  </script>

  <style type="text/css">
    /* Some styles for the containers */
    #slider1 {
      position: relative;
      /* Containers need relative or absolute position. */
      margin-left: 20px;
      width: 256px;
      height: 120px;
      border-top: 1px solid #aaa;
      border-bottom: 1px solid #aaa;
    }

    #slider2 {
      position: relative;
      margin-left: 20px;
      width: 75%;
      height: 120px;
      border-top: 1px solid #aaa;
      border-bottom: 1px solid #aaa;
    }

    #slider23 {
      position: relative;
      margin-left: 20px;
      width: 75%;
      height: 120px;
      border-top: 1px solid #aaa;
      border-bottom: 1px solid #aaa;
    }

    #slider3 {
      position: relative;
      margin-top: 40px;
      width: 93px;
      height: 256px;
      border-left: 1px solid #aaa;
      border-right: 1px solid #aaa;
      margin-bottom: 40px;
    }
  </style>

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
            <li><a href="find_team.php">Команды</a></li>
            <li><a href="vocancy.php">Вакансии</a></li>
            <li><a href="profile.php">
                <div class="text-center">
                  <img src="assets\img\MAGNWwAFX6E.jpg" class="rounded" alt="..." style="width: 50px; height: 50px;">
                </div>
              </a></li>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">

    <?php


    require_once('config/settings.php');
    $db = new dbFunc();
    $db = $db->dbConn();


    if (isset($_POST['user_id'])) {
      $user_id = $_POST['user_id'];
    } else {
      $user_id = 0;
    }

    $query = 'SELECT * FROM public.info_user WHERE id = ' . $user_id . ';';
    $result_query = pg_query($db, $query) or die('Ошибка запроса: ' . pg_last_error($db));
    $result = pg_fetch_array($result_query);

    $query_tags = 'SELECT name FROM public.info_tags WHERE id in ' . str_replace(['{', '}'], ['(', ')'], $result['skills']) . ';';
    $result__tags = pg_query($db, $query_tags) or die('Ошибка запроса: ' . pg_last_error($db));

    $skilss_array = array();

    while ($skill = pg_fetch_array($result__tags)) {
      array_push($skilss_array, $skill['name']);
    }


    ?>
    <!-- About Section -->
    <section id="about" class="about section" style="background-color: #F6F6F6;">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up" style="margin-top: 2rem;">
        <div class="d-inline-flex p-2" style="align-items: center;">
          <div class="text-center" style="margin-right: 2rem;">
            <img src="assets\img\MAGNWwAFX6E.jpg" alt="..." style="width: 150px; height: 150px; border-radius: 50%;">
          </div>
          <p style="font-family: 'Vasek', arial; font-size: 96px; color: #EA5657; margin: 0; line-height: .8em;">
            <?= $result['firstname'] ?> <?= $result['lastname'] ?>
          </p>
        </div>
      </div>

      </div>
      <div class="container section-title" data-aos="fade-up" style="margin-top: 2rem;">
        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; padding: 3rem 0 1rem 0; font-family: 'Lack', arial; font-size: 32px; font-weight: normal;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">//</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">Основная информация</div>
          </div>
          <div class="d-inline-flex">
            <div class="d-inline-flex">Ссылки</div>
            <div class="d-inline-flex" style="padding-left: 1rem; padding-right: 3rem;">//</div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: 100;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">Группа:</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">КММО-01-23</div>
          </div>
          <div class="d-inline-flex">
            <div class="d-inline-flex">https://github.com/</div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: 100;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">Год приёма:</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">2023</div>
          </div>
          <div class="d-inline-flex">
            <div class="d-inline-flex">https://github.com/</div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: 100;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">Курс:</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">
              2 курс</div>
          </div>
          <div class="d-inline-flex">
            <div class="d-inline-flex">https://github.com/</div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: 100;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">Шифр:</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">Хз не помню</div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: 100;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">Институт:</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">ИИИ</div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: 100;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">Специальность:</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">Прикладная математика и информатика</div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: 100;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">Образовательная программа:</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">Бакалавриат</div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: 100;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">Навыки:</div>
            <div class="d-inline-flex" style="padding-left: 1rem; text-align: left;"><?= implode(', ', $skilss_array) ?></div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; padding: 3rem 0 1rem 0; font-family: 'Lack', arial; font-size: 32px; font-weight: normal;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">//</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">О себе</div>
          </div>
        </div>
        <div class="d-flex flex-row justify-content-between"
          style="text-align: left; background-color: #F6F6F6; color: #202020; padding: 0 0 3rem 0; font-family: 'Helvetica', arial; font-size: 24px; font-weight: 100;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">
              <?= $result['about_myself'] ?>
            </div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; padding: 3rem 0 1rem 0; font-family: 'Lack', arial; font-size: 32px; font-weight: normal;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">//</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">Проекты</div>
          </div>
        </div>

        <div class="container" style="margin-top: 3rem;">

          <?php
          $query = 'SELECT * FROM public.info_project WHERE id = 1;';
          $result = pg_query($db, $query) or die('Ошибка запроса: ' . pg_last_error($db));

          while ($line = pg_fetch_array($result)) {
            $cur_idx = $line['id'] + 1;
          ?>
            <form action="project_view.php" method="post">
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
                  <div style="border-color: #202020; border-left: 2px solid; margin-left: 2rem;">
                    <div class="d-flex flex-column" style="margin-left: 3%;">
                      <div class="d-inline-flex align-items-center" style="padding-left: 3rem; color: #EA5657; margin-bottom: 1rem;">
                        <div class="d-inline-flex" style="color: #EA5657; font-family: 'Lack', arial; font-size: 48px; font-weight: lighter; text-align: left;">
                          <?= $line['name'] ?></div>
                      </div>
                      <div class="d-inline-flex" style="padding-left: 3rem; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: lighter;
                       text-align: left; min-width: 100%; width: 75rem;">
                        <?= $line['appointment'] ?>
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

                <input hidden name="id" id="id" type="number" value="<?= $cur_idx ?>">
              </button>
            </form>
          <?php
          }
          ?>
        </div>

      </div>





    </section><!-- /About Section -->

    <section id="about" class="about section" style="background-color: #F6F6F6; padding-bottom: 0;">

      <div class="d-flex justify-content-begin bd-highlight"
        style="background-color: #202020; border-radius: 20px 20px 0 0;">
        <p
          style="color: #F6F6F6; font-family: 'Helvetica', arial; font-size: 64px; padding: 5% 0 5% 5%; font-weight: 100; width: 100%; line-height: 1.5rem;">
          Артефакты
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