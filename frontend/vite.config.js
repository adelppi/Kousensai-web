import { defineConfig } from 'vite'
import { VitePluginFonts } from 'vite-plugin-fonts'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  base: '/',
  build: {
    outDir: '../',
  },
  plugins: [
    vue(),
    VitePluginFonts({
      google: {
        families: [
          'Noto Sans JP'
        ],
      }
    })
  ],
})
