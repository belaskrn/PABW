/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/**/**/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
],
  theme: {
    colors: {
      'darkpurple' : '#4c1d95',
      'lightpurple' : '#6d28d9',
    },
  },
  daisyui: {
    themes: [
      {
        mytheme: {
          "primary": "#44318D",
          "secondary": "#2A1B3C",
          "accent": "#FD5959",
          "neutral": "#191D24",
          "base-100": "#2A303C",
          "info": "#3ABFF8",
          "success": "#36D399",
          "warning": "#FBBD23",
          "error": "#F87272",
        },
      },
    ],
  },
  plugins: [require("daisyui")],
  
};