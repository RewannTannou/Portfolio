<section class="contact" id="contact">
    <h1>Contactez-moi</h1>
    <div class="container">
        <form class="form" action="index.php?controleur=Contact&action=SendMail" method="POST">
            <div class="descr">Envoyez-moi un message</div>

            <div class="input">
                <input required autocomplete="off" type="text" id="name" name="name" placeholder="Name">
            </div>

            <div class="input">
                <input required autocomplete="off" type="email" id="email" name="email" placeholder="E-mail">
            </div>

            <div class="input">
                <textarea required cols="30" rows="3" id="message" name="message" placeholder="Message"></textarea>
            </div>

            <!-- ✅ reCAPTCHA doit être dans le form -->
            <div class="g-recaptcha" data-sitekey="6Lf3ENsrAAAAAL2KlV7PV7173Q7rlvO1S_IIwvlS"></div>

            <button type="submit">Envoyer →</button>
        </form>
    </div>
</section>