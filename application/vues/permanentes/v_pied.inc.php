<footer>
    <div class="footer-container">
        <?php
        if (!isset($_REQUEST['controleur'])) { ?>
            <!-- Navigation -->
            <nav class="footer-nav">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#MesDocuments" class="hidenDOC">Mes documents</a></li>
                    <li><a href="#projets">Projets</a></li>
                    <li><a href="#competences">Compétences</a></li>
                    <li><a href="index.php?controleur=Contact&action=afficherContact">Contact</a></li>
                </ul>
            </nav>
        <?php } else { ?>
            <nav class="footer-nav">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php?#MesDocuments" class="hidenDOC">Mes documents</a></li>
                    <li><a href="index.php?#projets">Projets</a></li>
                    <li><a href="index.php?#competences">Compétences</a></li>
                    <li><a href="index.php?controleur=Contact&action=afficherContact">Contact</a></li>
                </ul>
            </nav>
        <?php } ?>
        <!-- Réseaux sociaux -->
        <div class="footer-socials">
            <a href="https://github.com/tonpseudo" target="_blank">
                <img src="<?php echo Chemins::IMAGES . 'githubicon.png'; ?>" alt="GitHub">
            </a>
            <a href="https://www.linkedin.com/in/tonprofil" target="_blank">
                <img src="<?php echo Chemins::IMAGES . 'linkedin.png'; ?>" alt="LinkedIn">
            </a>
            <a href="https://www.facebook.com/profile.php?id=100011186624972" target="_blank">
                <img src="<?php echo Chemins::IMAGES . 'facebook.png'; ?>" alt="Facebook">
            </a>
            <a href="https://www.instagram.com/rewann_rtn/" target="_blank">
                <img src="<?php echo Chemins::IMAGES . 'instagram.png'; ?>" alt="Instagram">
            </a>
        </div>

        <!-- Copyright -->
        <p class="footer-copy">&copy; 2025 TANNOU Rewann - Portfolio. Tous droits réservés.</p>
    </div>
</footer>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="<?php echo Chemins::JS . "/script.js" ?>"></script>
</body>

</html>