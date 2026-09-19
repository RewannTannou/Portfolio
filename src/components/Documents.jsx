import cvThumb from '../assets/images/CV_TANNOU_Rewann.jpg'
import ldmThumb from '../assets/images/LettreDeMotivation_TannouRewann.jpg'
import { cvPdf, ldmPdf } from '../data/social'

const cards = [
  { id: 'cardCV', index: '01', title: 'Mon CV', thumb: cvThumb, pdf: cvPdf },
  {
    id: 'cardLettre',
    index: '02',
    title: 'Lettre de motivation',
    thumb: ldmThumb,
    pdf: ldmPdf,
  },
]

function Documents() {
  return (
    <section className="pdf-section" id="documents">
      <p className="eyebrow">02 — Documents</p>
      <h2 className="section-title">CV &amp; lettre de motivation</h2>

      <div className="cards">
        {cards.map((card) => (
          <div className="flip-card" id={card.id} key={card.id}>
            <div className="flip-inner">
              <div className="flip-front">
                <span className="flip-front__index">{card.index}</span>
                <img src={card.thumb} alt={card.title} />
              </div>
              <div className="flip-back">
                <h3>{card.title}</h3>
                <a href={card.pdf} target="_blank" rel="noreferrer">
                  Ouvrir le PDF ↗
                </a>
              </div>
            </div>
          </div>
        ))}
      </div>
    </section>
  )
}

export default Documents
