<?php

require_once('/xampp/htdocs/portfolio/config/settings.php');
$db = new dbFunc();
$db = $db->dbConn();


$query_ALL_TAGS = 'SELECT * FROM public.info_tags WHERE id =' . $_POST['id'] . ';';
$result_ALL_TAGS = pg_query($db, $query_ALL_TAGS) or die('Ошибка запроса: ' . pg_last_error($db));
$line = pg_fetch_array($result_ALL_TAGS);

?>

<div class="d-flex justify-content-start " id="added_tag<?= $line['id'] ?>" style="border-color:#202020; color: #202020; background-color: white; margin-right: 1rem;">
    <div class="d-flex align-items-center" style="padding: 0.5rem; border: 1px solid #202020; border-radius: 15px 0 0 15px;">
        <?= $line['name'] ?>
    </div>
    <button type="button" class="btn btn-outline-secondary" onclick="deleteTag(<?= $line['id'] ?>)">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
            <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0" />
        </svg>
    </button>
</div>