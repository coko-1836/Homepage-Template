<body>
    <header>
      <div id="first-header">
      <div class="logo">
          <a href="#" class="logo">Logo
          </a>
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
          <li><a href="#">NEWS</a></li>
          <li><a href="#">ABOUT</a></li>
          <li><a href="#">SERVICES</a></li>
          <li><a href="#">CONTACT</a></li>
       </ul>
     </nav>
      <nav class="pc">  
        <ul>
          <li><a href="#">NEWS</a></li>
          <li><a href="#">ABOUT</a></li>
          <li><a href="#">SERVICES</a></li>
          <li><a href="#">CONTACT</a></li>
        </ul>
      </nav>
        <script>
        $('#hamburger').on('click', function(){
        $('.icon').toggleClass('close');
        $('.sm').slideToggle();
        });
      </script>
    </header>
    