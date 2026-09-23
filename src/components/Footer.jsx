import { footerSocials } from '../data/social'

function Footer() {
  return (
    <footer>
      <div className="footer-container">
        <a href="#accueil" className="logotype footer-logotype">
          Rewann<span>.Tannou</span>
        </a>

        <nav className="footer-nav">
          <ul>
            <li>
              <a href="#accueil">Accueil</a>
            </li>
            <li>
              <a href="#documents" className="hide-on-mobile">
                Documents
              </a>
            </li>
            <li>
              <a href="#experiences">Expériences</a>
            </li>
            <li>
              <a href="#projets">Projets</a>
            </li>
            <li>
              <a href="#competences">Compétences</a>
            </li>
            <li>
              <a href="#contact">Contact</a>
            </li>
          </ul>
        </nav>

        <div className="footer-socials">
          {footerSocials.map((social) => (
            <a key={social.label} href={social.href} target="_blank" rel="noreferrer">
              {social.label}
            </a>
          ))}
        </div>

        <p className="footer-copy">
          © {new Date().getFullYear()} Tannou Rewann — Tous droits réservés.
        </p>
      </div>
    </footer>
  )
}

export default Footer
