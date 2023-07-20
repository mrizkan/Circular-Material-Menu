<html lang="en"><head>
  <meta charset="UTF-8">
  <title>Circular Material Menu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  <script>
  window.console = window.console || function(t) {};
</script>
</head>

<body translate="no" data-new-gr-c-s-check-loaded="14.1115.0" data-gr-ext-installed="">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

<div class="container">
  <div class="menu__toggle">
    <span class="fa-sharp fa-solid fa-plus"></span>
  </div>

  <ul class="menu__list">
    <li class="menu__item">
      <a href="#"><i class="fa-brands fa-twitter"></i></a>
    </li>

    <li class="menu__item">
      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
    </li>

    <li class="menu__item">
      <a href="#"><i class="fa-brands fa-instagram"></i></a>
    </li>
  </ul>
</div>
    

  
      <script id="rendered-js">
$(".menu__toggle").click(function () {
  $(".menu__toggle").toggleClass("open");
  $(".menu__list").toggleClass("open");
});
//# sourceURL=pen.js
    </script>

  



</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>