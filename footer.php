<footer>
    <!--<img src="<?php echo $global_domain; ?>/static/img/thewinneris-w300.png" alt="Time Of Masters">//-->
    <p>Time Of Masters</p>
    <p>© <span class="current-year">2025</span> All Rights Reserved timeofmasters.pl</p>
</footer>
<script>
  function toggleMenu() {
      document.querySelector("nav ul").classList.toggle("active");
  }
</script>


<div class="btn-container" style="display: none">
    <?php
    $ip = isset($_SERVER['HTTP_CLIENT_IP'])
      ? $_SERVER['HTTP_CLIENT_IP']
      : (isset($_SERVER['HTTP_X_FORWARDED_FOR'])
        ? $_SERVER['HTTP_X_FORWARDED_FOR']
        : $_SERVER['REMOTE_ADDR']);
    ?>
    <div class="btn-style"><?php echo $ip; ?></div>
    <div class="btn-style"><?php echo $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']; ?></div>
    <button class="btn-style" onclick="changeBackground()">Zmień tło</button>
    <button class="btn-style" onclick="changeFontColor()">Zmień kolor tekstu</button>
    <button class="btn-style" onclick="changeFontStyle()">Zmień czcionkę</button>
</div>
<link rel="stylesheet" href="<?php echo $global_domain; ?>/static/css/dev-styles.css">
<script src="<?php echo $global_domain; ?>/static/js/dev-scripts.js" defer></script>
