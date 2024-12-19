<?php

include '/xampp/htdocs/portfolio/assets/phpFunc/statusColor.php';
require_once('/xampp/htdocs/portfolio/config/settings.php');
$db = new dbFunc();
$db = $db->dbConn();


$query_search = "SELECT name FROM public.info_project WHERE name ilike '%" . $_POST['charValue'] . "%';";

$result_search = pg_query($db, $query_search) or die('Ошибка запроса: ' . pg_last_error($db));


while ($line = pg_fetch_assoc($result_search)) {
?>
    <button type="button" onclick="fillInnerTextInput(this)" style="text-align: start; border-color: white;" class="btn btn-outline-secondary"><?= $line['name'] ?></button>
<?php
}
