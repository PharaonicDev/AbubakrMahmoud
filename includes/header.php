<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      if (isset($title)) {
        $title .= " | AbuBakr Mahmoud| Front-end Developer";
      }

      else {
        $title = "AbuBakr Mahmoud | Front-end Developer | Cairo | Egypt";
      }
    ?>

    <title><?php echo $title;?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />

    <meta name="description" content="<?php if (isset($meta)) {echo $meta;}?>">
    <meta name="author" content="AbuBakr Mahmoud">

    <meta property="og:title" content="<?php echo $title;?>"/>
    <meta property="og:url" content="<?php echo "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"/>
    <meta property="og:description" content="<?php if (isset($meta)) {echo $meta;}?>"/>
    <meta property="og:image" content="https://AbuBakrMahmoud.com/img/screenshot.jpg"/>

    <link rel="icon" href="favicon.ico">

    <!-- Styles -->
    <link rel="stylesheet" href="sass/styles.min.css">

    <!-- Scripts -->
    <script data-main="js/main" src="js/require.js"></script>

    <!-- Analytics -->
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-20775561-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>

  <body>
