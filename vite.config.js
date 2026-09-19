import react from '@vitejs/plugin-react'
import { defineConfig } from 'vite'

// https://vite.dev/config/
export default defineConfig(({ command }) => ({
  // Served at https://rewanntannou.github.io/Portfolio/ in production,
  // but kept at "/" for local dev so the dev server URL is unaffected.
  base: command === 'build' ? '/Portfolio/' : '/',
  plugins: [react()],
}))
