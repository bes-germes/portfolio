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

    require_once('config/settings.php');
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
        <!-- About Section -->
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
                    <?php
                    $query = 'SELECT * FROM public.info_vacancys;';
                    $result = pg_query($db, $query) or die('Ошибка запроса: ' . pg_last_error($db));

                    while ($line = pg_fetch_array($result)) {
                        $cur_idx = $line['id'] + 1;
                    ?>

                        <div class="col-6" style="margin: 0; padding: 0;">
                            <div class="card" style="width: 100%; padding: 0; border-radius: 0px; margin: 0;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-end mb-3">
                                        <div class="bd-highlight"
                                            style="text-align: start; font-family: 'Lack', arial; font-size: 36px; color: #EA5657; font-weight: normal;">
                                            <?= $line['rule'] ?></div>
                                        <button type="button" class="btn btn-outline-secondary"
                                            style="color:#202020; border-radius: 20px; border-color: #202020;" onclick="alert('Заявка отправлена')">Откликнуться</button>
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

                    <?php
                    }
                    ?>


                </div>

            </div>
            </div>
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