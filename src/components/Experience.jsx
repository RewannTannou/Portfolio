import { experiences } from '../data/experiences'

function Experience() {
  return (
    <section className="experience" id="experiences">
      <p className="eyebrow">03 — Expériences</p>
      <h2 className="section-title">Expériences professionnelles</h2>

      <ol className="timeline">
        {experiences.map((exp) => (
          <li className="timeline-item" key={`${exp.period}-${exp.company}`}>
            <div className="timeline-item__meta">
              <span className="timeline-item__period">{exp.period}</span>
              <span className="timeline-item__location">{exp.location}</span>
            </div>

            <div className="timeline-item__body">
              <h3 className="timeline-item__company">{exp.company}</h3>
              <p className="timeline-item__role">{exp.role}</p>
              <p className="timeline-item__description">{exp.description}</p>
              <div className="project-row__tags">
                {exp.tags.map((tag) => (
                  <span key={tag}>{tag}</span>
                ))}
              </div>
            </div>
          </li>
        ))}
      </ol>
    </section>
  )
}

export default Experience
