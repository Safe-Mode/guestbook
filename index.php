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
  <link 
      rel="stylesheet" 
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
      crossorigin="anonymous">
</head>

<body>
  <div class="container py-4">
    <h1 class="mb-5">Гостевая книга</h1>

    <form 
        class="mx-auto mb-5" 
        action="" 
        method="POST" 
        style="max-width: 600px;">
      <p>
        <input 
            class="form-control" 
            type="text" 
            name="name" 
            placeholder="Имя">
      </p>

      <p>
        <textarea 
            class="form-control" 
            name="text" 
            rows="7" 
            placeholder="Сообщение" 
            required 
            minlength="2"></textarea>
      </p>

      <p>
        <button 
            class="btn btn-primary"
            type="submit">Отправить</button>
      </p>
    </form>

    <section class="guestbook mb-5">
      <ul class="list-group">
        <?php foreach ($messages as $message) : ?>
          <li class="list-group-item">
            <p>
              <small><?= $message['date'] ?></small><br>
              <b><?= $message['name'] ?></b>
            </p>

            <p><?= $message['text'] ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    </section>

    <nav aria-label="...">
      <ul class="pagination">
        <li class="page-item <?= ($is_first) ? 'disabled' : NULL ?>">
          <a 
              class="page-link"
              href="?page=<?= $page_num - 1 ?>"
              tabindex="<?= ($is_first) ? -1 : NULL ?>"
              aria-disabled="<?= ($is_first) ? true : false ?>">Previous</a>
        </li>

        <?php for ($i = 1; $i <= $page_quantity; $i++) : ?>
          <?php $is_current = $i === $page_num; ?>

          <li 
              class="page-item <?= ($is_current) ? 'active' : NULL ?>"
              aria-current="<?= ($is_current) ? 'page' : NULL ?>">
            <a 
                class="page-link"
                href="?page=<?= $i ?>">
              <?= $i ?>

              <?php if ($is_current) : ?>
                <span class="sr-only">(current)</span>
              <?php endif; ?>
            </a>
          </li>
        <?php endfor; ?>

        <li class="page-item <?= ($is_last) ? 'disabled' : NULL ?>">
          <a 
              class="page-link"
              href="?page=<?= $page_num + 1 ?>"
              tabindex="<?= ($is_last) ? -1 : NULL ?>"
              aria-disabled="<?= ($is_last) ? true : false ?>">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</body>

</html>