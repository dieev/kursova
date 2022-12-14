<?php
include "database.php";

$result = mysqli_query($connect, "SELECT * FROM `base`");

?>

<!DOCTYPE html>
<html lang="ua">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skål!</title>
  <link rel="shotcut icon" type="image/png" href="images/logo.png" />
  <link rel="stylesheet" href="css/fonts.css" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/slick.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/media.css" />
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <a class="header__logo" href="#">
          <img src="images/logo.png" alt="header-logo" />
        </a>

        <div class="phone">
          <p class="phone__schedule">Цілодобово!</p>
          <a class="phone__number" href="tel:+0962038740">(096) 20 38 740</a>
        </div>

        <nav class="header__menu">
          <div class="btn__menu">
            <div></div>
            <div></div>
            <div></div>
          </div>
          <ul class="menu__list">
            <li><a href="#about" id="about-top">Про нас</a></li>
            <li>
              <a href="#partner" id="partners-top">Партнери</a>
            </li>
            <li>
              <a href="#pub-list" id="pub-list-top">Список пабів</a>
            </li>
            <li><a href="#contacts" id="contacts-top">Контакти</a></li>
          </ul>
        </nav>

      </div>
    </div>
  </header>

  <main>
    <section class="slider">
      <div class="slider__items">

        <div class="slider__item" style="background-image: url(images/slider-bg.jpg)">
          <div class="container">
            <div class="slider__content">
              <div class="slider__leftside"></div>
              <div class="slider__info">
                <h3 class="slider__title">Досвідчені фахівці</h3>
                <p class="slider__text">
                  Завдяки нашим найкращим дегустаторам та поціновувачам ми раді поділитися з вами кращими пабами Львова!
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="slider__item" style="background-image: url(images/slider-bg-2.jpg)">
          <div class="container">
            <div class="slider__content">
              <div class="slider__leftside"></div>
              <div class="slider__info">
                <h3 class="slider__title">Чесні відгуки</h3>
                <p class="slider__text">
                  З нами ви точно дізнаєтесь всю правду.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="slider__item" style="background-image: url(images/slider-bg-3.jpg)">
          <div class="container">
            <div class="slider__content">
              <div class="slider__leftside"></div>
              <div class="slider__info">
                <h3 class="slider__title">Корисні поради</h3>
                <p class="slider__text">
                  Наша компанія завжди готова поділитися враженнями і підказати куди піти :-)
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="about" class="advantages">
      <div class="container">
        <div class="advantages__items">

          <div class="advantages__item">
            <h3 class="advantages__title">Якість</h3>
            <p class="advantages__text">
              Найкращі та об'єктивні фахівці.
            </p>
          </div>

          <div class="advantages__item">
            <h3 class="advantages__title">Гарантія</h3>
            <p class="advantages__text">
              Відгуки компанії мають гарантію до закриття пабу.
            </p>
          </div>

          <div class="advantages__item">
            <h3 class="advantages__title">Підтримка</h3>
            <p class="advantages__text">
              Кваліфікований персонал завжди готовий допомогти.
            </p>
          </div>

          <div class="advantages__item">
            <h3 class="advantages__title">Технологія</h3>
            <p class="advantages__text">
              Використовуються сучасні технології та матеріали.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="about">
      <div class="container">
        <div class="about__info">
          <h3 class="about__title">Про нас</h3>
          <p class="about__text">
            Наша компанія вважається найкращою на ринку з 16.07.2020 року. Саме в цей день ми рішуче вирішили, що наша
            ціль - нести правду та допомогати початківцям в цій сфері.
          </p>
        </div>
        <div class="about__items">

          <div class="about__item">
            <div class="about__img-inner">
              <img class="about__img" src="images/about-1.jpg" alt="" />
            </div>
            <h3 class="about__item-title">
              ЛЮБИМО СВОЮ СПРАВУ
            </h3>

            <div class="about__hover">
              <div class="about__hover-img">
                <img src="images/about-icon-1.png" alt="" />
              </div>
              <h3 class="about__hover-title">ЛЮБИМО СВОЮ СПРАВУ</h3>
              <p class="about__hover-text">
                Ми завжди тільки залюбки робимо свою роботу.
              </p>
            </div>
          </div>

          <div class="about__item">
            <div class="about__img-inner">
              <img class="about__img" src="images/about-2.jpg" alt="" />
            </div>
            <h3 class="about__item-title">
              Дружній колектив
            </h3>

            <div class="about__hover">
              <div class="about__hover-img">
                <img src="images/about-icon-1.png" alt="" />
              </div>
              <h3 class="about__hover-title">ДРУЖНІЙ КОЛЕКТИВ</h3>
              <p class="about__hover-text">
                Наш колектив завжди готовий зробити якісну та об'єктивну оцінку закладу.
              </p>
            </div>
          </div>

          <div class="about__item">
            <div class="about__img-inner">
              <img class="about__img" src="images/about-3.jpg" alt="" />
            </div>
            <h3 class="about__item-title">
              ЛЮБОВ З ДИТИНСТВА
            </h3>

            <div class="about__hover">
              <div class="about__hover-img">
                <img src="images/about-icon-1.png" alt="" />
              </div>
              <h3 class="about__hover-title">ЛЮБОВ З ДИТИНСТВА</h3>
              <p class="about__hover-text">
                Наші кращі вахівці з дитинства люблять свою справу, тому ми завжди будемо готові.
              </p>
            </div>
          </div>

          <div class="about__item">
            <div class="about__img-inner">
              <img class="about__img" src="images/about-4.jpg" alt="" />
            </div>
            <h3 class="about__item-title">
              ЄВРОПЕЙСЬКІ КОЛЕГИ
            </h3>

            <div class="about__hover">
              <div class="about__hover-img">
                <img src="images/about-icon-1.png" alt="" />
              </div>
              <h3 class="about__hover-title">ЄВРОПЕЙСЬКІ КОЛЕГИ</h3>
              <p class="about__hover-text">
                Також ми маємо філіали по всій Європі! Наші французські фахівці також завжди будуть вам раді.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="partner" class="partners">
      <div class="container">
        <h3 class="partners__title">НАМ ДОВІРЯЮТЬ</h3>
        <div class="partners__slider">
          <div class="partners__item">
            <img src="images/partners-1.png" alt="" />
          </div>

          <div class="partners__item">
            <img src="images/partners-2.png" alt="" />
          </div>

          <div class="partners__item">
            <img src="images/partners-3.png" alt="" />
          </div>

          <div class="partners__item">
            <img src="images/partners-4.png" alt="" />
          </div>

          <div class="partners__item">
            <img src="images/partners-1.png" alt="" />
          </div>

          <div class="partners__item">
            <img src="images/partners-2.png" alt="" />
          </div>

          <div class="partners__item">
            <img src="images/partners-3.png" alt="" />
          </div>

          <div class="partners__item">
            <img src="images/partners-4.png" alt="" />
          </div>
        </div>
      </div>
    </section>


    <section id="pub-list" class="pub">
      <div class="container">
        <h3 class="pub__title">СПИСОК ПАБІВ</h3>


        <?php
        while ($pubs = mysqli_fetch_assoc($result)) {
        ?>

        <div class="pub__item">
          <img class="pub__item-image" src="images/<?php echo $pubs['image'] ?>">

          <div class="pub__item-content">
            <h3 class="pub__item-title">
              <?php echo $pubs['title'] ?>
            </h3>

            <p class="pub__item-text">
              <?php echo $pubs['text'] ?>
            </p>
          </div>
        </div>
        <?php } ?>


      </div>
    </section>



  </main>

  <footer id="contacts" class="footer">
    <div class="container">
      <div class="footer__inner">
        <img class="footer__img" src="images/logo.png" alt="" />
        <div class="footer__content">
          <div class="footer__content-list">
            
            <nav class="footer__menu">
              <ul class="footer__items">
                <li class="footer__item">
                  <a href="#about" class="footer__item-link">ПРО НАС</ф>
                </li>
                <li class="footer__item">
                  <a href="#partner" class="footer__item-link">ПАРТНЕРИ</a>
                </li>
                <li class="footer__item">
                  <a href="#pub-list" class="footer__item-link">СПИСОК ПАБІВ</a>
                </li>

              </ul>
            </nav>
          </div>

          <div class="footer__content-contacts">
            <h3 class="contacts__title">Контакти</h3>
            <a href="https://www.instagram.com/dieeeev/?hl=ru" class="contacts__text">Instagram</a>
            <a href="https://t.me/akapurin" class="contacts__text">Telegram</a>
          </div>


          
          <a id="button"></a>
        </div>
        <p class="footer__copy">© SKOL, 2022. Дизайн розробляли dieevico</p>
      </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>