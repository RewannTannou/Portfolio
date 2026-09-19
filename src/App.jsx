import Header from './components/Header'
import Hero from './components/Hero'
import Documents from './components/Documents'
import Projects from './components/Projects'
import Skills from './components/Skills'
import Contact from './components/Contact'
import Footer from './components/Footer'
import BackToTop from './components/BackToTop'

function App() {
  return (
    <>
      <Header />
      <main>
        <Hero />
        <Documents />
        <Projects />
        <Skills />
        <Contact />
      </main>
      <Footer />
      <BackToTop />
    </>
  )
}

export default App
