<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Time Of Masters</title>
  <link rel="stylesheet" href="/mma/static/css/style.css">
  <script src="/mma/static/js/script.js" defer></script>

  <style>

  </style>
</head>
<body>
  <?php
    require("header.php");
  ?>
  <div class="hero" style="background-image: url('/mma/static/img/thewinneris.png');">
    <div class="hero-content">
      <?php if (1==1) { ?>
      <div class="hero-bg-img">
      <a href="zgloszenie-udzialu.php"><img src="/mma/static/img/tlofbmma.png"></a>
      </div>
      <?php } else { ?>
      <h1></h1>
      <p></p>
      <?php } ?>
    </div>
  </div>

  <main>
    <div class="championship">
      <a href="zgloszenie-udzialu.php" class="zgloszenia">
        <h2>MISTRZOSTWA Amatorskiego MMA Bojano</h2>
        <p>Zapisz się do udziału już dziś.</p>
      </a>
    </div>

    <div class="news">
      <div class="news-item">
        <h3>Lorem ipsum dolor MMA</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <div class="news-item">
        <h3>Lorem ipsum dolor</h3>
        <p>Bacon ipsum dolor amet short ribs brisket venison rump drumstick pig sausage prosciutto chicken spare ribs salami picanha doner.</p>
      </div>
    </div>

    <div id="about" class="about">
      <h2>O nas</h2>
      <p>"Time Of Masters Stowarzyszenie" to organizacja powołana do reprezentowania środowiska Mieszanych Sztuk Walki w debacie publicznej oraz w mediach. Głównym celem Stowarzyszenia jest dbanie o pozytywny wizerunek MMA, scalenie amatorskiego środowiska a w przyszłości wprowadzenie dyscypliny do grona sportów olimpijskich.</p>
      <p>Zajmiemy się edukacją młodzieży, szkoleniem zawodników i trenerów, dbaniem o bezpieczeństwo w sportowej rywalizacji oraz wdrażaniem i prowadzniem projektów społecznych. Jako jedyna polska organizacja Time Of Masters jest zrzeszona w strukturach światowej Federacji - International Mixed Martial Arts Federation (IMMAF). Tym samym - również jako jedyna organizacja w Polsce - będzie reprezentować polskie MMA na arenie międzynarodowej.</p>
    </div>
  </main>

  <?php
    require("footer.php");
  ?>

</body>
</html>
