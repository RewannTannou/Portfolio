import photo from "../assets/images/Rewann_Tannou.jpg";
import { socialLinks } from "../data/social";

function Hero() {
  return (
    <section className="presentation" id="accueil">
      <div className="presentation__intro">
        <p className="eyebrow">Portfolio — Développeur</p>
        <h1>
          Bonjour, je suis
          <br />
          <span className="highlight-text">Rewann Tannou</span>
        </h1>
        <p className="presentation__text">
          Étudiant à Epitech, passionné par le développement et les nouvelles
          technologies. Toujours curieux d'apprendre, je cherche à progresser en
          travaillant sur des projets concrets et innovants.
        </p>
        <div className="social-links">
          {socialLinks.map((link) => (
            <a
              key={link.label}
              href={link.href}
              className="social-btn"
              target="_blank"
              rel="noreferrer"
            >
              {link.label}
              <span className="social-btn__arrow">↗</span>
            </a>
          ))}
        </div>
      </div>

      <aside className="presentation__photo">
        <img src={photo} alt="Photo de Rewann Tannou" className="picture" />
      </aside>
    </section>
  );
}

export default Hero;
