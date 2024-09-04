<?php $title="Contact Page"; require_once APPROOT . '/src/views/include/header.php'; ?>

<main>
        <article>
            <section class="section hero has-bg-image" aria-label="about-us"
                style="background-image: url('<?= URLROOT ?>/img/cookbanner.png')">
                <div class="center-container">
                    <h1 class="h1 hero-title "> Contact </h1>
                </div>
            </section>
            <section class="section contact" aria-label="contact">
                <div class="container">
                    <div class="form">
                        <div class="contact-info">
                            <h3 class="title">Let's get in touch</h3>
                            <p class="text">
                                We'd love to hear from you! Whether you have questions, feedback, or just want to chat,
                                feel free to reach out.
                            </p>

                            <div class="info">
                                <div class="information">
                                    <ion-icon name="location-outline"></ion-icon> &nbsp &nbsp
                                    <p>92 Cherry Drive Uniondale, NY 11553</p>
                                </div>
                                <div class="information">
                                    <ion-icon name="mail-outline"></ion-icon> &nbsp &nbsp
                                    <p>lorem@ipsum.com</p>
                                </div>
                                <div class="information">
                                    <ion-icon name="call-outline"></ion-icon>&nbsp&nbsp
                                    <p>123-456-789</p>
                                </div>
                            </div>

                            <div class="social-media">
                                <p>Connect with us :</p>
                                <div class="social-icons">
                                    <a href="#" class="social-link">
                                        <ion-icon name="logo-facebook"></ion-icon>
                                    </a>
                                    <a href="#" class="social-link">
                                        <ion-icon name="logo-twitter"></ion-icon>
                                    </a>
                                    <a href="#" class="social-link">
                                        <ion-icon name="logo-instagram"></ion-icon>
                                    </a>
                                    <a href="#" class="social-link">
                                        <ion-icon name="logo-youtube"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="contact-form">
                            <span class="circle one"></span>
                            <span class="circle two"></span>

                            <form action="contact.html" autocomplete="off" id="contact-form">
                                <h3 class="title">Contact us</h3>
                                <div class="input-container">
                                    <input type="text" name="username" class="input" />
                                    <label for="">Username</label>
                                    <span>Username</span>
                                </div>
                                <div class="input-container">
                                    <input type="email" name="email" class="input" />
                                    <label for="">Email</label>
                                    <span>Email</span>
                                </div>
                                <div class="input-container">
                                    <input type="tel" name="phone" class="input" />
                                    <label for="">Phone</label>
                                    <span>Phone</span>
                                </div>
                                <div class="input-container textarea">
                                    <textarea name="message" class="input"></textarea>
                                    <label for="">Message</label>
                                    <span>Message</span>
                                </div>
                                <input type="submit" value="Send" class="btn" />
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>