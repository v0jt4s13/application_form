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
        <div class="row">
          <div class="col-12">
            <p class="lead text-justify">
              „MAMMA Polska Stowarzyszenie" to organizacja powołana do reprezentowania środowiska Mieszanych Sztuk Walki w debacie publicznej
              oraz w mediach. Głównym celem Stowarzyszenia jest dbanie o pozytywny wizerunek MAMMA, scalenie amatorskiego środowiska a w
              przyszłości wprowadzenie dyscypliny do grona sportów olimpijskich.
              <br><br>
              Zajmiemy się edukacją młodzieży, szkoleniem zawodników i trenerów, dbaniem o bezpieczeństwo w sportowej rywalizacji oraz
              wdrażaniem i prowadzniem projektów społecznych. Jako jedyna polska organizacja MAMMA POLSKA jest zrzeszona w strukturach
              światowej Federacji - International Mixed Martial Arts Federation (IMAMMAF). Tym samym - również jako jedyna organizacja w
              Polsce - będzie reprezentować polskie MAMMA na arenie międzynarodowej.
            </p>
          </div>
        </div>
  </div>

  <?php
    require("footer.php");
  ?>

</body>
</html>
