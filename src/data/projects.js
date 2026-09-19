import siteBTS from '../assets/images/siteBTS.png'
import deezer from '../assets/images/deezer.png'
import hangman from '../assets/images/hangman.png'
import ecoleJamondeyra from '../assets/images/ecoleJamondeyra.png'

export const projects = [
  {
    index: '01',
    title: 'Site E-commerce',
    image: siteBTS,
    tags: ['PHP', 'MySQL', 'PDO'],
    description:
      "Site e-commerce réalisé durant mon BTS : gestion des produits et des catégories, affichage par catégorie, panier, espace admin et création de compte client.",
  },
  {
    index: '02',
    title: 'App Deezer',
    image: deezer,
    tags: ['C#', 'API', '.NET'],
    description:
      "Application C# consommant l'API Deezer : recherche d'artistes, affichage des albums et musiques, création de playlists et lecteur façon mp3.",
  },
  {
    index: '03',
    title: 'Jeu du pendu',
    image: hangman,
    tags: ['Python', 'Pygame'],
    description:
      "Jeu du pendu en Python avec Pygame : gestion des lettres proposées, système de score, code structuré en classes pour rester lisible.",
  },
  {
    index: '04',
    title: 'Site école Jamondeyra',
    image: ecoleJamondeyra,
    tags: ['PHP', 'MySQL', 'Admin'],
    description:
      "Site vitrine pour une école privée avec espace admin (comptes, actualités) et gestion de visibilité des photos réservées aux comptes autorisés.",
  },
]
