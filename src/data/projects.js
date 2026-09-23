import hlrChat from '../assets/images/hlrChat.png'
import spaceMining from '../assets/images/spaceMining.png'
import siteBTS from '../assets/images/siteBTS.png'
import deezer from '../assets/images/deezer.png'
import ecoleJamondeyra from '../assets/images/ecoleJamondeyra.png'

const GITHUB = 'https://github.com/RewannTannou'

export const projects = [
  {
    index: '01',
    title: 'HLR Chat',
    image: hlrChat,
    link: `${GITHUB}/Realtime-chat-web-app`,
    tags: ['React', 'Node.js', 'Express', 'PostgreSQL', 'WebSockets'],
    description:
      "Application de chat en temps réel inspirée de Discord : serveurs, salons, messagerie instantanée, présence en ligne et permissions par rôle. API REST et WebSockets. Projet d'équipe Epitech.",
  },
  {
    index: '02',
    title: 'Space Mining Tycoon',
    image: spaceMining,
    link: `${GITHUB}/SpaceMiningTycoon`,
    tags: ['Java', 'JavaFX', 'JUnit 5', 'Gradle'],
    description:
      "Jeu de gestion spatiale : exploration de planètes, extraction de ressources, amélioration des vaisseaux et économie dynamique. Code testé avec JUnit et couverture mesurée avec Jacoco. Projet d'équipe.",
  },
  {
    index: '03',
    title: 'My Marvin — CI/CD',
    link: `${GITHUB}/MY_MARVIN_Jenkins_CICD`,
    tags: ['Jenkins', 'Docker', 'Groovy', 'DevOps'],
    description:
      "Instance Jenkins entièrement automatisée via Configuration as Code (JCasC) : utilisateurs sécurisés, rôles et autorisations, jobs générés avec Job DSL. Projet d'équipe Epitech.",
  },
  {
    index: '04',
    title: 'Site E-commerce',
    image: siteBTS,
    link: `${GITHUB}/Boutique_BTS`,
    tags: ['PHP', 'MySQL', 'JavaScript'],
    description:
      "Boutique en ligne complète : comptes clients, catalogue par catégorie, panier et commandes, avec un back-office pour gérer produits, catégories et commandes.",
  },
  {
    index: '05',
    title: 'Site école Jamondeyra',
    image: ecoleJamondeyra,
    link: `${GITHUB}/Stage_Ecole`,
    tags: ['PHP', 'MySQL', 'Admin'],
    description:
      "Site vitrine réalisé en stage pour une école, avec espace admin (comptes, actualités) et photos visibles uniquement par les comptes autorisés.",
  },
  {
    index: '06',
    title: 'App Deezer',
    image: deezer,
    tags: ['C#', 'API', '.NET'],
    description:
      "Application C# consommant l'API Deezer : recherche d'artistes, affichage des albums et musiques, création de playlists et lecteur façon mp3.",
  },
]
