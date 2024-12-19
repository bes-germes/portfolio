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


    require_once('/xampp/htdocs/portfolio/config/settings.php');
    $db = new dbFunc();
    $db = $db->dbConn();



    $query = 'SELECT * FROM public.info_project WHERE id = ' . $_POST['id'] . ';';

    $result_query = pg_query($db, $query) or die('Ошибка запроса: ' . pg_last_error($db));
    $result = pg_fetch_array($result_query);

    $vowels = array("{", "}");
    $onlyconsonants = str_replace($vowels, " ", $result['stack']);

    $query_stack = "SELECT name FROM public.info_tags WHERE id = any(ARRAY[" . $onlyconsonants  . "]);";
    $result_query = pg_query($db, $query_stack) or die('Ошибка запроса: ' . pg_last_error($db));

    $stack = "";
    while ($row = pg_fetch_array($result_query)) {

      $stack .= $row["name"] . " ";
    }



    $query_link = "SELECT url FROM public.info_artefacts WHERE project_id = '" . $_POST['id'] . "';";
    $result_link = pg_query($db, $query_link) or die('Ошибка запроса: ' . pg_last_error($db));

    $link = array();
    while ($row = pg_fetch_array($result_link)) {

      array_push($link, $row['url']);
    }

    ?>
    <!-- About Section -->
    <section id="about" class="about section" style="background-color: #F6F6F6;">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up" style="margin-top: 2rem;">
        <p style="font-family: 'Vasek', arial; font-size: 96px; color: #EA5657; margin: 0; line-height: .8em;">
          <?= $result['name'] ?></p>

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
            <div class="d-inline-flex">Дата выхода:</div>
            <div class="d-inline-flex" style="padding-left: 1rem;"><?= $result['start'] ?></div>
          </div>
          <div class="d-inline-flex">
            <div class="d-inline-flex"><?= $link[0] ?></div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: 100;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">Статус:</div>
            <div class="d-inline-flex" style="padding-left: 1rem;"><?= $result['status'] ?></div>
          </div>
          <div class="d-inline-flex">
            <div class="d-inline-flex"><?= $link[1] ?></div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: 100;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">Стек:</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">
              <?= $stack ?></div>
          </div>
          <div class="d-inline-flex">
            <div class="d-inline-flex"><?= $link[2] ?></div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: 100;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">Оценка сообщества:</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">74%</div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: 100;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">Оценка знатаков:</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">74%</div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; font-family: 'Helvetica', arial; font-size: 24px; font-weight: 100;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">Популярные теги проекта:</div>
            <div class="d-inline-flex" style="padding-left: 1rem;"><?= $result['tags'] ?></div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; padding: 3rem 0 1rem 0; font-family: 'Lack', arial; font-size: 32px; font-weight: normal;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">//</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">О проекте</div>
          </div>
        </div>
        <div class="d-flex flex-row justify-content-between"
          style="text-align: left; background-color: #F6F6F6; color: #202020; padding: 0 0 3rem 0; font-family: 'Helvetica', arial; font-size: 24px; font-weight: 100;">
          <div class="d-inline-flex">
            <div class="d-inline-flex"><?= $result['appointment'] ?>
            </div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; padding: 3rem 0 1rem 0; font-family: 'Lack', arial; font-size: 32px; font-weight: normal;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">//</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">Авторы</div>
          </div>
        </div>

        <div class="d-flex"
          style="background-color: #F6F6F6; color: #202020; padding: 3rem 0 1rem 0; font-family: 'Lack', arial; font-size: 32px; font-weight: normal; width: 50%;">
          <div id="slider2">
            <div class="thumbelina-but horiz left">&#706;</div>
            <ul>
              <li><img src="assets/img/image.png"></li>
              <li><img src="assets/img/image2.jpg"></li>
              <li><img src="assets/img/image3.jpg"></li>
              <li><img src="assets/img/image4.jpg"></li>
              <li><img src="assets/img/image5.jpg"></li>
              <li><img src="assets/img/image6.jpg"></li>
              <li><img src="assets/img/image7.jpg"></li>
              <li><img src="assets/img/image8.jpg"></li>
            </ul>
            <div class="thumbelina-but horiz right">&#707;</div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; padding: 3rem 0 1rem 0; font-family: 'Lack', arial; font-size: 32px; font-weight: normal;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">//</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">Скришоты</div>
          </div>
        </div>

        <div class="d-flex"
          style="background-color: #F6F6F6; color: #202020; padding: 3rem 0 1rem 0; font-family: 'Lack', arial; font-size: 32px; font-weight: normal; width: 50%;">
          <div id="slider23">
            <div class="thumbelina-but horiz left">&#706;</div>
            <ul>
              <li><img src="assets/img/image.png"></li>
              <li><img src="assets/img/image2.jpg"></li>
              <li><img src="assets/img/image3.jpg"></li>
              <li><img src="assets/img/image4.jpg"></li>
              <li><img src="assets/img/image5.jpg"></li>
              <li><img src="assets/img/image6.jpg"></li>
              <li><img src="assets/img/image7.jpg"></li>
              <li><img src="assets/img/image8.jpg"></li>
            </ul>
            <div class="thumbelina-but horiz right">&#707;</div>
          </div>
        </div>

        <div class="d-flex flex-row justify-content-between"
          style="background-color: #F6F6F6; color: #202020; padding: 3rem 0 1rem 0; font-family: 'Lack', arial; font-size: 32px; font-weight: normal;">
          <div class="d-inline-flex">
            <div class="d-inline-flex">//</div>
            <div class="d-inline-flex" style="padding-left: 1rem;">Отзыввы</div>
          </div>
        </div>

        <div class="d-flex flex-row"
          style="background-color: #F6F6F6; color: #202020; padding: 3rem 3% 3rem 0; font-family: 'Helvetica', arial; font-size: 36px; font-weight: lighter;">
          <div class="d-flex flex-column">
            <div class="d-inline-flex"><img src="assets/img/image8.jpg"></div>
            <div class="d-inline-flex" style="text-align: left;">Кружков Олег</div>
          </div>
          <div style="border-color: #202020; border-left: 2px solid; margin-left: 2rem;">
            <div class="d-flex flex-column">
              <div class="d-inline-flex align-items-center" style="padding-left: 3rem; color: #EA5657;"><svg
                  xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                  class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                  <path
                    d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a10 10 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733q.086.18.138.363c.077.27.113.567.113.856s-.036.586-.113.856c-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.2 3.2 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.8 4.8 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                </svg>
                <div class="d-inline-flex"
                  style="padding-left: 2rem; color: #EA5657; font-family: 'Lack', arial; font-size: 36px; font-weight: lighter; text-align: left;">
                  Рекомендую</div>
              </div>
              <div class="d-inline-flex"
                style="padding-left: 2rem; color: #202020; font-family: 'Helvetica', arial; font-size: 16px; font-weight: lighter; text-align: left;">
                Интеллектуальный поиск — это
                инновационная система, позволяющая быстро и удобно находить документы из коллекции кафедры. С помощью
                продвинутых алгоритмов обработки естественного языка, система анализирует запросы пользователей и
                предоставляет наиболее релевантные результаты. Интуитивно понятный интерфейс и фильтры по категориям
                делают поиск простым и эффективным, а возможность сохранения и организации найденных материалов помогает
                в
                работе над проектами и исследованиями. Откройте для себя новые знания с "Интеллектуальным поиском"!
              </div>
            </div>
          </div>
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