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
      <a href="zgloszenie-udzialu.php"><img src="<?php echo $global_domain; ?>/static/img/tlofbmma.png"></a>
      </div>
      <?php } else { ?>
      <h1></h1>
      <p></p>
      <?php } ?>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-wrap">
        <br>
        <h1 class="font-weight-thin text-left">O nas</h1>
        <p style="text-indent: 20px;"><b>Federacja Time Of Masters</b> od wielu lat zajmuję się propagowaniem i organizacja amatorskich zawodów w kick boxingu oraz mieszanych sztuk walki na terenie całego kraju. Na przestrzeni swej wieloletniej działalności udało nam się zorganizować ponad 50 amatorskich turniejów. Łącznie wzięło w nim udział około 100 000 zawodników, dzieci, młodzieży oraz dorosłych z Polski i zagranicy.</p>
        <p style="text-indent: 20px;">Głównym założeniem organizacji jest sportowym, mobilizowanie i ukazanie młodym ludziom alternatywy dla istniejących negatywnych form spędzania czasu wolnego. Zawody sztuk i sportów walki są najbardziej celowane do młodzieży a celem ich jest przeciwdziałanie uzależnieniom, narkomani i agresji, pokazanie młodym ludziom jak w można dawać ujście emocjom w kontrolowanych warunkach i w bezpieczny sposób podczas rywalizacji sportowej. Rozwijanie świadomości uczestników zawodów z zakresu kultury fizycznej. Ideą zawodów jest przede wszystkim doskonalenie umiejętności sportowych wśród zawodników sztuk i sportów walki a także integracja środowiska zawodniczego oraz popularyzacja sportów i sztuk walk.</p>
  </div>

  <?php
    require("footer.php");
  ?>

</body>
</html>
