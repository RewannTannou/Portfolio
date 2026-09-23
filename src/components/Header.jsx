import { useEffect, useState } from 'react'

const NAV_LINKS = [
  { href: '#accueil', label: 'Accueil' },
  { href: '#documents', label: 'Documents' },
  { href: '#experiences', label: 'Expériences' },
  { href: '#projets', label: 'Projets' },
  { href: '#competences', label: 'Compétences' },
  { href: '#contact', label: 'Contact' },
]

function Header() {
  const [menuOpen, setMenuOpen] = useState(false)
  const [active, setActive] = useState('#accueil')

  useEffect(() => {
    const sections = NAV_LINKS.map((link) =>
      document.querySelector(link.href),
    ).filter(Boolean)

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            setActive(`#${entry.target.id}`)
          }
        })
      },
      { rootMargin: '-40% 0px -50% 0px', threshold: 0 },
    )

    sections.forEach((section) => observer.observe(section))
    return () => observer.disconnect()
  }, [])

  return (
    <header className="header" id="header">
      <a href="#accueil" className="logotype">
        Rewann<span>.Tannou</span>
      </a>

      <button
        type="button"
        className={`burger${menuOpen ? ' is-open' : ''}`}
        aria-label="Ouvrir le menu"
        aria-expanded={menuOpen}
        onClick={() => setMenuOpen((open) => !open)}
      >
        <span />
        <span />
      </button>

      <nav className="nav-bar">
        <ul className={`nav-list${menuOpen ? ' show' : ''}`}>
          {NAV_LINKS.map((link) => (
            <li key={link.href}>
              <a
                href={link.href}
                className={`${active === link.href ? 'active' : ''}${
                  link.href === '#documents' ? ' hide-on-mobile' : ''
                }`}
                onClick={() => setMenuOpen(false)}
              >
                {link.label}
              </a>
            </li>
          ))}
        </ul>
      </nav>
    </header>
  )
}

export default Header
