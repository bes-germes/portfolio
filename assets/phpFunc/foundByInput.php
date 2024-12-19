<?php

include '/xampp/htdocs/portfolio/assets/phpFunc/statusColor.php';
require_once('/xampp/htdocs/portfolio/config/settings.php');
$db = new dbFunc();
$db = $db->dbConn();


$query_search = "SELECT * FROM public.info_project WHERE name ilike '%" . $_POST['charValue'] . "%';";

$result_search = pg_query($db, $query_search) or die('Ошибка запроса: ' . pg_last_error($db));

while ($line = pg_fetch_array($result_search)) {
    $cur_idx = $line['id'];
?>
    <form action="project_view.php" method="post">
        <button type="submit" style="border: none; background-color: #F6F6F6;">
            <div class="d-flex flex-row" style="background-color: #F6F6F6; color: #202020; padding: 3rem 3% 3rem 0; font-family: 'Helvetica', arial; font-size: 36px; font-weight: lighter;">
                <div class="d-flex flex-column">
                    <h1 class="d-inline-flex" style="text-align: left;">
                        <?php
                        $idx_length = strlen((string)$cur_idx);
                        if ($idx_length > 1) {
                            print_r($cur_idx);
                        } else {
                            print_r('0' . (string)$cur_idx);
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
                        <div class="d-inline-flex" style="margin-top: 1rem; padding-left: 3rem; color: <?= colorStatus($line['status']) ?>; font-family: 'Helvetica', arial; font-size: 24px; font-weight: lighter;
       text-align: left; min-width: 100%; width: 75rem;">
                            <?= $line['status'] ?>
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