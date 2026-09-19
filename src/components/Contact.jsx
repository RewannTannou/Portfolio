import { useState } from 'react'

const CONTACT_EMAIL = 'rewann.tannou@gmail.com'

function Contact() {
  const [form, setForm] = useState({ name: '', email: '', message: '' })
  const [sent, setSent] = useState(false)

  const handleChange = (event) => {
    const { name, value } = event.target
    setForm((prev) => ({ ...prev, [name]: value }))
  }

  const handleSubmit = (event) => {
    event.preventDefault()

    const subject = encodeURIComponent(`Message de ${form.name} via le portfolio`)
    const body = encodeURIComponent(
      `${form.message}\n\n— ${form.name} (${form.email})`,
    )
    window.location.href = `mailto:${CONTACT_EMAIL}?subject=${subject}&body=${body}`

    setSent(true)
    setForm({ name: '', email: '', message: '' })
  }

  return (
    <section className="contact" id="contact">
      <p className="eyebrow">05 — Contact</p>
      <h2 className="section-title">Discutons ensemble</h2>

      <a className="contact__email" href={`mailto:${CONTACT_EMAIL}`}>
        {CONTACT_EMAIL}
      </a>

      <div className="container">
        <form className="form" onSubmit={handleSubmit}>
          <div className="input">
            <label htmlFor="name">Nom</label>
            <input
              required
              autoComplete="off"
              type="text"
              id="name"
              name="name"
              placeholder="Votre nom"
              value={form.name}
              onChange={handleChange}
            />
          </div>

          <div className="input">
            <label htmlFor="email">E-mail</label>
            <input
              required
              autoComplete="off"
              type="email"
              id="email"
              name="email"
              placeholder="vous@exemple.com"
              value={form.email}
              onChange={handleChange}
            />
          </div>

          <div className="input">
            <label htmlFor="message">Message</label>
            <textarea
              required
              cols="30"
              rows="4"
              id="message"
              name="message"
              placeholder="Votre message"
              value={form.message}
              onChange={handleChange}
            />
          </div>

          <button type="submit">Envoyer →</button>
          {sent && (
            <p className="form-status">
              Votre messagerie va s'ouvrir pour envoyer le message ✉️
            </p>
          )}
        </form>
      </div>
    </section>
  )
}

export default Contact
