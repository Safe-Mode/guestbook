<?php
require_once('functions.php');
require_once('db.php');

$messages = get_messages();

if (!empty($_POST)) {
  $name = (!empty($_POST['name'])) ? $_POST['name'] : 'Анонимус';
  $text = (!empty($_POST['text'])) ? nl2br(htmlspecialchars($_POST['text'])) : reload_page();

  save_messages($name, $text);
  reload_page();
}