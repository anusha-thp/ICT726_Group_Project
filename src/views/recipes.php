<?php $title="Recipe Page"; require_once APPROOT . '/src/views/include/header.php'; ?>

<main>
        <article>
            <section class="section hero has-bg-image recipe-hero" aria-label="about-us"
                style="background-image: url('<?= URLROOT ?>/img/cookbanner.png')">
                <div class="center-container">
                    <h1 class="h1 hero-title "> Discover New Culinary
                        Delights Daily </h1>
                    <p class="section-text">Welcome to Easy Eats, where we make cooking effortless. Discover endless
                        possibilities with our daily recipe suggestions, turning ordinary ingredients
                        into extraordinary meals.</p>
                </div>
            </section>
            <section class="section recipe-recommend">
                <div class="container">
                    <h1 class="h1">
                        Recommended Categories
                    </h1>
                    <div class="recipe-recommend-list">
                        <div class="recipe-recommend-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/dosa.jpg" loading="lazy" alt="Dosa" class="w-100">
                            </figure>
                            <h4 class="h4">Dosa</h4>
                        </div>

                        <div class="recipe-recommend-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/idli.jpg" loading="lazy" alt="Idli" class="w-100">
                            </figure>
                            <h4 class="h4">Idli</h4>
                        </div>

                        <div class="recipe-recommend-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/gravies.jpeg" loading="lazy" alt="Gravies" class="w-100">
                            </figure>
                            <h4 class="h4">Gravies</h4>
                        </div>

                        <div class="recipe-recommend-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/rice.jpg" loading="lazy" alt="Rices" class="w-100">
                            </figure>
                            <h4 class="h4">Rices</h4>
                        </div>

                        <div class="recipe-recommend-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/chutney.jpg" loading="lazy" alt="Chutney" class="w-100">
                            </figure>
                            <h4 class="h4">Chutney</h4>
                        </div>

                        <div class="recipe-recommend-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/sweets.jpg" loading="lazy" alt="Sweets" class="w-100">
                            </figure>
                            <h4 class="h4">Sweets</h4>
                        </div>

                        <div class="recipe-recommend-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/snack.jpeg" loading="lazy" alt="Snacks" class="w-100">
                            </figure>
                            <h4 class="h4">Snacks</h4>
                        </div>

                        <div class="recipe-recommend-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/noodles.jpg" loading="lazy" alt="Noodles" class="w-100">
                            </figure>
                            <h4 class="h4">Noodles</h4>
                        </div>

                        <div class="recipe-recommend-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/chicken.jpg" loading="lazy" alt="Chicken" class="w-100">
                            </figure>
                            <h4 class="h4">Chicken</h4>
                        </div>

                        <div class="recipe-recommend-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/fish.jpg" loading="lazy" alt="Fish" class="w-100">
                            </figure>
                            <h4 class="h4">Fish</h4>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section recipe-popular">
                <div class="container">
                    <h1 class="h1">
                        Popular Recipes
                    </h1>

                    <div class="recipe-popular-list">
                        <div class="recipe-popular-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/chicken.jpg" loading="lazy" alt="chicken" class="w-100">
                            </figure>
                            <div class="content">
                                <h4 class="h4">Chicken lolipop</h4>
                                <button class="btn btn-primary">View recipe</button>
                            </div>
                        </div>
                        <div class="recipe-popular-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/dosa.jpg" loading="lazy" alt="Dosa" class="w-100">
                            </figure>
                            <div class="content">
                                <h4 class="h4">Masala Dosa</h4>
                                <button class="btn">View recipe</button>
                            </div>
                        </div>

                        <div class="recipe-popular-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/chutney.jpg" loading="lazy" alt="Biryani" class="w-100">
                            </figure>
                            <div class="content">
                                <h4 class="h4">Biryani</h4>
                                <button class="btn">View recipe</button>
                            </div>
                        </div>

                        <div class="recipe-popular-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/idli.jpg" loading="lazy" alt=">Chole Bhature" class="w-100">
                            </figure>
                            <div class="content">
                                <h4 class="h4">Chole Bhature</h4>
                                <button class="btn">View recipe</button>
                            </div>
                        </div>

                        <div class="recipe-popular-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/noodles.jpg" loading="lazy" alt="Paneer Tikka" class="w-100">
                            </figure>
                            <div class="content">
                                <h4 class="h4">Paneer Tikka</h4>
                                <button class="btn">View recipe</button>
                            </div>
                        </div>

                        <div class="recipe-popular-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/img/sweets.jpg" loading="lazy" alt="Samosa" class="w-100">
                            </figure>
                            <div class="content">
                                <h4 class="h4">Samosa</h4>
                                <button class="btn">View recipe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </article>
    </main>

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>