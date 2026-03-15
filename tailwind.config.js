/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        // We can add custom Buba Beach brand colors here later
        primary: '#0ea5e9', // Example Ocean Blue
        secondary: '#facc15', // Example Sand Yellow
      }
    },
  },
  plugins: [],
}