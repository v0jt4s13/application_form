<?php
  require("global.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Time Of Masters</title>
  <link rel="stylesheet" href="<?php echo $global_domain; ?>/static/css/style.css">
  <script src="<?php echo $global_domain; ?>/static/js/script.js" defer></script>

  <style>

  </style>
</head>
<body>
  <?php
    require("header.php");
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
        <p>Federacja Time Of Masters od wielu lat zajmuję się propagowaniem i organizacja amatorskich zawodów w kick boxingu oraz mieszanych sztuk walki na terenie całego kraju. Na przestrzeni swej wieloletniej działalności udało nam się zorganizować ponad 50 amatorskich turniejów. Łącznie wzięło w nim udział około 100 000 zawodników, dzieci, młodzieży oraz dorosłych z Polski i zagranicy.</p>
        <p>Głównym założeniem organizacji jest sportowym, mobilizowanie i ukazanie młodym ludziom alternatywy dla istniejących negatywnych form spędzania czasu wolnego. Zawody sztuk i sportów walki są najbardziej celowane do młodzieży a celem ich jest przeciwdziałanie uzależnieniom, narkomani i agresji, pokazanie młodym ludziom jak w można dawać ujście emocjom w kontrolowanych warunkach i w bezpieczny sposób podczas rywalizacji sportowej. Rozwijanie świadomości uczestników zawodów z zakresu kultury fizycznej. Ideą zawodów jest przede wszystkim doskonalenie umiejętności sportowych wśród zawodników sztuk i sportów walki a także integracja środowiska zawodniczego oraz popularyzacja sportów i sztuk walk.</p>
  </div>

  <?php
    require("footer.php");
  ?>

</body>
</html>
