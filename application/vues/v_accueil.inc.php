<div class="presentation">
    <aside>
        <img
            src="<?php echo Chemins::IMAGES . "photoRewann.JPG" ?>"
            alt="photo rewann"
            class="picture" />
    </aside>
    <article>
        <h1>Je suis Rewann</h1>
        <p>
            Étudiant à Epitech, passionné par le développement et les nouvelles
            technologies. Toujours curieux d’apprendre, je cherche à progresser en
            travaillant sur des projets concrets et innovants.
        </p>
        <div class="social-links">
            <a href="https://github.com/RewannTannou" id="github" class="social-btn flex-center" target="_blank">
                <img src="<?php echo Chemins::IMAGES . "github.png" ?>" alt="github" height="24" width="24">
                <span>GitHub</span>
            </a>

            <a href="https://www.linkedin.com/in/rewann-tannou-772054293" id="linkedin" class="social-btn flex-center" target="_blank">
                <img src="<?php echo Chemins::IMAGES . "linkedin.png" ?>" alt="LinkedIn" height="24" width="24">
                <span>Linkedin</span>
            </a>

            <a href="https://www.instagram.com/rewann_rtn" id="instagram" class="social-btn flex-center" target="_blank">
                <img src="<?php echo Chemins::IMAGES . "instagram.png" ?>" alt="Instagram" height="24" width="24">
                <span>Instagram</span>
            </a>
        </div>

    </article>
</div>
<section class="pdf_section">
    <h1 class="TitreMesDocuments" id="MesDocuments">
        CV et Lettre de motivation
    </h1>

    <div class="cards">
        <!-- Carte CV -->
        <div class="flip-card" id="cardCV">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="<?php echo Chemins::IMAGES . "CV_TANNOU_Rewann.jpg" ?>" alt="CV" />
                </div>
                <div class="flip-back">
                    <h2>Mon CV</h2>
                    <a href="<?php echo Chemins::DOCUMENTS . "CV_TANNOU_Rewann.pdf" ?>" target="_blank">📄 Ouvrir le PDF</a>
                </div>
            </div>
        </div>

        <!-- Carte Lettre -->
        <div class="flip-card" id="cardLettre">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="<?php echo Chemins::IMAGES . "LettreDeMotivation_TannouRewann.jpg" ?>" alt="Lettre de motivation" />
                </div>
                <div class="flip-back">
                    <h2>Lettre de motivation</h2>
                    <a href="<?php echo Chemins::DOCUMENTS . "LettreDeMotivation_TannouRewann.pdf" ?>" target="_blank">📄 Ouvrir le PDF</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="projects" id="projets">
    <h1>Mes Projets</h1>

    <div class="card">
        <img
            src="<?php echo Chemins::IMAGES . "siteBTS.png" ?>"
            alt="Projet 1"
            class="card__icon" />
        <div class="card__content">
            <p class="card__title">Site E-commerce</p>
            <p class="card__description">
                Ceci est un site E-commerce que j'ai du créer lors de mon BTS.
                Dans ce site nous avons dû faire une gestion des produits et des
                catégories avec un système d'affichage de produit par catégorie,
                une gestion du panier, une partie admin ainsi qu'une possibilité
                de créer un compte client.
            </p>
        </div>
    </div>


    <div class="card">
        <img src="<?php echo Chemins::IMAGES . "deezer.png" ?>" alt="Projet 2" class="card__icon" />
        <div class="card__content">
            <p class="card__title">App Deezer</p>
            <p class="card__description">Pendant mon BTS j'ai créer une application en C# qui utilise l'API Deezer cela m'a permis de créer une interface pour voir les musiques et albums des artistes ainsi que de pouvoir créer des playlist et pour l'écoute des musiques il y a aussi un affichage style mp3.</p>
        </div>
    </div>

    <div class="card">
        <img src="<?php echo Chemins::IMAGES . "hangman.png" ?>" alt="Projet 3" class="card__icon" />
        <div class="card__content">
            <p class="card__title">Jeu du pendu</p>
            <p class="card__description">J'ai créer un jeu du pendu en python avec pygames avec ce jeu nous avonc la gestion des lettre proposé un système de score.Au point de vu code le code est séparer en classe qui servent a mieux se retrouver </p>
        </div>
    </div>

    <div class="card">
        <img src="<?php echo Chemins::IMAGES . "ecoleJamondeyra.png" ?>" alt="Projet 4" class="card__icon" />
        <div class="card__content">
            <p class="card__title">Site ecole jamondeyra</p>
            <p class="card__description">J'ai créer un site vitrine pour une école privée. Dans ce site il y une partie admin pour l'ajout de compte, et la création d'actualité. Il y a une gestion de visibilité des actualité pour que seul les personnes ayant un compte puisse voir les photos des enfants.</p>
        </div>
    </div>
</section>
<section class="Competence" id="competences">
    <h1>Mes compétences</h1>
    <div class="skills-container">
        <div class="skill">
            <img src="<?php echo Chemins::IMAGES . "html.png" ?>" alt="HTML">
            <span class="skill-name">HTML</span>
        </div>
        <div class="skill">
            <img src="<?php echo Chemins::IMAGES . "css.png" ?>" alt="CSS">
            <span class="skill-name">CSS</span>
        </div>
        <div class="skill">
            <img src="<?php echo Chemins::IMAGES . "js.png" ?>" alt="JavaScript">
            <span class="skill-name">JavaScript</span>
        </div>
        <div class="skill">
            <img src="<?php echo Chemins::IMAGES . "php.png" ?>" alt="PHP">
            <span class="skill-name">PHP</span>
        </div>
        <div class="skill">
            <img src="<?php echo Chemins::IMAGES . "python.png" ?>" alt="Python">
            <span class="skill-name">Python</span>
        </div>
        <div class="skill">
            <img src="<?php echo Chemins::IMAGES . "mysql.png" ?>" alt="MySQL">
            <span class="skill-name">MySQL</span>
        </div>
        <div class="skill">
            <img src="<?php echo Chemins::IMAGES . "git.png" ?>" alt="Git">
            <span class="skill-name">Git</span>
        </div>
        <div class="skill">
            <img src="<?php echo Chemins::IMAGES . "githubicon.png" ?>" alt="GitHub">
            <span class="skill-name">GitHub</span>
        </div>
    </div>
</section>
<section class="contact" id="contact">
    <h1>Contactez-moi</h1>
    <div class="container">
        <form class="form" method="POST">
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

            <button type="submit">Envoyer →</button>
        </form>
    </div>
</section>
<button id="backToTop" title="Remonter ↑"><a href="#header"><img src="<?php echo Chemins::IMAGES . "chevron-double-up.png" ?>" alt=""></a></button>