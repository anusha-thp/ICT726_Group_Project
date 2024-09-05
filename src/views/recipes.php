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
                        <?php foreach($data["getRecipesRecommend"] as $getRecipeRecommend): ?>
                            <div class="recipe-recommend-item">
                                <figure class="image">
                                    <img src="<?= URLROOT ?>/<?= $getRecipeRecommend -> image ?>" loading="lazy" alt="<?= $getRecipeRecommend -> title ?>" class="w-100">
                                </figure>
                                <h4 class="h4"><?= $getRecipeRecommend -> title ?></h4>
                            </div>
                        <?php endforeach; ?>               
                    </div>
                </div>
            </section>

            <section class="section recipe-popular">
                <div class="container">
                    <h1 class="h1">
                        Popular Recipes
                    </h1>
                    <div class="recipe-popular-list">
                        <?php foreach($data["popularRecipes"] as $popularRecipes): ?>
                            <div class="recipe-popular-item">
                            <figure class="image">
                                <img src="<?= URLROOT ?>/<?= $popularRecipes -> image ?>" loading="lazy" alt="<?= $popularRecipes -> title ?>" class="w-100">
                            </figure>
                            <div class="content">
                                <h4 class="h4"><?= $popularRecipes -> title ?></h4>
                                <a href="<?= URLROOT ?>/recipe/<?= $popularRecipes -> id ?>">                                
                                    <button class="btn btn-primary">View recipe</button>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>   

                       
                    </div>
                </div>
            </section>

        </article>
    </main>

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>