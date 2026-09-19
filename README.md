# Portfolio — Rewann Tannou

Portfolio personnel développé en React, présentant mon profil, mes projets et mes compétences, avec un formulaire de contact.

## Technologies utilisées

- **[React 19](https://react.dev/)** — composants et logique de l'interface
- **[Vite](https://vite.dev/)** — serveur de dev et build (HMR quasi instantané)
- **CSS natif** (pas de framework) — thème clair et sobre, typographies [Fraunces](https://fonts.google.com/specimen/Fraunces) (titres) et [Inter](https://fonts.google.com/specimen/Inter) (texte)
- **[Oxlint](https://oxc.rs/)** — lint du code JavaScript/JSX

Aucun backend : le site est 100 % statique, et le formulaire de contact ouvre directement le client mail du visiteur (`mailto:`) pré-rempli avec son message.

## Lancer le projet en local

Prérequis : [Node.js](https://nodejs.org/) (v18 ou plus).

```bash
# installer les dépendances
npm install

# lancer le serveur de développement (avec rechargement à chaud)
npm run dev
```

Le site est alors accessible sur l'URL affichée dans le terminal (par défaut `http://localhost:5173`).

Autres commandes utiles :

```bash
npm run build    # génère la version de production dans dist/
npm run preview  # prévisualise le build de production en local
npm run lint      # vérifie le code avec Oxlint
```

## Ce que l'on trouve sur le site

Le site est une page unique (single page) avec navigation par ancres :

| Section | Description |
| --- | --- |
| **Accueil** | Présentation rapide, photo, et liens vers GitHub, LinkedIn, CV et lettre de motivation |
| **Documents** | CV et lettre de motivation sous forme de cartes à retourner, avec lien de téléchargement en PDF |
| **Projets** | Liste des projets réalisés (site e-commerce, application Deezer, jeu du pendu, site vitrine d'école) avec description et technologies utilisées |
| **Compétences** | Compétences techniques regroupées par catégorie (langages & frameworks, data & API, outils, Microsoft 365) |
| **Contact** | Formulaire (nom, e-mail, message) qui ouvre le client mail pré-rempli, et adresse e-mail directe |

## Structure du projet

```
src/
├── components/      # un composant par section (Header, Hero, Documents, Projects, Skills, Contact, Footer, BackToTop)
├── data/            # contenu éditable séparément du JSX (projects.js, skills.js, social.js)
├── assets/
│   ├── images/      # photo, icônes et visuels des projets
│   └── documents/   # CV et lettre de motivation au format PDF
├── App.jsx          # assemble les sections de la page
├── index.css        # thème et styles globaux
└── main.jsx         # point d'entrée React
```

Pour modifier le contenu (textes des projets, compétences, liens sociaux) sans toucher au JSX, il suffit d'éditer les fichiers dans `src/data/`.
