import { skillCategories } from '../data/skills'

function Skills() {
  return (
    <section className="competences" id="competences">
      <p className="eyebrow">04 — Compétences</p>
      <h2 className="section-title">Mes compétences</h2>

      <div className="skill-groups">
        {skillCategories.map((group) => (
          <div className="skill-group" key={group.category}>
            <h3>{group.category}</h3>
            <div className="skill-chips">
              {group.items.map((skill) => (
                <span className="skill-chip" key={skill}>
                  {skill}
                </span>
              ))}
            </div>
          </div>
        ))}
      </div>
    </section>
  )
}

export default Skills
