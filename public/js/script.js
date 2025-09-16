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

const thumbnails = document.querySelectorAll('.pdf-thumbnail');

thumbnails.forEach(img => {
  img.addEventListener('click', () => {
    const pdfPath = img.dataset.pdf; // récupère automatiquement le nom
    window.open(pdfPath, '_blank');
  });
});
