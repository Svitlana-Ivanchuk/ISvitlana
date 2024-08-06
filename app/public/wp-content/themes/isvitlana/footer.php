<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-5">
            <h2 class="footer-heading mb-4">About Me</h2>
            <p>I will help you with finding a solution and solve your problems. I use development to create digital products that also help your
              business.
            </p>
          </div>
          <div class="col-md-3 ml-auto">
            <!--<h2 class="footer-heading mb-4">Features</h2>-->
            <nav class="site-navigation position-relative" role="navigation">
              <?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
                'theme_location' => 'footer',
                'container' => false, // обертка списка, div или nav. false - без обертки
                'menu_id' => 'footer-nav-ul',
                'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
                'menu_class' => 'list-unstyled',
                'menu' => '',
                'container_class' => 'list-unstyled', // Значение атрибута class="" у контейнера меню.
                'container_id' => '', // Значение атрибута id="" у контейнера меню.
                'echo' => true, // Вывести на экран или в переменную
                'before' => '', // Текст перед тегом <a> в меню.
                'after' => '', // Текст после каждого тега </a> в меню.
                'link_before' => '', // Текст перед анкором каждой ссылки в меню.
                'link_after' => '', // Текст после анкора каждой ссылки в меню.
                'depth' => 2, // Уровень вложенности. 0 - все уровни.
                'walker' => new My_Walker_Nav_Menu(),
              );
              wp_nav_menu($args);
              ?>
            </nav>
            <!--<ul class="list-unstyled">
       <li><a href="#">About Us</a></li>
       <li><a href="#">Services</a></li>
       <li><a href="#">Testimonials</a></li>
       <li><a href="#">Contact Us</a></li>
      </ul>-->
          </div>


          <div class="col-md-3 mr-auto">
            <h2 class="footer-heading mb-4">Social Media</h2>
            <ul class="social-media ">
              <li><?php
              $facebook = get_theme_mod('facebook', '');
              if (!empty($facebook)):
                echo '<span><a href="' . $facebook . '" class="p-2" target="_blank" ><strong><span class="icon-facebook"></span></strong></a></span>';
              endif ?></li>

              <li><?php
              $instagram = get_theme_mod('instagram', '');
              if (!empty($instagram)):
                echo '<span><a href="' . $instagram . '" class="p-2" target="_blank" ><strong><span class="icon-instagram"></span></strong></a></span>';
              endif ?></li>

              <li><?php
              $github = get_theme_mod('github', '');
              if (!empty($github)):
                echo '<span><a href="' . $github . '" class="p-2" target="_blank" ><strong><span class="icon-github"></span></strong></a></span>';
              endif ?></li>

              <li><?php
              $linkedin = get_theme_mod('linkedin', '');
              if (!empty($linkedin)):
                echo '<span><a href="' . $linkedin . '" class="p-2" target="_blank" ><strong><span class="icon-linkedin"></span></strong></a></span>';
              endif ?></li>
            </ul>
          </div>
          <!--<a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
      <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
      <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
      <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
     </div>-->
        </div>
      </div>
      <div class="col-md-3">
        <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
        <form action="#" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email"
              aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <div class="border-top pt-5">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
              target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>

    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
<script>
  var typed = new Typed('.typed-words', {
    strings: ["Web Apps", " WordPress", "Back-End"],
    typeSpeed: 80,
    backSpeed: 80,
    backDelay: 4000,
    startDelay: 1000,
    loop: true,
    showCursor: true
  });
</script>
</body>

</html>