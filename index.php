<?php
  $companyName = "Благотворительный фонд «Сибирь»";
  $companyFullName = "Благотворительный фонд поддержки и развития культуры,искусства, туризма, спорта, медицины и науки «Сибирь»";
  $companySmallName = "«Сибирь»";
  $companyType = "Благотворительный фонд";
  $adress = "665824, Иркутская область, г. Ангарск, ул. Желябова, д. 3, кв. 18";
  $email = "bfsiberia@bk.ru";
  $phone = "tel:+7 950 069-96-00";
  $phoneF = "+7(950)069-96-00";

  $ogrn = "1183850021167";
  $inn = "3801146039";
  $kpp = "380101001";
  $rs = "40701810802010000003";
  $bik = "045004867";

  $socLinkVK = "#";
  $socLinkFB = "https://www.facebook.com/profile.php?id=100050866235915";
  $socLinkOK = "#";
  $socLinkTW = "#";
  $socLinkIN = "#";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?php echo $companyName; ?></title>

  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/favicon-180.png">
  <link rel="icon" sizes="16x16" href="/img/favicon/favicon-16.png">
  <link rel="icon" sizes="32x32"href="/img/favicon/favicon-32.png">
  <link rel="icon" sizes="64x64"href="/img/favicon/favicon-64.png">

  <!-- Styles -->
  <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/mainPage.css">
  <link rel="stylesheet" href="/css/slider.css">
</head>

<body id="home">
  
  <!-- Меню -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="logo navbar-brand" href="#">БФ "Сибирь"</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar_content collapse navbar-collapse" id="navbarContent">
      <ul class="navbar_menu navbar-nav ml-auto">
        <li class="navbar_menu_item nav-item">
          <a class="nav-link" href="#about">О фонде</a>
        </li>
        <li class="navbar_menu_item nav-item">
          <a class="nav-link" href="#rules">Устав</a>
        </li>
        <li class="navbar_menu_item nav-item" hidden>
          <a class="nav-link" href="#partners">Партнёры</a>
        </li>
        <li class="navbar_menu_item nav-item" hidden>
          <a class="nav-link" href="#reports">Отчёты</a>
        </li>
        <li class="navbar_menu_item nav-item">
          <a class="nav-link" href="#сertificates">Свидетельства</a>
        </li>
        <li class="navbar_menu_item nav-item">
          <a class="nav-link" href="#contacts">Контакты</a>
        </li>
        <li class="navbar_menu_item nav-item">
          <a class="navbar_phone" href=<?php echo $phone; ?>><?php echo $phoneF; ?></a>
        </li>
      </ul>

      <div class="navbar_buttons" hidden>
        <a class="navbar_button navbar_button_help btn btn-light m-1" style="color: #1fbcee;">
          <span class="navbar_button-text">Хочу помочь</span>
          <span class="navbar_button_arrow">
            <img src="/img/btn-arrow-blue.png">
          </span>
        </a>
        <a  href="#" class="navbar_button navbar_button_send btn btn-light m-1" style="color: #37da91;">
          <span class="navbar_button-text">Написать</span>
          <span class="navbar_button_arrow">
            <img src="/img/btn-arrow-green.png">
          </span>
        </a>
        
        <a href="/en/" class="navbar_button_en btn btn-secondary m-1" style="background-color: #6c757d80; border-color: #6c757d00;">
          <span>En</span>
        </a>
      </div>
      <!-- Search form -->
      <div class="navbar_search input-group my-1">
        <input type="text" class="form-control" placeholder="Поиск" aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button">Найти</button>
        </div>
      </div>
    </div>
  </nav>
  
  <!-- Заголовок -->
  <header class="main_header">
    <div class="main_header_bg">
      
    </div>
    <div class="main_header_wrapper">
      <div class="content_wrapper">
        <h1 class="main_header_title"><?php echo $companyType; ?> <br><span><?php echo $companySmallName; ?></span></h1>
      </div>
    </div>
  </header>

  <!-- Донат -->
  <section class="donation">
    <div class="content_wrapper">
      <h2 class="donation_title title_second">Хочу помочь</h2>
      <p class="text">Для перевода средств используйте банковские реквизиты фонда:</p>
      <p class="text">
        <span class="donation_company"><?php echo $companyFullName; ?></span><br>
        ОГРН: <span><?php echo $ogrn; ?></span><br>
        ИНН: <span><?php echo $inn; ?></span><br>
        КПП: <span><?php echo $kpp; ?></span><br>
        Р/с: <span> <?php echo $rs; ?> (ПАО БАНК «ФК Открытие»)</span><br>
        БИК: <span><?php echo $bik; ?></span>
      </p>
    </div>
  </section>

  <!-- О фонде -->
  <section class="main_about main_section" id="about">
    <div class="content_wrapper">
      <h2 class="main_about_title title_second">О фонде</h2>
      <div class="content_line">
        <div class="content_block">
          <p class="text">
		  Благотворительный фонд «Сибирь» создан в июне 2018 года. Задачей и целью организации является осуществление 
		  целевых программ социальной поддержки категорий населения, соответствия науки и медицины, поддержки искусства 
		  и культуры, охраны здоровья и пропаганда здорового образа жизни, развития адаптивного спорта и туризма, охрана 
		  окружающей среды. В настоящее время в фонде определены проекты по экологии, спорту и патриотическому движению.
		  </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Устав -->
  <section class="main_rules main_section bg_bluegrad" id="rules">
    <div class="content_wrapper">
      <h2 class="main_rules_title title_second title_white">Устав фонда</h2>
      <div class="content_line">

        <div class="content_block">
          <div id="rulesSlider" class="slider carousel slide" data-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="files/rules01.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="files/rules02.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="files/rules03.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="files/rules04.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="files/rules05.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="files/rules06.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="files/rules07.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="files/rules08.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="files/rules09.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="files/rules10.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="files/rules11.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="files/rules12.jpg" class="d-block w-100">
              </div>
            </div>
            <ol class="slider_controls carousel-indicators">
              <li class="slider_btn_num active" data-target="#rulesSlider" data-slide-to="0">1</li>
              <li class="slider_btn_num" data-target="#rulesSlider" data-slide-to="1">2</li>
              <li class="slider_btn_num" data-target="#rulesSlider" data-slide-to="2">3</li>
              <li class="slider_btn_num" data-target="#rulesSlider" data-slide-to="3">4</li>
              <li class="slider_btn_num" data-target="#rulesSlider" data-slide-to="4">5</li>
              <li class="slider_btn_num" data-target="#rulesSlider" data-slide-to="5">6</li>
              <li class="slider_btn_num" data-target="#rulesSlider" data-slide-to="6">7</li>
              <li class="slider_btn_num" data-target="#rulesSlider" data-slide-to="7">8</li>
              <li class="slider_btn_num" data-target="#rulesSlider" data-slide-to="8">9</li>
              <li class="slider_btn_num" data-target="#rulesSlider" data-slide-to="9">10</li>
              <li class="slider_btn_num" data-target="#rulesSlider" data-slide-to="10">11</li>
              <li class="slider_btn_num" data-target="#rulesSlider" data-slide-to="11">12</li>
            </ol>
            <a class="slider_btn_prev carousel-control-prev" href="#rulesSlider" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Prev</span>
            </a>
            <a class="slider_btn_next carousel-control-next" href="#rulesSlider" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Партнёры -->
  <section class="main_partners main_section " id="partners" hidden>
    <div class="content_wrapper">
      <h2 class="main_about_title title_second">Наши партнёры</h2>
      <div class="content_line">
        <div class="content_block">
          
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum architecto esse et minus, iste rerum aperiam, aliquid magni fugiat assumenda ad ab iusto perspiciatis quidem dolore recusandae impedit repellendus! Libero!</p>
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum architecto esse et minus, iste rerum aperiam, aliquid magni fugiat assumenda ad ab iusto perspiciatis quidem dolore recusandae impedit repellendus! Libero!</p>

        </div>
      </div>
    </div>
  </section>
  
  <!-- Отчёты -->
  <section class="main_reports main_section " id="reports" hidden>
    <div class="content_wrapper">
      <h2 class="main_about_title title_second">Отчёты</h2>
      <div class="content_line">
        <div class="content_block">
          
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum architecto esse et minus, iste rerum aperiam, aliquid magni fugiat assumenda ad ab iusto perspiciatis quidem dolore recusandae impedit repellendus! Libero!</p>
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum architecto esse et minus, iste rerum aperiam, aliquid magni fugiat assumenda ad ab iusto perspiciatis quidem dolore recusandae impedit repellendus! Libero!</p>
          
        </div>
      </div>
    </div>
  </section>

  <!-- Свидетельства -->
  <section class="main_сertificates main_section " id="сertificates">
    <div class="content_wrapper">
      <!-- <h2 class="title_second">Свидетельства</h2> -->
      <div class="content_line">
        <div class="content_block">
          <img src="files/cert01.jpg" alt="">
        </div>
        <div class="content_block">
          <img src="files/cert02.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  
  <!-- Контакты -->
  <section class="main_contacts main_section bg_bluegrad" id="contacts">
    <div class="content_wrapper">
      <!-- <h2 class="title_second">Контактная информация</h2> -->
      <div class="content_line">
        <div class="content_block">
          <h3 class="title_third">Наш адрес</h3>
          <p class="text"><?php echo $adress; ?></p>
          <h3 class="title_third">Телефон</h3>
          <p class="text"><a class="contact_link" href=<?php echo $phone; ?>><?php echo $phoneF; ?></a></p>
          <h3 class="title_third">Эл. почта</h3>
          <p class="text"><a class="contact_link" href=<?php echo "mailto:".$email; ?>><?php echo $email; ?></a></p>
        </div>
        <div class="content_block">
          <div class="people">
          <h3 class="title_third">Контактные лица</h3>
          <p class="text">
            <span style="font-weight: 600;">Легенкина Анна Владимировна</span><br>
            <a class="contact_link" href="tel:+7 952 612-34-20">+7(952)612-34-20</a>, 
            <a class="contact_link" href="mailto:annavladi02@bk.ru">annavladi02@bk.ru</a>
          </p>
          </div>
          <div class="social">
            <h3 class="title_third">Мы в социальных сетях</h3>
            <div class="soc_links">
              <a href=<?php echo $socLinkVK; ?> class="soc_link"><img src="img/svg/icon-vk.svg"></a>
              <a href=<?php echo $socLinkFB; ?> class="soc_link"><img src="img/svg/icon-facebook.svg"></a>
              <a href=<?php echo $socLinkOK; ?> class="soc_link"><img src="img/svg/icon-odnoklassniki.svg"></a>
              <a href=<?php echo $socLinkTW; ?> class="soc_link"><img src="img/svg/icon-twitter.svg"></a>
              <a href=<?php echo $socLinkIN; ?> class="soc_link"><img src="img/svg/icon-instagram.svg"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="content_line">
        <div class="map content_block">
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A044f6cffb9270133fe6d7c7aa7a2d612fa5a8d30c025b107fca039fccf3c5b95&amp;source=constructor" width="100%" height="400px" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- Обратная связь -->
  <section class="main_mail main_section "  id="mail">
    <div class="content_wrapper">
      <div class="content_line">
        <form id="mail_form" method="post">
          <div class="mail_form">
            <h3>Напишите нам</h3>
            <input name="name" type="text" placeholder="Как вас зовут?" required maxlength="256" class="name_text_box">
            <input name="email" type="text" placeholder="Ваш e-mail" required maxlength="256" class="email_text_box">
            <textarea name="purshase_text" placeholder="Текст сообщения" required rows="8"></textarea>
            <button class="button" id="mail_button" type="submit"><span>Отправить</span></button>
          </div>
        </form>
      </div>
    </div>
  </section> 

  <!-- Новости -->
  <!-- 
  <section class="main_news main_section "  id="news">
    <div class="content_wrapper">
      <div class="content_line">
        <h2>Новости фонда</h2>
        <div class="content_block">le-white">Устав фонда</h2>
        <div class="content_block">

          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum architecto esse et minus, iste rerum aperiam, aliquid magni fugiat assumenda ad ab iusto perspiciatis quidem dolore recusandae impedit repellendus! Libero!</p>
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum architecto esse et minus, iste rerum aperiam, aliquid magni fugiat assumenda ad ab iusto perspiciatis quidem dolore recusandae impedit repellendus! Libero!</p>
          
        </div>
      </div>
    </div>
  </section> 
  -->

  <footer class="footer">
    <div class="content_wrapper">
      <div class="content_line">
        <div class="content_block"><!-- Адрес, телефон, е-маил -->
          <p class="text">
            <?php echo $adress; ?><br>
            <a class="contact_link" href=<?php echo $phone; ?>><?php echo $phoneF; ?></a><br>
            <a class="contact_link" href=<?php echo "mailto:".$email; ?>><?php echo $email; ?></a>
          </p>
        </div>
        <div class="content_block"><!-- Соцсети -->
          <div class="soc_links">
            <a href=<?php echo $socLinkVK; ?> class="soc_link"><img src="img/svg/icon-vk.svg"></a>
            <a href=<?php echo $socLinkFB; ?> class="soc_link"><img src="img/svg/icon-facebook.svg"></a>
            <a href=<?php echo $socLinkOK; ?> class="soc_link"><img src="img/svg/icon-odnoklassniki.svg"></a>
            <a href=<?php echo $socLinkTW; ?> class="soc_link"><img src="img/svg/icon-twitter.svg"></a>
            <a href=<?php echo $socLinkIN; ?> class="soc_link"><img src="img/svg/icon-instagram.svg"></a>
          </div>
        </div>
      </div>
      <div class="content_line" hidden>
        <div class="content_block"><!-- Search form -->
          
          <div class="footer_search input-group my-1">
            <input type="text" class="form-control" placeholder="Поиск" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button"><img src="img/svg/icon-search.svg"></button>
            </div>
          </div>
        </div>
        <div class="content_block"><!-- Меню -->
          <div class="footer_nav">
            <a href="" class="footer_nav_link">1</a>
            <a href="" class="footer_nav_link">2</a>
            <a href="" class="footer_nav_link">3</a>
            <a href="" class="footer_nav_link">4</a>
            <a href="" class="footer_nav_link">5</a>
            <a href="" class="footer_nav_link">6</a>
            <a href="" class="footer_nav_link">7</a>
          </div>
        </div>
      </div>
      <div class="content_line">
        <div class="content_block"><!-- Копирайт -->
          <p class="text">
            © 2020 <?php echo $companyFullName; ?>
          </p>
        </div>
        <div class="content_block"><!-- ИНН КПП ОГРН -->
          <p class="text addInfo">
            ОГРН <?php echo $ogrn; ?><br> 
            ИНН <?php echo $inn; ?><br>
            КПП <?php echo $kpp; ?>
          </p>
        </div>
        <div class="content_block"><!-- Копирайт -->
          <span style="color: #ffffff">Все права защищены</span>
        </div>
      </div>
    </div>
  </footer>

  
  <!-- JavaScript -->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap/bootstrap.min.js"></script>
  <script src="/js/script.js"></script>

</body>