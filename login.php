<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Healthy Meal</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/style.css">
  <link type="image/png" sizes="192x192" rel="icon" href="images/favicon.png">
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <a class="logo" href="#">
          <img class="logo__img" src="images/logo.svg" alt="logo">
        </a>
        <nav class="menu">
          <ul class="menu__list">
            <li class="menu__list-item">
              <a class="menu__list-link" href="#about">О сайте</a>
            </li>
            <li class="menu__list-item">
              <a class="menu__list-link" href="#views">Отзывы</a>
            </li>
            <li class="menu__list-item">
              <a class="menu__list-link" href="#mails">Рассылка</a>
            </li>
            <li class="menu__list-item">
              <a class="menu__list-link" href="list.html">Рецепты</a>
            </li>
          </ul>
        </nav>
        <div class="user-nav">
          <a class="user-nav__link" href="account.html">Войти</a>
        </div>
      </div>
    </div>
  </header>

  <section class="input">
    <div class="container">
        <div class="input-inner">
            <h1 class="tools__title">Вход</h1>
            <div class="input_emails">
              <form method="post" action="login.php">
                <?php include('errors.php'); ?>
                <div class="input-group">
                  <input class="footer__form-input" type="text" placeholder="Имя пользователя" name="username" >
                </div>
                <div class="input-group">
                  <input class="footer__form-input" type="password" placeholder="Пароль" name="password">
                </div>

                </form>

            </div>
            <div class="input-group">
              <button type="submit" class="footer__form-btn" name="login_user">Войти</button>
            </div>
            <div class = "input-registration">
                <a class ="input-registration-href" href="registration.html">Регистрация</a> 
            </div>
        </form>
    </div>
</div>
  </section>


  <footer class="footer">
    <div class="container">
      <div class="footer__inner">
        <a class="logo" href="#"> <img class="logo__img" src="images/logo.png" alt="logo"></a>
        <form class="footer__form" action="#">
          <p id = "mails" class="footer__form-text">Подпишитесь чтобы получать рассылку</p>
          <input class="footer__form-input" type="text" placeholder="Введите свой email">
          <button class="footer__form-btn" type="submit">Отправить</button>
        </form>
      </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>