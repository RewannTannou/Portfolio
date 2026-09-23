import { projects } from '../data/projects'

function Projects() {
  return (
    <section className="projects" id="projets">
      <p className="eyebrow">04 — Projets</p>
      <h2 className="section-title">Mes projets</h2>

      <ul className="project-list">
        {projects.map((project) => (
          <li className="project-row" key={project.title}>
            <span className="project-row__index">{project.index}</span>

            <div className="project-row__body">
              <h3 className="project-row__title">
                {project.link ? (
                  <a
                    href={project.link}
                    className="project-row__link"
                    target="_blank"
                    rel="noreferrer"
                  >
                    {project.title}
                  </a>
                ) : (
                  project.title
                )}
              </h3>
              <p className="project-row__description">
                {project.description}
              </p>
              <div className="project-row__tags">
                {project.tags.map((tag) => (
                  <span key={tag}>{tag}</span>
                ))}
              </div>
            </div>

            {project.link && (
              <span className="project-row__arrow" aria-hidden="true">
                ↗
              </span>
            )}

            {project.image && (
              <img
                src={project.image}
                alt=""
                className="project-row__preview"
              />
            )}
          </li>
        ))}
      </ul>
    </section>
  )
}

export default Projects
