<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        if (isset($page_title)) {
            echo "<title>$page_title</title>";
        } else {
            echo "<title>Time of Masters</title>";
        }
    ?>
    <link rel="stylesheet" href="<?php echo $global_domain; ?>/static/css/styles.css">
    <script src="<?php echo $global_domain; ?>/static/js/scripts.js" defer></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KB6CGMFX8Y"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-KB6CGMFX8Y');
    </script>
