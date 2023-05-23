<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CSS Cards</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  
<div class="app">
  <div class="cardList">
    <button class="cardList__btn btn btn--left">
      <div class="icon">
        <svg>
          <use xlink:href="#arrow-left"></use>
        </svg>
      </div>
    </button>

    <div class="cards__wrapper">
      <div class="card current--card">
        <div class="card__image">
          <img src="Images/me.jpg" alt="" />
        </div>
      </div>

      <div class="card next--card">
        <div class="card__image">
          <img src="Images/Daniel.jpg" alt="" />
        </div>
      </div>

      <div class="card previous--card">
        <div class="card__image">
          <img src="Images/Ronuel.jpg" alt="" />
        </div>
      </div>
    </div>

    <button class="cardList__btn btn btn--right">
      <div class="icon">
        <svg>
          <use xlink:href="#arrow-right"></use>
        </svg>
      </div>
    </button>
  </div>

  <div class="infoList">
    <div class="info__wrapper">
      <div class="info current--info">
        <h4 class="text location">Joseph Brian Eugenio</h4>
        <p class="text description">UI/UX Designer/Back-End</p>
      </div>

      <div class="info next--info">
        <h4 class="text location">Daniel Abengona</h4>
        <p class="text description">UI Designer</p>
      </div>

      <div class="info previous--info">
        <h4 class="text location">Ronuel Reyes</h4>
        <p class="text description">UI Designer/Back-End</p>
      </div>
    </div>
  </div>


  <div class="app__bg">
    <div class="app__bg__image current--image">
    <img src="Images/asdasd.jpg" alt="" />
    </div>
    <div class="app__bg__image next--image">
    <img src="Images/d.jpg" alt="" />
    </div>
    <div class="app__bg__image previous--image">
    <img src="Images/settings2.jpg" alt="" />
    </div>
  </div>
</div>

</div>


<svg class="icons" style="display: none;">
  <symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
    <polyline points='328 112 184 256 328 400'
           style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
  </symbol>
  <symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
    <polyline points='184 112 328 256 184 400'
           style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
  </symbol>
</svg>

<script type="text/javascript" src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>
<script type="text/javascript" src="us.js"></script>
</body>
</html>