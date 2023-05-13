/** @type {import('tailwindcss').Config} */
// localStorage.theme = 'light'
module.exports = {
  mode: 'jit',
  darkMode: "class",
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens:{
      'phone': '640px',
      'tablet': '768px',
      'laptop': '1024px',
      'desktop': '1280px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
    },
    extend: {
      
    },
  },
  plugins: [
    require('daisyui'),
    // require('flowbite/plugin')
  ],
}