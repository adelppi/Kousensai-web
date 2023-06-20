import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  // base: '/Kousensai',
  publicPath: './Kousensai',
  // build: {
  //   outDir: '/',
  // },
  plugins: [vue()],
})
