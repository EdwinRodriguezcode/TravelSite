<?php
/**
 * *Template Name: Homepage
 * *
 * @package TravelSite
 * 
 * 
 */
?>
<?php get_header();?>


   <!-- This is the start of hero section -->
    <main id="topBtn">
        <div class="hero-text">
            <h1>Hello World</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </main>
    <!-- This is the end of hero section --> 

    <!-- This is the start of icon section -->
    <section class="row">
        <div class="column">
            <img src="http://localhost:10010/wp-content/uploads/2022/05/globe.png" alt="pink globe icon.">
            <h2>CHOOSE YOUR DESTIANTION</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis inventore, perspiciatis rerum quisquam nam ex. </p>
        </div>
        <div class="column">
            <img src="http://localhost:10010/wp-content/uploads/2022/05/airport.png" alt="pink globe icon.">
            <h2>CATCH YOUR FLIGHT</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis inventore, perspiciatis rerum quisquam nam ex. </p>
        </div>
        <div class="column">
            <img src="http://localhost:10010/wp-content/uploads/2022/05/pin.png" alt="pink globe icon.">
            <h2>LAND IN PARADISE</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis inventore, perspiciatis rerum quisquam nam ex. </p>
        </div>
    </section>
    <!-- This is the end of icon section -->


      <!-- This is the start of info section -->
      <section class="info-section" id="aboutSection">
        <div class="infoBox">
            <img src="http://localhost:10010/wp-content/uploads/2022/05/infobox-img-scaled.jpg" alt="beach chairs with umberellas on a beach." height="490px" width="50%" style="border: 1px solid #000;">
        </div>
        <div class="infoBox infoTextbox">
            <h2>BOOK YOUR DREAM VACATION TODAY</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius hic voluptatibus vel cum nisi nulla deleniti aspernatur doloremque libero dolor. Earum explicabo libero atque neque architecto perspiciatis aliquam quas est.
            Magnam laborum sed dolorem non maxime placeat dolore possimus nisi architecto mollitia, officia harum atque soluta laboriosam voluptas tenetur aliquid dignissimos, dicta minus repellat quis. Illum fugit suscipit molestiae doloremque.
            Fuga earum totam harum unde asperiores vitae at adipisci in reprehenderit debitis, quo nisi? Architecto vitae voluptatibus maiores! Sunt vitae nulla nostrum repudiandae dignissimos dolorum deserunt, expedita minima veritatis cupiditate?
           </p>
        </div>
    </section>
    <!-- This is the end of info section -->



<?php get_template_part('template-parts/info-section')?>
<?php get_template_part('template-parts/banner')?>