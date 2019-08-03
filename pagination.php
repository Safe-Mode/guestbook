<?php
define('MSG_PER_PAGE', 10);
define('NEARBY_QUANTITY', 2);

$is_page_set = !empty($_GET['page']);
$msg_quantity = count_messages();
$page_quantity = (int) ceil($msg_quantity / MSG_PER_PAGE);
$page_num = ($is_page_set) ? (int) $_GET['page'] : 1;
$is_first = $page_num === 1;
$is_last = $page_num === $page_quantity;
$row_start = ($is_page_set) ? ($page_num - 1) * MSG_PER_PAGE : 0;
