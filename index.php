<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"rel="stylesheet"/>
    
    <!-- My style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Chief slider styles -->
    <link rel="stylesheet" href="js/plugins/chief-slider.min.css">

    <title>RusCraft</title>
</head>
<body onload="loadLine()">
  <!-- Header -->
  <header class="header-nav">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <div class="nav-info">
            <p><span class="blue-text">IP: </span>123.456.789.000</p>
            <p><span class="blue-text">Версия: </span>1.18.2</p>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse ms-auto flex-grow-0" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link nav-menu" href="#info">О сервере</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-menu" href="#modifications-slider">Моды</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-menu" href="#gallery">Галерея</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-menu" href="#best-players">Рейтинг</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <div class="container">
    <!-- Main block -->
    <div class="row main-block d-flex">
      <div class="col main-info">
        <h1 class="blue-text font-weight-bold">RusCraft</h1>
        <p class="online-text">Сейчас играют <span class="blue-text">147</span> игроков</p>
        <div class="background-online-line"><div class="online-line" data-percent ="60%">60%</div></div>
        <div class="d-flex button-copy-ip">
          <div class="ip-in-button"><p>123.456.789.000</p></div>
          <div class="copy-ico-div" id="copy-ip" data-ip="123.456.789.000"><img id="copy-ico" class="copy-ico" src="./img/copy-ico.png" alt="copy"></div>
        </div>
      </div>
      <div class="col-xxl-6 col-lg-7 col-md-6 col-sm-5 col-xs-12">
        <img class="main-logo" src="./img/main-logo.jpeg" alt="Main logo">
      </div>
    </div>

    <!-- Brief information -->
    <div>
      <h2 class="brief-info-serv">Первый сервер Minecraft для технического творчества при поддержке Федерального центра дополнительного образования</h2>
    </div>
    
    <!-- Detailed information -->
    <div class="detailed-information transparency">
      <a name="info"></a>
      <h3 class="blue-text">Особенности сервера</h3>
      <p>Карта игровой зоны соответствует карте территорий Российской Федерации и включает все регионы Страны. Каждый игровой регион будет содержать определенный тип ресурсов, а участникам игрового сервера будет необходимо налаживать торговые отношения и выстраивать договоренности для взаимовыгодного сотрудничества</p>
      <p>Игровые модификации добавляют в игру новые технологические элементы и позволяют участникам находить новые типы ресурсов, необходимые для развития важных отраслей современной жизни (энергетика, космонавтика, биологические виды новых сельскохозяйственных культур и многое другое)</p>
      <p>Команда организаторов систематически проводит образовательные и развлекательные события (Ивенты): кейскарты, jumping пазлы, королевские битвы, командные головоломки и многое другое</p>
    </div>

    <!-- Open beta-test -->
    <div class="beta-test transparency">
      <div class="beta-test-content d-flex">
        <div>
          <h4 class="blue-text">Открытый beta-тест!</h4>
          <p>В <span>2023</span> году сервер откроет свои двери для всех желающих, но уже сейчас самые преданные любители кубической песочницы могут подать заявку на <span>beta-тестирование</span>.</p>
        </div>
        <a class="text-decoration-none" href="/registration/registration.html">Присоединиться</a>
      </div>
    </div>

    <!-- Modifications -->
    <section id="modifications-slider" class="slider transparency">

      <header class="d-flex mb-4 justify-content-between align-items-center">
        <h3 class="h-mods h-3 blue-text">Модификации</h3>
        <div class="slider-controls">
          <button type="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button type="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </header>

      <div class="slider__container">
        <div class="slider__wrapper">
          <div class="slider__items">

            <div class="slider__item">
              <div class="card">
                <img src="./img/mods/mod2.png" class="card-img-top" alt="MiniMePets"/>
                <div class="card-body">
                  <h5 class="card-title blue-text">MiniMePets</h5>
                  <p class="card-text">Превратите своих волков и кошек в маленьких игроков, используя именную бирку. Теперь вы сможете поселить у себя на базе мини-версию себя, своих друзей или любимых блогеров, которые будут также сражаться на вашей стороне во время боя с враждебными мобами.</p>
                  <a href="https://minecraft-inside.ru/mods/155546-minimepets.html" target="_blank" class="btn btn-primary">Скачать</a>
                </div>
              </div>
            </div>
            <div class="slider__item">
              <div class="card">
              <img src="./img/mods/mod1.png" class="card-img-top" alt="Untamed Wilds"/>
              <div class="card-body">
                <h5 class="card-title blue-text">Untamed Wilds</h5>
                <p class="card-text">Untamed Wilds переработает фауну майнкрафт, добавив множество новых подвидов животных и уникальные механики по взаимодействию с ними. Благодаря чему у мода получится существенно разнообразить и оживить мир игры.</p>
                <a href="https://minecraft-inside.ru/mods/146888-untamed-wilds.html" target="_blank" class="btn btn-primary">Скачать</a>
              </div>
            </div>
            </div>
            <div class="slider__item">
              <div class="card">
              <img src="img/mods/mod3.png" class="card-img-top" alt="Sprint O’ Meter"/>
              <div class="card-body">
                <h5 class="card-title blue-text">Sprint O’ Meter</h5>
                <p class="card-text">После установки модификации, в майнкрафт появится система выносливости. Во время бега игрок будет уставать и когда показатель выносливости дойдёт до нуля, у него появится медлительность и нельзя будет прыгать/плавать, пока игрок не отдохнет.</p>
                <a href="https://minecraft-inside.ru/mods/155968-sprint-o-meter.html" target="_blank" class="btn btn-primary">Скачать</a>
              </div>
            </div>
            </div>
            <div class="slider__item">
              <div class="card">
              <img src="img/mods/mod4.png" class="card-img-top" alt="Timber Frames"/>
              <div class="card-body">
                <h5 class="card-title blue-text">Timber Frames</h5>
                <p class="card-text">Timber Frames — это декоративный мод в средневековом стиле, позволяющий игрокам создавать фэнтезийные постройки с красивым деревянным каркасом. Стены из деревянного каркаса будут крафтиться из любого вида дерева и их можно будет изменить с помощью специального инструмента.</p>
                <a href="https://minecraft-inside.ru/mods/156106-timber-frames.html" target="_blank" class="btn btn-primary">Скачать</a>
              </div>
            </div>
            </div>
            <div class="slider__item">
              <div class="card">
              <img src="img/mods/mod5.png" class="card-img-top" alt="MDHWCC"/>
              <div class="card-body">
                <h5 class="card-title blue-text">MDHWCC</h5>
                <p class="card-text">Простой твик, добавляющий в игру механику, с которой мобы будут дропать головы даже без взрыва заряженного крипера. Произойти это может с 3% шансом.</p>
                <a href="https://minecraft-inside.ru/mods/156080-mdhwcc.html" target="_blank" class="btn btn-primary">Скачать</a>
              </div>
            </div>
            </div>
            <div class="slider__item">
              <div class="card">
              <img src="img/mods/mod6.png" class="card-img-top" alt="LeapOfFaith"/>
              <div class="card-body">
                <h5 class="card-title blue-text">LeapOfFaith</h5>
                <p class="card-text">Твик, позволяющий игроку безболезненно приземляться на блоки сена не получая урона, аналогично механике из игр Assassin's Creed. Если же вам захочется безопасно приземляться на другие блоки, вы можете указать их в файле конфигурации мода.</p>
                <a href="https://minecraft-inside.ru/mods/156059-leapoffaith.html" target="_blank" class="btn btn-primary">Скачать</a>
              </div>
            </div>
            </div>
            <div class="slider__item">
              <div class="card">
              <img src="./img/mods/mod2.png" class="card-img-top" alt="MiniMePets"/>
              <div class="card-body">
                <h5 class="card-title blue-text">MiniMePets</h5>
                <p class="card-text">Превратите своих волков и кошек в маленьких игроков, используя именную бирку. Теперь вы сможете поселить у себя на базе мини-версию себя, своих друзей или любимых блогеров, которые будут также сражаться на вашей стороне во время боя с враждебными мобами.</p>
                <a href="#!" target="_blank" class="btn btn-primary">Скачать</a>
              </div>
            </div>
            </div>
            <div class="slider__item">
              <div class="card">
              <img src="./img/mods/mod1.png" class="card-img-top" alt="Untamed Wilds"/>
              <div class="card-body">
                <h5 class="card-title blue-text">Untamed Wilds</h5>
                <p class="card-text">Untamed Wilds переработает фауну майнкрафт, добавив множество новых подвидов животных и уникальные механики по взаимодействию с ними. Благодаря чему у мода получится существенно разнообразить и оживить мир игры.</p>
                <a href="#!" target="_blank" class="btn btn-primary">Скачать</a>
              </div>
            </div>
            </div>
            <div class="slider__item">
              <div class="card">
              <img src="img/mods/mod3.png" class="card-img-top" alt="Sprint O’ Meter"/>
              <div class="card-body">
                <h5 class="card-title blue-text">Sprint O’ Meter</h5>
                <p class="card-text">После установки модификации, в майнкрафт появится система выносливости. Во время бега игрок будет уставать и когда показатель выносливости дойдёт до нуля, у него появится медлительность и нельзя будет прыгать/плавать, пока игрок не отдохнет.</p>
                <a href="#!" target="_blank" class="btn btn-primary">Скачать</a>
              </div>
            </div>
            </div>
            <div class="slider__item">
              <div class="card">
              <img src="img/mods/mod4.png" class="card-img-top" alt="Timber Frames"/>
              <div class="card-body">
                <h5 class="card-title blue-text">Timber Frames</h5>
                <p class="card-text">Timber Frames — это декоративный мод в средневековом стиле, позволяющий игрокам создавать фэнтезийные постройки с красивым деревянным каркасом. Стены из деревянного каркаса будут крафтиться из любого вида дерева и их можно будет изменить с помощью специального инструмента.</p>
                <a href="https://minecraft-inside.ru/mods/156106-timber-frames.html" target="_blank" class="btn btn-primary">Скачать</a>
              </div>
            </div>
            </div>
            <div class="slider__item">
              <div class="card">
              <img src="img/mods/mod5.png" class="card-img-top" alt="MDHWCC"/>
              <div class="card-body">
                <h5 class="card-title blue-text">MDHWCC</h5>
                <p class="card-text">Простой твик, добавляющий в игру механику, с которой мобы будут дропать головы даже без взрыва заряженного крипера. Произойти это может с 3% шансом.</p>
                <a href="https://minecraft-inside.ru/mods/156080-mdhwcc.html" target="_blank" class="btn btn-primary">Скачать</a>
              </div>
            </div>
            </div>
            <div class="slider__item">
              <div class="card">
                <img src="img/mods/mod6.png" class="card-img-top" alt="LeapOfFaith"/>
                <div class="card-body">
                  <h5 class="card-title blue-text">LeapOfFaith</h5>
                  <p class="card-text">Твик, позволяющий игроку безболезненно приземляться на блоки сена не получая урона, аналогично механике из игр Assassin's Creed. Если же вам захочется безопасно приземляться на другие блоки, вы можете указать их в файле конфигурации мода.</p>
                  <a href="https://minecraft-inside.ru/mods/156059-leapoffaith.html" target="_blank" class="btn btn-primary">Скачать</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery -->
    <div class="gallery transparency">
      <a name="gallery"></a>
      <h3 class="h-3 blue-text">Галерея</h3>

      <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
          <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="4" aria-label="Slide 5"></button>
        </div>
    
        <!-- Inner -->
        <div class="carousel-inner">
          <!-- Single item -->
          <div class="carousel-item active">
            <img src="img/gallary/img1.jpg" class="d-block w-100" alt="Деревня на острове"/>
            <div class="carousel-caption d-md-block">
              <h5>Анна Черная</h5>
            </div>
          </div>
    
          <!-- Single item -->
          <div class="carousel-item">
            <img src="img/gallary/img2.png" class="d-block w-100" alt="Замок"/>
            <div class="carousel-caption d-md-block">
              <h5>Анна Черная</h5>
            </div>
          </div>
    
          <!-- Single item -->
          <div class="carousel-item">
            <img src="img/gallary/img3.png" class="d-block w-100" alt="Пшеничное поле" />
            <div class="carousel-caption d-md-block">
              <h5>Phantasm</h5>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <img src="img/gallary/img4.jpg" class="d-block w-100" alt="Рынок" />
            <div class="carousel-caption d-md-block">
              <h5>Анна Черная</h5>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <img src="img/gallary/img5.jpg" class="d-block w-100" alt="Замок на горе" />
            <div class="carousel-caption d-md-block">
              <h5>Champion3</h5>
            </div>
          </div>
        </div>
        <!-- Inner -->
    
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        </div>
        <!-- Carousel wrapper -->
    </div>

    <!-- Best players -->
    <div class="best-players transparency">
      <a name="best-players"></a>
      <h3 class="h-3 blue-text">Лучшие игроки месяца</h3>
    </div>
  </div>
  <iframe class="transparency" referrerpolicy="no-referrer-when-downgrade" height="900px" width="100%" style="border:none;" src="https://view-awesome-table.com/-MypmRLT8uFwzvE_fTy5/view"></iframe>

  <!-- Footer -->
  <footer>
    <div class="container footer-container">
      <div class="footer-info">
        <p>Команда-организатор сервера: Федеральное государственное бюджетное образовательное учреждение дополнительного образования «Федеральный центр дополнительного образования и организации отдыха и оздоровления детей» (ФГБОУ ДО ФЦДО)</p>
        <a class="footer-button" href="/registration/registration.html">Записаться на beta-test</a>
      </div>
      <div class="contacts">
        <a href="vk.com/FEDCDOMinecraft" target="_blank"><img src="img/contacts/vk.png" alt="vk"></a>
        <a href="t.me/FEDCDOMinecraft" target="_blank"><img src="img/contacts/telegramm.png" alt="telegramm"></a>
        <a href="https://discord.gg/axs3uSh4" target="_blank"><img src="img/contacts/discord.png" alt="discord"></a>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="js/plugins/chief-slider.min.js"></script>
  <script src="js/app.js"></script>

</body>
</html>