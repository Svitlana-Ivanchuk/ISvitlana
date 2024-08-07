<?php
/*
Template Name: Home Page
Template Post Type: page
 */


get_header(); ?>
<div class="site-blocks-cover overlay" data-aos="fade" data-stellar-background-ratio="0.5">
 <div class="container">
  <div class="row align-items-center justify-content-center text-center">

   <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

    <div class="row justify-content-center mb-4">
     <div class="col-md-8 text-center">
      <h1>I Am Expert in <span class="typed-words"></span></h1>
      <p class="lead mb-5">I Make Beautiful Things</p>
      <div><a href="#" class="btn btn-primary btn-md">Hire Us</a></div>
     </div>
    </div>

   </div>
  </div>
 </div>
</div>

<?php echo do_shortcode('[section_shortcode]'); ?>

<section class="site-section">
 <div class="container">
  <div class="row">
   <div class="col-md-6 col-lg-4">
    <div class="p-3 box-with-humber">
     <div class="number-behind">01.</div>
     <h2>Our Values</h2>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam
      iste rerum perferendis.</p>
    </div>
   </div>

   <div class="col-md-6 col-lg-4">
    <div class="p-3 box-with-humber">
     <div class="number-behind">02.</div>
     <h2>Our Mission</h2>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam
      iste rerum perferendis.</p>
    </div>
   </div>

   <div class="col-md-6 col-lg-4">
    <div class="p-3 box-with-humber">
     <div class="number-behind">03.</div>
     <h2>Our Philosophy</h2>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam
      iste rerum perferendis.</p>
    </div>
   </div>
  </div>
 </div>
</section>



<section class="site-section">
 <div class="container">
  <div class="row mb-5 justify-content-center">
   <div class="col-md-8 text-center">
    <h2 class="text-black h1 site-section-heading text-center">Featured Projects</h2>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, itaque neque, delectus odio iure explicabo.</p>
   </div>
  </div>
 </div>

 <div class="container-fluid">
  <?php echo do_shortcode('[section_shortcode_projects]'); ?>

  <!--<div class="col-md-6 col-lg-4">
   <a href="#" class="media-1">
    <img src="images/img_1.jpg" alt="Image" class="img-fluid">
    <div class="media-1-content">
     <h2>Project Name 1</h2>
     <span class="category">Web Application</span>
    </div>
   </a>
  </div>-->

  <div class="col-12 text-center mt-5">
   <a href="/lessonswp.local/portfolio/" class="btn btn-primary btn-md">Show All Works</a>
  </div>
 </div>
</section>

<section class="site-section testimonial-wrap">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-8 text-center">
    <h2 class="text-black h1 site-section-heading text-center">Testimonials</h2>
   </div>
  </div>
 </div>
 <div class="slide-one-item home-slider owl-carousel">
  <div>
   <div class="testimonial">

    <blockquote class="mb-5">
     <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat
      repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde
      iusto.&rdquo;</p>
    </blockquote>

    <figure class="mb-4 d-flex align-items-center justify-content-center">
     <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
     <p>John Smith</p>
    </figure>
   </div>
  </div>
  <div>
   <div class="testimonial">

    <blockquote class="mb-5">
     <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat
      repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde
      iusto.&rdquo;</p>
    </blockquote>
    <figure class="mb-4 d-flex align-items-center justify-content-center">
     <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
     <p>Christine Aguilar</p>
    </figure>

   </div>
  </div>

  <div>
   <div class="testimonial">

    <blockquote class="mb-5">
     <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat
      repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde
      iusto.&rdquo;</p>
    </blockquote>
    <figure class="mb-4 d-flex align-items-center justify-content-center">
     <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
     <p>Robert Spears</p>
    </figure>


   </div>
  </div>

  <div>
   <div class="testimonial">

    <blockquote class="mb-5">
     <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat
      repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde
      iusto.&rdquo;</p>
    </blockquote>
    <figure class="mb-4 d-flex align-items-center justify-content-center">
     <div><img src="images/person_5.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
     <p>Bruce Rogers</p>
    </figure>

   </div>
  </div>

 </div>
</section>

<!--<section class="site-section bg-light">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-8 text-center">
    <h2 class="text-black h1 site-section-heading text-center">Blog</h2>
   </div>
  </div>

  <div class="row">
   <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
    <div class="h-entry">
     <img src="images/img_1.jpg" alt="Image" class="img-fluid">
     <h2 class="font-size-regular"><a href="#">Create Beautiful Website In Less Than An Hour</a></h2>
     <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a>
     </div>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit
      suscipit quaerat rerum voluptatibus a eius.</p>
     <p><a href="#">Continue Reading...</a></p>
    </div>
   </div>
   <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
    <div class="h-entry">
     <img src="images/img_2.jpg" alt="Image" class="img-fluid">
     <h2 class="font-size-regular"><a href="#">Create Beautiful Website In Less Than An Hour</a></h2>
     <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a>
     </div>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit
      suscipit quaerat rerum voluptatibus a eius.</p>
     <p><a href="#">Continue Reading...</a></p>
    </div>
   </div>
   <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
    <div class="h-entry">
     <img src="images/img_1.jpg" alt="Image" class="img-fluid">
     <h2 class="font-size-regular"><a href="#">Create Beautiful Website In Less Than An Hour</a></h2>
     <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a>
     </div>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit
      suscipit quaerat rerum voluptatibus a eius.</p>
     <p><a href="#">Continue Reading...</a></p>
    </div>
   </div>

  </div>
 </div>
</section>-->

<a href="#" class="bg-primary py-5 d-block">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-md10">
    <h2 class="text-white">Let's Make Something Greate Together!</h2>
   </div>
  </div>
 </div>
</a>

<form method="post" action="<?php echo admin_url('admin-post.php'); ?>">
 <input type="hidden" name="action" value="save_custom_data">
 <!--необходим для отправки формы в wp. без этой строки wp не будет обрабатывать форму-->
 <?php wp_nonce_field('save_custom_data_nonce', 'save_custom_data_nonce'); ?>
 <!--создаем проверочный код-->
 <label for="email">Email:</label>
 <input type="email" name="email" id="email" required>
 <label for="message">Message:</label>
 <textarea name="message" id="message" required></textarea>
 <input type="submit" value="Submit">
</form>

<?php get_footer(); ?>