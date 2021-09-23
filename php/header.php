<body>
    <header>
      <div id="first-header">
      <div class="logo">
          <a href="./index.php" class="logo">LOGO</a>
      </div>
      <div class="pc sns">
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>  
      </div>
      <div id="hamburger">
          <div class="icon">
              <span></span>
              <span></span>
              <span></span>
          </div>
      </div>
      <nav class="sm">
        <ul>
          <li><a href="./page1.php" class="menu-1">BLOG</a></li>
          <li><a href="./page2.php" class="menu-2">ABOUT</a></li>
          <li><a href="./page3.php" class="menu-3"></a></li>
          <li><a href="./page4.php" class="menu-4">CONTACT</a></li>
          <li><div class="sns">
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          </div></li>
       </ul>
     </nav>
      <nav class="pc">  
        <ul>
          <li><a href="./page1.php" class="menu-1">BLOG</a></li>
          <li><a href="./page2.php" class="menu-2">ABOUT</a></li>
          <li><a href="./page3.php" class="menu-3"></a></li>
          <li><a href="./page4.php" class="menu-4">CONTACT</a></li>
        </ul>
      </nav>
      <script>
        $('#hamburger').on('click', function(){
        $('.icon').toggleClass('close');
        $('.sm').slideToggle();
        });
      </script>
    </header>
    