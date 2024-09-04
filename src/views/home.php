<?php require_once APPROOT . '/src/views/include/header.php'; ?>
<main>
    <article>
      <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('<?= URLROOT ?>/img/cookbanner.png')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title"> Tasty Treasures Cookbook </h1>

            <p class="hero-text">
              Welcome to Tasty Treasures Cookbook! Your ultimate destination for delicious and easy-to-follow recipes
              that will turn your kitchen into a culinary wonderland.
            </p>

            <div class="btn-wrapper">
              <a href="#" class="btn btn-primary">Explore recipes</a>
            </div>

          </div>

          <div class="hero-slider" data-slider>

            <div class="slider-inner">
              <figure class="img-holder" style="--width: 575; --height: 550;">
                <img src="<?= URLROOT ?>/img/cooking.svg" width="575" height="550" alt="" class="img-cover">
              </figure>
            </div>

          </div>

        </div>
      </section>

      <section class="section service" aria-labelledby="service-label">
        <div class="container">


          <h2 class="h2 section-title" id="service-label">
            Features we Providing
          </h2>

          <p class="section-subtitle" id="service-subtitle">Discover a world of culinary possibilities with our app's
            array
            of features designed to streamline your cooking experience. Dive into our extensive collection of
            handpicked recipes, ranging from comforting classics to innovative creations</p>


          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="calendar-outline"></ion-icon>
                </div>

                <h3 class="h4 card-title">Meal Planning</h3>

                <p class="card-text">
                  Take the stress out of mealtime with
                  our intuitive meal planning tools
                  designed to simplify your weekly
                  menu organization.
                </p>

                <a href="#" class="btn-text">
                  <span class="span">Learn More</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="receipt-outline"></ion-icon>
                </div>

                <h3 class="h4 card-title">Recipe Varieties</h3>

                <p class="card-text">
                  Indulge in a culinary journey like no
                  other as you explore our vast
                  selection of recipes spanning a
                  multitude of cuisines and dietary
                  preferences.
                </p>

                <a href="#" class="btn-text">
                  <span class="span">Learn More</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="file-tray-outline"></ion-icon>
                </div>

                <h3 class="h4 card-title">Utilize leftovers</h3>

                <p class="card-text">
                  Embrace sustainability and
                  minimize food waste with our
                  innovative leftover utilization
                  feature.
                </p>

                <a href="#" class="btn-text">
                  <span class="span">Learn More</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <section class="explore" aria-labelledby="explore-label">
        <div class="container">


          <h2 class="h2 section-title" id="explore-label">
            Explore All Types Of Recipes
          </h2>

          <p class="section-subtitle" id="explore-subtitle">"Embark on a culinary adventure and discover a world of
            flavors with our extensive collection of recipes. From comforting classics to exotic
            international cuisines, our app has something to tantalize every taste bud and inspire your next delicious
            creation."</p>

          <ul class="grid-list">

            <li>
              <div class="explore-card">
                <figure class="img">
                  <img src="<?= URLROOT ?>/img/food1.jpg" alt="food 1" class="img-cover">
                </figure>
              </div>
            </li>

            <li>
              <div class="explore-card">
                <figure class="img">
                  <img src="<?= URLROOT ?>/img/food2.jpg" alt="food 2" class="img-cover">
                </figure>
              </div>
            </li>

            <li>
              <div class="explore-card">
                <figure class="img">
                  <img src="<?= URLROOT ?>/img/food3.png" alt="food 3" class="img-cover">
                </figure>
              </div>
            </li>


          </ul>

        </div>
      </section>


      <section class="section feature" aria-labelledby="feature-label">
        <div class="container">

          <figure class="feature-banner">
            <img src="<?= URLROOT ?>/img/barbecu.svg" width="800" height="531" loading="lazy" alt="feature banner"
              class="w-100">
          </figure>

          <div class="feature-content">

            <h2 class="h2 section-title">
              We make your cooking delightful so you can savor every moment.
            </h2>

            <p class="section-text">
              Join us on a culinary adventure with recipes that bring joy to your kitchen. From easy-to-follow
              instructions to delicious results, we ensure your cooking experience is both fun and rewarding.
            </p>

            <ul class="feature-list">

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Explore delectable recipes that excite your taste buds.
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Follow simple, step-by-step cooking instructions.
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Follow simple, step-by-step cooking instructions.
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Relish in the joy of preparing and sharing exquisite meals.
                  </span>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>


      <section class="cta" aria-label="call to action">
        <div class="container">

          <h2 class="h2 section-title">
            Join our community by using our services and grow your business.
          </h2>

          <a href="#" class="btn btn-primary">Explore recipes</a>

        </div>
      </section>

    </article>
  </main>

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>