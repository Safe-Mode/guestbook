<?php
require_once('guestbook.php');
// print_arr($messages);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Guestbook</title>
</head>

<body>
  <form action="" method="POST">
    <p>
      <input type="text" name="name" placeholder="Имя">
    </p>

    <p>
      <textarea name="text" cols="30" rows="10" placeholder="Сообщение" required minlength="2"></textarea>
    </p>

    <p>
      <button type="submit">Отправить</button>
    </p>
  </form>

  <br>
  <br>

  <section class="guestbook">
    <ul>
      <?php foreach ($messages as $message) : ?>
        <li>
          <p>
            <small><?= $message['date'] ?></small><br>
            <b><?= $message['name'] ?></b>
          </p>

          <p><?= $message['text'] ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>
</body>

</html>