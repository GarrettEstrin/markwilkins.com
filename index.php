<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MarkWilkins.com</title>
  <link rel="stylesheet" href="dist/assets/css/main.min.css">
  <script src="/dist/assets/js/jquery.min.js"></script>
  <script src="/dist/assets/js/scrollify.js"></script>
</head>
<body>
  <div class="mainbag">
    <?php include 'parts/nav.php' ?>
    <?php include 'parts/hero.php' ?>
    <?php include 'parts/about.php' ?>
    <?php include 'parts/projects.php' ?>
    <?php include 'parts/contact.php' ?>
    <?php include 'parts/friends.php' ?>
  </div>
<script>
      $.scrollify({
        section : ".section",
        // sectionName : "section-name",
        // interstitialSection : "",
        easing: "easeOutExpo",
        scrollSpeed: 500,
        offset : 0,
        scrollbars: false,
        standardScrollElements: "",
        setHeights: false,
        overflowScroll: true,
        updateHash: true,
        touchScroll:true,
        before:function() {},
        after:function() {},
        afterResize:function() {},
        afterRender:function() {}
      });
</script>
</body>
</html>