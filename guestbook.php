<?php
require_once('functions.php');
require_once('db.php');
require_once('pagination.php');

$messages = get_messages($row_start, MSG_PER_PAGE);

if (!empty($_POST)) {
  $name = (!empty($_POST['name'])) ? $_POST['name'] : 'Анонимус';
  $text = (!empty($_POST['text'])) ? nl2br(htmlspecialchars($_POST['text'])) : reload_page();

  save_messages($name, $text);
  reload_page();
}