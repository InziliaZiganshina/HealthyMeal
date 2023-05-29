<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

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
        <a class="logo" href="index.php">
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
            <li class="menu__list-item">
              <a class="menu__list-link" href="list.html">Личный кабинет</a>
            </li>
          </ul>
        </nav>
        <div class="user-nav">
          <div class="content">
            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
              <div class="error success" >
                <h3>
                  <?php 
                    echo $_SESSION['success']; 
                    unset($_SESSION['success']);
                  ?>
                </h3>
              </div>
            <?php endif ?>
        
            <!-- logged in user information -->
            <?php  if (isset($_SESSION['username'])) : ?>
              <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
              <p> <a href="index.php?logout='1'" style="color: red;">Выйти</a> </p>
              
            <?php endif ?>
        </div>
        
         <!-- <a class="user-nav__link" href="account.html">Войти</a> -->
        </div>
      </div>
    </div>
  </header>

  <section class="top">
    <div class="container">
      <div class="top__inner">
        <h1 class="top__title title">Здоровая еда вместе с <span class="top__title-span">Healthy Meal</span> каждый день</h1>
        <p class="top__text">Укрепляйте здоровье, употребляя в рацион только полезную пищу, и сделайте свою жизнь лучше сегодня и завтра</p>
      </div>
    </div>
  </section>
  
  <section class="tools">
    <h3 class="tools__title title"> Почему наш сайт так полезен? </h3>
        <p class="tools__text">В рецептах вы найдете только органические продукты, выращенные без использования синтетических химикатов</p>
      <div class="container">
        <div class="tools__items">
          <div class="tools__item">
            <img class="tools__item-img" src="images/tools-1.svg" alt="tools img">
            <h5 class="tools__item-title title">Разнообразие</h5>
            <p class="tools__item-text">Варианты позволят выбрать подходящий рецепт</p>
          </div>
          <div class="tools__item">
            <img class="tools__item-img" src="images/tools-2.svg" alt="tools img">
            <h5 class="tools__item-title title">Рецепты на любой вкус</h5>
            <p class="tools__item-text">Выбирайте в поиске любой понравившийся рецепт</p>
          </div>
          <div class="tools__item">
            <img class="tools__item-img" src="images/tools-3.svg" alt="tools img">
            <h5 class="tools__item-title title">100% Органично</h5>
            <p class="tools__item-text">Органические продукты питания выращиваются без использования синтетических химикатов</p>
          </div>
        </div>
      </div>
  </section>

  <section class="direction">
    <div class="container">
      <div class="direction__item">
        <div class="direction__item-content">
          <h3 id = "about" class="direction__item-title title">О сайте</h3>
          <p class="direction__item-titletext">Органические продукты питания выращиваются без использования синтетических химикатов, таких как искусственные пестициды и удобрения, и не содержат генетически модифицированных организмов (ГМО). Органические продукты включают свежие продукты, мясо и молочные продукты, а также обработанные пищевые продукты, такие как крекеры, напитки и замороженные блюда.</p>
          <a class="direction__link" href="list.html">Рецепты</a>
        </div>
        <img class="direction__item-img" src="images/direction-1.png" alt="Design Professionals images">
      </div>
      <div class="direction__item">
        <img class="direction__item-img" src="images/direction-2.png" alt="Design Professionals images">
        <div class="direction__item-content">
          <h3 class="direction__item-title title">Свежие овощи каждый день</h3>
          <p class="direction__item-titletext">Здоровый образ жизни приносит одно удовольствие. Готовьте с удовольствием вместе с сайтом Healthy Meal и делайте свой рацион разнообразнее и полезнее каждый день.</p>
          <a class="direction__link" href="list.html">Рецепты</a>
        </div>
      </div>
      <div class="direction__item">
        <div class="direction__item-content">
          <h3 class="direction__item-title title">Рецепты от лучших поваров</h3>
          <p class="direction__item-titletext">В описании каждого рецепта вы найдете редкие советы от ведующих шеф-поваров страны и мира. Помимо правильного питания в своем рационе вы получите массу полезных рекомендаций.</p>
          <ul class="direction__list">
            <li class="direction__list-item">Гарантированное вкусное блюдо</li>
            <li class="direction__list-item">Правильное питание обеспечено</li>
            <li class="direction__list-item">Каждый рецепт занимает минимум времени</li>
          </ul>
        </div>
        <img class="direction__item-img" src="images/direction-3.png" alt="Design Professionals images" width="494" height="499">
      </div>
    </div>
  </section>

  <section class="tools">
    <h3 class="tools__title title">Редкие рецепты специально для Вас</h3>
    <p class="tools__text">Рецепты включают состав продуктов, изготовленных из высококачественных и 100% органических ингредиентов</p>
    <div class="tools__inner">
      <div class="container">
        <div class="tools__items">
          <div class="tools__item">
            <img class="tools__item-img" src="images/tools-1.jpg" alt="tools img">
            <h5 class="tools__item-title title">Зеленый салат</h5>
            <p class="tools__item-text">Салат состоит из рыбы, листьев салата и заправляется вкусным оливковым маслом.</p>
          </div>
          <div class="tools__item">
            <img class="tools__item-img" src="images/tools-2.jpg" alt="tools img">
            <h5 class="tools__item-title title">Салат из говядины</h5>
            <p class="tools__item-text">Салат сочетается с аппетитным ломтиком бекона и заправляется вкусным и свежим кунжутным маслом.</p>
          </div>
          <div class="tools__item">
            <img class="tools__item-img" src="images/tools-3.jpg" alt="tools img">
            <h5 class="tools__item-title title">Ореховый салат</h5>
            <p class="tools__item-text">Салат включает такие ингредиенты как: перец, шампиньоны, листья салата айсберг, заправленным оливковым маслом.</p>
          </div>
        </div>
      </div>
    </div>
    <a class="tools__link" href="list.html">Смотреть все</a>
  </section>

  <section class="blog">
    <div class="container">
      <h3 id = "views" class="blog__title title">Отзывы довольных пользователей</h3>
      <div class="slider">
        <div class="slider__item">
          <img class="slider__item-img" src="images/blog-1.jpg" alt="blogimages">
          <div class="slider__item-info">
            <a class="slider__item-author" href="#">Иван Петров</a> | 03 Февраля 2023
          </div>
          <a class="slider__item-title title" href="#">
            В большой спешке в течение рабочего дня трудно бывает правильно питаться. Но с сайтом “Healthy Mealt” есть возможность употреблять в рацион здоровую еду и не вредить своему желудку фаст-фудом. Рекомендую этот сайт своим друзьям. 
          </a>
        </div>
        <div class="slider__item">
          <img class="slider__item-img" src="images/blog-2.jpg" alt="blogimages">
          <div class="slider__item-info">
            <a class="slider__item-author" href="#">Лиза Егорова</a> | 17 Января 2023
          </div>
          <a class="slider__item-title title" href="#">Классный сайт. Всегда помогает в подборе питания, поэтому не нужно придумывать меню.</a>
        </div>
        <div class="slider__item">
          <img class="slider__item-img" src="images/blog-3.jpg" alt="blogimages">
          <div class="slider__item-info">
            <a class="slider__item-author" href="#">Марина Корнеева</a> | 05 Апреля 2023
          </div>
          <a class="slider__item-title title" href="#">Сайт Healthy Meal - отличная находка для людей, которые любят правильно питаться. Все рецепты классные и продуманные!</a>
        </div>
        <div class="slider__item">
          <img class="slider__item-img" src="images/blog-4.jpg" alt="blogimages">
          <div class="slider__item-info">
            <a class="slider__item-author" href="#">Илья Федоров</a> | 15 Марта 2023
          </div>
          <a class="slider__item-title title" href="#">Когда занимаешься спортом - питание играет немаловажную роль. С сайтом “Healthy Meal” нет надобности заботиться о том, что приготовить, потому что все самые полезные, а главное - вкусные рецепты уже собраны на сайте</a>
        </div>
        <div class="slider__item">
          <img class="slider__item-img" src="images/blog-5.jpg" alt="blogimages">
          <div class="slider__item-info">
            <a class="slider__item-author" href="#">Максим Елизаров</a> | 07 Февраля 2023
          </div>
          <a class="slider__item-title title" href="#">По совету знакомых нашел этот сайт и нисколько не пожалел! Теперь сам рекомендую всем!</a>
        </div>
        <div class="slider__item">
          <img class="slider__item-img" src="images/blog-6.jpg" alt="blogimages">
          <div class="slider__item-info">
            <a class="slider__item-author" href="#">Слава Антоненко</a> | 27 Марта 2023
          </div>
          <a class="slider__item-title title" href="#">Обожаю этот сайт! Необыкновенно полезные рецепты! Рекомендую всем!</a>
        </div>
        <div class="slider__item">
          <img class="slider__item-img" src="images/blog-7.jpg" alt="blogimages">
          <div class="slider__item-info">
            <a class="slider__item-author" href="#">Мила Янина</a> | 03 Апреля 2023
          </div>
          <a class="slider__item-title title" href="#">Классный сайт с полезными рецептами. Все знакомые в восторге.</a>
        </div>
        <div class="slider__item">
          <img class="slider__item-img" src="images/blog-8.jpg" alt="blogimages">
          <div class="slider__item-info">
            <a class="slider__item-author" href="#">Света Филиппова</a> | 09 Января 2023
          </div>
          <a class="slider__item-title title" href="#">Мне еще не встречались такие классные подброки рецептов! Сайт - Восторг!</a>
        </div>
        <div class="slider__item">
          <img class="slider__item-img" src="images/blog-9.jpg" alt="blogimages">
          <div class="slider__item-info">
            <a class="slider__item-author" href="#">Дмитрий Сидихин</a> | 15 Февраля 2023
          </div>
          <a class="slider__item-title title" href="#">Сайт Healthy Meal предлагает классные рецепты, удобно, что можно и самому выкладывать!</a>
        </div>
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