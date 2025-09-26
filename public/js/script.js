const links = document.querySelectorAll(".conteneurList a");

      // Active le premier lien au départ
      links[0].classList.add("active");

      // Change la ligne quand on clique
      links.forEach((link) => {
        link.addEventListener("click", () => {
          links.forEach((l) => l.classList.remove("active"));
          link.classList.add("active");
        });
      });

  const burger = document.getElementById("burger");
  const menu = document.getElementById("menu");

  burger.addEventListener("click", () => {
    menu.classList.toggle("show");
  });


const thumbnails = document.querySelectorAll('.pdf-thumbnail');

thumbnails.forEach(img => {
  img.addEventListener('click', () => {
    const pdfPath = img.dataset.pdf; // récupère automatiquement le nom
    window.open(pdfPath, '_blank');
  });
  });



function toggleFlip(cardId) {
  const card = document.getElementById(cardId);
  card.classList.toggle('show');
}

// Sélection du bouton
const backToTop = document.getElementById("backToTop");

// Affiche le bouton seulement quand on descend assez
window.addEventListener("scroll", () => {
  if (document.documentElement.scrollTop > 200) {
    backToTop.style.display = "block";
  } else {
    backToTop.style.display = "none";
  }
});

/*deplacement fluide jusqu'à l'ancrage */

// Sélectionne tous les liens d'ancrage (href commençant par #)
const anchors = document.querySelectorAll('a[href^="#"]');

anchors.forEach(function(link) {
  link.addEventListener('click', function(e) {
    e.preventDefault(); // empêche le comportement par défaut (jump instantané)

    const href = this.getAttribute('href'); // récupère la valeur de l'attribut href

    // cas special : lien vers "#" ou href vide -> remonter en haut
    if (href === '#' || href === '') {
      window.scrollTo({ top: 0, behavior: 'smooth' });
      return;
    }

    const target = document.querySelector(href); // trouve l'élément cible

    // si l'élément n'existe pas, on sort proprement
    if (!target) return;

    // méthode simple : scroller jusqu'à l'élément de façon fluide
    target.scrollIntoView({ behavior: 'smooth', block: 'start' });

    // optionnel : mettre à jour l'URL (ajoute l'ancre dans la barre sans provoquer de "jump")
    history.pushState(null, '', href);
  });
});
