<?php $title= "Blog page"; require_once APPROOT . '/src/views/include/header.php'; ?>

<main>
        <article>

            <section class="section hero has-bg-image" aria-label="about-us"
                style="background-image: url('<?= URLROOT ?>/img/cookbanner.png')">
                <div class="center-container">
                    <h1 class="h1 hero-title "> BLOG </h1>
                </div>
            </section>

            <section class="section blog" aria-labelledby="blog-label">
                <div class="container">

                    <ul class="grid-list">
                        <li>
                            <div class="blog-card">
                                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                                    <img src="<?= URLROOT ?>/img/Deliciously.jpg" width="560" height="350" loading="lazy"
                                        alt="Quick Weeknight Dinners" class="img-cover">
                                </figure>

                                <div class="card-content">
                                    <h3 class="h3">
                                        <a href="#" class="card-title">Deliciously Simple: Quick Weeknight
                                            Dinners</a>
                                    </h3>

                                    <p class="card-text">
                                        Discover easy and flavorful recipes that make weeknight cooking a breeze.
                                        From hearty pasta dishes to refreshing salads, enjoy quick meals that don't
                                        compromise on taste.
                                    </p>

                                    <ul class="card-meta-list">
                                        <li class="card-meta-item">
                                            <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>
                                            <time class="meta-text" datetime="2024-07-20">20 Jul 2024</time>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>
                                            <span class="meta-text">Cooking</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="blog-card">
                                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                                    <img src="<?= URLROOT ?>/img/Baking.jpeg" width="560" height="350" loading="lazy"
                                        alt="Mastering the Art of Bread" class="img-cover">
                                </figure>

                                <div class="card-content">
                                    <h3 class="h3">
                                        <a href="#" class="card-title">Baking Basics: Mastering the Art of Bread</a>
                                    </h3>

                                    <p class="card-text">
                                        Learn the fundamentals of bread baking with step-by-step instructions. From
                                        sourdough to focaccia, unlock the secrets to creating perfect loaves every
                                        time.
                                    </p>

                                    <ul class="card-meta-list">
                                        <li class="card-meta-item">
                                            <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>
                                            <time class="meta-text" datetime="2024-07-15">15 Jul 2024</time>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>
                                            <span class="meta-text">Baking</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="blog-card">
                                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                                    <img src="<?= URLROOT ?>/img/Fresh.jpg" width="560" height="350" loading="lazy"
                                        alt="Summer Salads" class="img-cover">
                                </figure>

                                <div class="card-content">
                                    <h3 class="h3">
                                        <a href="#" class="card-title">Fresh and Flavorful: Summer Salads</a>
                                    </h3>

                                    <p class="card-text">
                                        Explore a variety of vibrant salads that celebrate the season's freshest
                                        ingredients. These recipes offer a burst of flavor and nutrition in every
                                        bite.
                                    </p>

                                    <ul class="card-meta-list">
                                        <li class="card-meta-item">
                                            <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>
                                            <time class="meta-text" datetime="2024-07-10">10 Jul 2024</time>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>
                                            <span class="meta-text">Healthy Eating</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="blog-card">
                                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                                    <img src="<?= URLROOT ?>/img/Cheesecake-squares-fc55a0b.jpg" width="560" height="350"
                                        loading="lazy" alt="Indulgent Desserts" class="img-cover">
                                </figure>

                                <div class="card-content">
                                    <h3 class="h3">
                                        <a href="#" class="card-title">Sweet Treats: Indulgent Desserts for Every
                                            Occasion</a>
                                    </h3>

                                    <p class="card-text">
                                        Satisfy your sweet tooth with these irresistible dessert recipes. From
                                        decadent chocolate cakes to fruity tarts, find the perfect treat for any
                                        event.
                                    </p>

                                    <ul class="card-meta-list">
                                        <li class="card-meta-item">
                                            <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>
                                            <time class="meta-text" datetime="2024-07-05">5 Jul 2024</time>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>
                                            <span class="meta-text">Desserts</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="blog-card">
                                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                                    <img src="<?= URLROOT ?>/img/global-food.jpg" width="560" height="350" loading="lazy"
                                        alt="Exploring World Cuisines" class="img-cover">
                                </figure>

                                <div class="card-content">
                                    <h3 class="h3">
                                        <a href="#" class="card-title">Global Flavors: Exploring World Cuisines</a>
                                    </h3>

                                    <p class="card-text">
                                        Take your taste buds on a journey around the world with these diverse and
                                        exciting recipes. Discover dishes from Asia, Europe, the Americas, and
                                        beyond.
                                    </p>

                                    <ul class="card-meta-list">
                                        <li class="card-meta-item">
                                            <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>
                                            <time class="meta-text" datetime="2024-06-30">30 Jun 2024</time>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>
                                            <span class="meta-text">International Cuisine</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="blog-card">
                                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                                    <img src="<?= URLROOT ?>/img/pland-base.jpeg" width="560" height="350" loading="lazy"
                                        alt="Vegetarian and Vegan Delights" class="img-cover">
                                </figure>

                                <div class="card-content">
                                    <h3 class="h3">
                                        <a href="#" class="card-title">Plant-Based Perfection: Vegetarian and Vegan
                                            Delights</a>
                                    </h3>

                                    <p class="card-text">
                                        Dive into a world of plant-based cooking with these delicious vegetarian and
                                        vegan recipes. Perfect for those looking to enjoy meals that are both
                                        healthy and satisfying.
                                    </p>

                                    <ul class="card-meta-list">
                                        <li class="card-meta-item">
                                            <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>
                                            <time class="meta-text" datetime="2024-06-25">25 Jun 2024</time>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>
                                            <span class="meta-text">Vegetarian/Vegan</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </section>
        </article>
    </main>


<?php require_once APPROOT . '/src/views/include/footer.php'; ?>