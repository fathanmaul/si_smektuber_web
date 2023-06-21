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
    screens: {
      'phone': '640px',
      'tablet': '768px',
      'laptop': '1024px',
      'desktop': '1280px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
    },
    container: {
      center: true,
    },

    extend: {
      colors: {
        'primary': '#19A7CE',
        gray: {
          400: '#969798',
          500: '#666666',
          700: '#353535',
          800: '#262626',
          900: '#171818',
        },
      },
    },
  },
  daisyui:{
    themes: ["light"]
  },
  // daisyui: {
  //   themes: [
  //     {
  //       mytheme: {
  //         "primary": "#19A7CE",
  //       }
  //     }
  //   ],
  // },
  plugins: [
    require('daisyui'),
    require('tailwindcss-plugins/pagination'),
  ],
}

// /** @type {import('tailwindcss').Config} */
// export default {
  
//   content: [
//     "./resources/**/*.blade.php",
//     "./resources/**/*.js",
//     "./resources/**/*.vue"
//   ],
//   theme: {
//     screens: {
//       'phone': '640px',
//       'tablet': '768px',
//       'laptop': '1024px',
//       'desktop': '1280px',
//       'sm': '640px',
//       'md': '768px',
//       'lg': '1024px',
//       'xl': '1280px',
//     },
//     container: {
//       center: true,
//     },
//     extend: {
//       colors: {
//         'primary': '#19A7CE',
//         gray: {
//           400: '#969798',
//           500: '#666666',
//           700: '#353535',
//           800: '#262626',
//           900: '#171818',
//         },
//       },
//     },
//   },
//   plugins: [
//     require('daisyui')
//   ],
//   darkMode: 'class'
// }

