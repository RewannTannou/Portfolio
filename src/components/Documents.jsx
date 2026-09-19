import cvThumb from '../assets/images/CV_TANNOU_Rewann.jpg'
import { cvPdf } from '../data/social'

function Documents() {
  return (
    <section className="pdf-section" id="documents">
      <p className="eyebrow">02 — Documents</p>
      <h2 className="section-title">Mon CV</h2>

      <div className="cards">
        <div className="flip-card" id="cardCV">
          <div className="flip-inner">
            <div className="flip-front">
              <img src={cvThumb} alt="Mon CV" />
            </div>
            <div className="flip-back">
              <h3>Mon CV</h3>
              <a href={cvPdf} target="_blank" rel="noreferrer">
                Ouvrir le PDF ↗
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Documents
