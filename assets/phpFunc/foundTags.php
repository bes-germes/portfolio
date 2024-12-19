<?php

require_once('/xampp/htdocs/portfolio/config/settings.php');
$db = new dbFunc();
$db = $db->dbConn();

$tags = '';

foreach()

$query_ALL_TAGS = 'SELECT * FROM public.info_project WHERE id in(1, 2, 3) ;';
$result_ALL_TAGS = pg_query($db, $query_ALL_TAGS) or die('Ошибка запроса: ' . pg_last_error($db));
$line = pg_fetch_array($result_ALL_TAGS);

?>
