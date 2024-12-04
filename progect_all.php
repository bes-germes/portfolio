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
            </div>
            <script>
                function filter(a) {
                    if (a == 0) {
                        if (document.getElementById('projects_ASC').classList.contains('d-none')) {
                            document.getElementById('projects_ASC').classList.remove('d-none');
                            document.getElementById('projects_DESC').classList.add('d-none');
                            document.getElementById('projects_id').classList.add('d-none');
                        }
                    }
                    if (a == 1) {
                        if (document.getElementById('projects_DESC').classList.contains('d-none')) {
                            document.getElementById('projects_DESC').classList.remove('d-none');
                            document.getElementById('projects_ASC').classList.add('d-none');
                            document.getElementById('projects_id').classList.add('d-none');
                        }
                    }
                    if (a == 2) {
                        if (document.getElementById('projects_id').classList.contains('d-none')) {
                            document.getElementById('projects_id').classList.remove('d-none');
                            document.getElementById('projects_ASC').classList.add('d-none');
                            document.getElementById('projects_DESC').classList.add('d-none');
                        }
                    }
                }
            </script>
            <div class="d-flex justify-content-start mb-3" style="margin-left: 26%;">
                <div class="bd-highlight">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                                <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" onclick="filter(0)" href="#">Сначала новые</a></li>
                            <li><a class="dropdown-item" onclick="filter(1)" href="#">Сначала старые</a></li>
                            <li><a class="dropdown-item" onclick="filter(2)" href="#">Релевантные</a></li>
                        </ul>
                    </div>
                </div>
                <input class="form-control form-control-sm" type="text" style="height: 2rem;margin-left: 2rem; border-color:#202020;" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                <div class="bd-highlight" style="padding-right: 80%; height: 2rem;"><button type="submit" class="btn btn-outline-secondary" style="border-radius: 0 20px 20px 0; height: 2rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </button></div>
            </div>

            <hr style="margin: 0;">

            <div class="container" id="projects_ASC" style="margin-top: 2rem;">

                <?php
                $query_ASC = 'SELECT * FROM public.info_project ORDER BY start ASC;';
                $result_ASC = pg_query($db, $query_ASC) or die('Ошибка запроса: ' . pg_last_error($db));

                while ($line = pg_fetch_array($result_ASC)) {
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
                                            <div class="d-inline-flex">1444
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#EA5657" class="bi bi-heart-fill"
                                                    viewBox="0 0 32 32" style="padding-top: 1rem;">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="d-inline-flex">
                                            <div class="d-inline-flex">213
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
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
                            </div>
                        </button>
                    </form>
                <?php
                }
                ?>
            </div>

            <div class="container d-none" id="projects_DESC" style="margin-top: 2rem;">

                <?php
                $query_DESC = 'SELECT * FROM public.info_project ORDER BY start DESC;';
                $result_DESC = pg_query($db, $query_DESC) or die('Ошибка запроса: ' . pg_last_error($db));

                while ($line = pg_fetch_array($result_DESC)) {
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
                                            <div class="d-inline-flex">1444
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#EA5657" class="bi bi-heart-fill"
                                                    viewBox="0 0 32 32" style="padding-top: 1rem;">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="d-inline-flex">
                                            <div class="d-inline-flex">213
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
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
                            </div>
                        </button>
                    </form>
                <?php
                }
                ?>
            </div>

            <div class="container d-none" id="projects_id" style="margin-top: 2rem;">

                <?php
                $query_id = 'SELECT * FROM public.info_project ORDER BY id;';
                $result_id = pg_query($db, $query_id) or die('Ошибка запроса: ' . pg_last_error($db));

                while ($line = pg_fetch_array($result_id)) {
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
                                            <div class="d-inline-flex">1444
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#EA5657" class="bi bi-heart-fill"
                                                    viewBox="0 0 32 32" style="padding-top: 1rem;">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="d-inline-flex">
                                            <div class="d-inline-flex">213
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
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
                            </div>
                        </button>
                    </form>
                <?php
                }
                ?>
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