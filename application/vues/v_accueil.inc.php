<div class="presentation">
    <aside>
        <img
            src="<?php echo Chemins::IMAGES . "photoRewann.jpg" ?>"
            alt="photo rewann"
            class="picture" />
    </aside>
    <article>
        <h1>Salut, je suis Rewann</h1>
        <p>
            Étudiant à Epitech, passionné par le développement et les nouvelles
            technologies. Toujours curieux d’apprendre, je cherche à progresser en
            travaillant sur des projets concrets et innovants.
        </p>
    </article>
</div>
<section class="pdf_section">
    <h1 class="TitreMesDocuments" id="MesDocuments">
        CV et Lettre de motivation
    </h1>
    <!-- Image miniature du PDF -->
    <div class="pdf-container">
        <img
            src="<?php echo Chemins::IMAGES . "CV_TANNOU_Rewann.jpg" ?>"
            data-pdf="<?php echo Chemins::DOCUMENTS . "CV_TANNOU_Rewann.pdf" ?>"
            class="pdf-thumbnail"
            alt="PDF" />
        <img
            src="<?php echo Chemins::IMAGES . "LettreDeMotivation_TannouRewann.jpg" ?>"
            data-pdf="<?php echo Chemins::DOCUMENTS . "LettreDeMotivation_TannouRewann.pdf" ?>"
            class="pdf-thumbnail"
            alt="PDF" />
    </div>
</section>

<section class="projects" id="projets">
    <h1>Mes Projets</h1>
    <a href="https://github.com/RewannTannou/Boutique_BTS">
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
    </a>

    <div class="card">
        <img src="<?php echo Chemins::IMAGES . "deezer.png" ?>" alt="Projet 2" class="card__icon" />
        <div class="card__content">
            <p class="card__title">Projet 2</p>
            <p class="card__description">Description rapide du projet 2.</p>
        </div>
    </div>

    <div class="card">
        <img src="public/photo/projet3.png" alt="Projet 3" class="card__icon" />
        <div class="card__content">
            <p class="card__title">Projet 3</p>
            <p class="card__description">Description rapide du projet 3.</p>
        </div>
    </div>

    <div class="card">
        <img src="public/photo/projet4.png" alt="Projet 4" class="card__icon" />
        <div class="card__content">
            <p class="card__title">Projet 4</p>
            <p class="card__description">Description rapide du projet 4.</p>
        </div>
    </div>
</section>

<!-- Lien vers le fichier JS -->