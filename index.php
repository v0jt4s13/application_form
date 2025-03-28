<?php
  require("global.php");
  require("head.php");
?>
</head>
<body>
  <?php
    require("menu-nav.php");
  ?>
  <div class="hero" style="background-image: url('<?php echo $global_domain; ?>/static/img/thewinneris.png');">
    <div class="hero-content">
      <?php if (1==1) { ?>
      <div class="hero-bg-img">
      <a href="entry_form/"><img src="<?php echo $global_domain; ?>/static/img/tlofbmma.png"></a>
      </div>
      <?php } else { ?>
      <h1></h1>
      <p></p>
      <?php } ?>
    </div>
  </div>

  <main>
    <div class="championship">
      <a href="entry_form/" class="zgloszenia">
        <h2>MISTRZOSTWA Amatorskiego MMA Bojano</h2>
        <p>Zapisz się do udziału już dziś.</p>
      </a>
    </div>

    <!-- <div class="news">
      <div class="news-item">
        <h3>Lorem ipsum dolor MMA</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <div class="news-item">
        <h3>Lorem ipsum dolor</h3>
        <p>Bacon ipsum dolor amet short ribs brisket venison rump drumstick pig sausage prosciutto chicken spare ribs salami picanha doner.</p>
      </div>
    </div> -->

    <div id="about" class="about">
      <div class="news-item">
        <h2>O nas</h2>
        <p>Federacja Time Of Masters od wielu lat zajmuję się propagowaniem i organizacja amatorskich zawodów w kick boxingu oraz mieszanych sztuk walki na terenie całego kraju. Na przestrzeni swej wieloletniej działalności udało nam się zorganizować ponad 50 amatorskich turniejów. Łącznie wzięło w nim udział około 100 000 zawodników, dzieci, młodzieży oraz dorosłych z Polski i zagranicy.</p>
        <p>Głównym założeniem organizacji jest sportowym, mobilizowanie i ukazanie młodym ludziom alternatywy dla istniejących negatywnych form spędzania czasu wolnego. Zawody sztuk i sportów walki są najbardziej celowane do młodzieży a celem ich jest przeciwdziałanie uzależnieniom, narkomani i agresji, pokazanie młodym ludziom jak w można dawać ujście emocjom w kontrolowanych warunkach i w bezpieczny sposób podczas rywalizacji sportowej. Rozwijanie świadomości uczestników zawodów z zakresu kultury fizycznej. Ideą zawodów jest przede wszystkim doskonalenie umiejętności sportowych wśród zawodników sztuk i sportów walki a także integracja środowiska zawodniczego oraz popularyzacja sportów i sztuk walk.</p>
      </div>
    </div>
  </main>

  <?php
    require("footer.php");
  ?>

</body>
</html>
