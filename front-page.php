<?php get_header(); ?>
<main class="landing">
  <section class="hero-container">
    <div class="hero-banner" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(<?php echo get_template_directory_uri() . "/assets/images/Banner.png" ?>">
      <div class="hero-content fx-pop-in">
        <h1>MekTek</h1>
        <p>Engineering • Project Management • Equipment Supply</p>
        <button class="contact-us-btn"><a href="/contact">Contact us →</a></button>
      </div>
      <img class="banner-divider" src="<?php echo get_template_directory_uri() . "/assets/images/landing_divider.svg" ?>" />
    </div>
  </section>
  <section class="solutions-container padded">
    <img src="<?php echo get_template_directory_uri() . "/assets/images/photo1.jpg" ?>" />
    <div class="solutions-text">
      <h2>Engineered Solutions</h2>
      <div>
        <p>
          MekTek is a registered professional engineering consulting firm with a head office in Saskatoon and projects across Canada. We provide consulting services for project engineering, project/construction management, and general engineering services, as well as supplying cost-effective capital equipment. Our specialty includes various fields such as mining, ag-processing, manufacturing, and food processing.
        </p>
        <p>
          We are well experienced in design, engineering, procurement, and project management. At MekTek, you can be assured that our quality services are provided with the highest standard. Our client base includes private firms, co-operatives, multi-national corporations, and federal governments.
        </p>
      </div>
    </div>
  </section>
  <section class="explore-container padded">
    <h2>Explore MekTek</h2>
    <div class="explore-card-container">
      <a href="/about" class="explore-card">
        <div class="explore-img-container"><img src="<?php echo get_template_directory_uri() . "/assets/images/photo2.png" ?>" /></div>
        <div>
          <h3>
            About Us
          </h3>
          <p>
            Learn more about our engineering services, specialties, and core company values.
          </p>
        </div>
        <div class="button-container">
          <div class="button button--grow" style="background-image: url(<?php echo get_template_directory_uri() . "/assets/images/arrow.svg" ?>)">
            <span class="button-text">Read more</span>
            <span class="visually-hidden">Learn more about our engineering services, specialties, and core company values.</span>
            <span class="button-arrow" aria-hidden="true"></span>
          </div>
        </div>
      </a>
      <a href="/partners" class="explore-card">
        <div class="explore-img-container"><img src="<?php echo get_template_directory_uri() . "/assets/images/photo3.png" ?>" /></div>
        <div>
          <h3>
            Associate Partners
          </h3>
          <p>
            With the help of our partners, we provide capital equipment in a multitude of areas.
          </p>
        </div>
        <div class="button-container">
          <div class="button button--grow" style="background-image: url(<?php echo get_template_directory_uri() . "/assets/images/arrow.svg" ?>)">
            <span class="button-text">Read more</span>
            <span class="visually-hidden">With the help of our partners, we provide capital equipment in a multitude of areas.</span>
            <span class="button-arrow" aria-hidden="true"></span>
          </div>
        </div>
      </a>
      <a href="/aeshydro" class="explore-card">
        <div class="explore-img-container"><img src="<?php echo get_template_directory_uri() . "/assets/images/photo4.svg" ?>" /></div>
        <div>
          <h3>
            AES Hydro
          </h3>
          <p>
            MekTek is the Canadian representative for AES Hydro - providing equipment supply for the hydropower industry.
          </p>
        </div>
        <div class="button-container">
          <div class="button button--grow" style="background-image: url(<?php echo get_template_directory_uri() . "/assets/images/arrow.svg" ?>)">
            <span class="button-text">Read more</span>
            <span class="visually-hidden">MekTek is the Canadian representative for AES Hydro - providing equipment supply for the hydropower industry</span>
            <span class="button-arrow" aria-hidden="true"></span>
          </div>
        </div>
      </a>
    </div>
  </section>
  <section class="clients-container padded">
    <h2>
      Our Clients
    </h2>
    <?php the_content(); ?>
  </section>
</main>
<?php get_footer(); ?>