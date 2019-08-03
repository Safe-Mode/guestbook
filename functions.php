<?php
function reload_page()
{
  header('Location: index.php');
  exit;
}

function save_messages($name, $text)
{
  global $link;

  $name = mysqli_escape_string($link, $name);
  $text = mysqli_escape_string($link, $text);
  $query = "INSERT INTO `comment` (`name`, `text`) VALUES ('$name', '$text')";
  mysqli_query($link, $query);
}

function count_messages()
{
  global $link;

  $query = "SELECT * FROM `comment`";
  $result = mysqli_query($link, $query);
  $quantity = mysqli_num_rows($result);

  return $quantity;
}

function get_messages($start = 0, $quantity = NULL)
{
  global $link;

  $query = (isset($quantity)) ? "SELECT * FROM `comment` ORDER BY `id` DESC LIMIT $start, $quantity" : "SELECT * FROM `comment` ORDER BY `id` DESC";
  $result = mysqli_query($link, $query);
  $messages = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $messages;
}

function print_arr($arr)
{
  echo '<pre>' . print_r($arr, true) . '</pre>';
}
