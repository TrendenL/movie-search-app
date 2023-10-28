/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php'
  ],
  theme: {
    extend: {
      width: {
        '96': '24rem',
      }
    },
  },
  plugins: [],
}

