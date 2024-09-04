<?php $title = "About page"; require_once APPROOT . '/src/views/include/header.php'; ?>
<main>
        <article>
            <section class="section hero has-bg-image" aria-label="about-us"
                style="background-image: url('<?= URLROOT ?>/img/cookbanner.png')">
                <div class="center-container">
                    <h1 class="h1 hero-title "> ABOUT </h1>
                </div>
            </section>
            <section class="section about-reimage" aria-labelledby="about-reimage-label">
                <div class="container">
                    <figure class="about-reimage-banner">
                        <img src="<?= URLROOT ?>/img/food-disk-about.png" loading="lazy" alt="about-reimage banner"
                            class="w-100">
                    </figure>

                    <div class="about-reimage-content">
                        <h2 class="h2 section-title">
                            Reimagine, Recreate,
                            Relish
                        </h2>

                        <p class="section-text">
                            Easy Eats breathes new life into leftover food, offering
                            innovative recipes that turn forgotten fridge dwellers into
                            delectable dishes. Explore the joy of cooking with
                            sustainability in mind, ensuring every meal is a guilt-free
                            gourmet experience.
                        </p>

                    </div>

                </div>
            </section>

            <section class="section about-liga">
                <div class="container">
                    <h2 class="h2 section-title">Turn LeftGourmet Adventuresovers into </h2>
                    <p class="section-text">
                        Never let leftovers go to waste again. With Easy Eats, reimagine leftover food as the main
                        ingredient for your next culinary creation. Our unique recipes transform yesterday's
                        dishes into today's gourmet delights, ensuring nothing is ever wasted.
                    </p>
                </div>

            </section>

            <section class="section feature" aria-labelledby="feature-label">
                <div class="container">

                    <figure class="feature-banner">
                        <img src="<?= URLROOT ?>/img/healthy-food.png" width="800" height="531" loading="lazy"
                            alt="feature banner" class="w-100">
                    </figure>

                    <div class="feature-content">

                        <h2 class="h2 section-title">
                            Healthy, Hearty, Happy
                        </h2>

                        <p class="section-text">
                            Dive into the world of mindful eating with Easy Eats. Our
                            recipes focus on nutritious, wholesome ingredients that fuel
                            your body and soul. Embrace a healthier lifestyle without
                            sacrificing flavor or satisfaction.
                        </p>

                        <ul class="feature-list">

                            <li>
                                <div class="feature-card">

                                    <div class="card-icon">
                                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                                    </div>

                                    <span class="span">
                                        Boost your health with every bite. Our recipes are designed
                                        to be nutritious yet delicious.
                                    </span>

                                </div>
                            </li>

                            <li>
                                <div class="feature-card">

                                    <div class="card-icon">
                                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                                    </div>

                                    <span class="span">
                                        Experience flavorful meals that are easy to prepare.
                                    </span>

                                </div>
                            </li>

                            <li>
                                <div class="feature-card">

                                    <div class="card-icon">
                                        <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                                    </div>

                                    <span class="span">
                                        Make every meal an opportunity for adventure.
                                    </span>

                                </div>
                            </li>


                        </ul>

                    </div>

                </div>
            </section>

        </article>
    </main>

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>