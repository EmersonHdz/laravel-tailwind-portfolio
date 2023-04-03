/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {},
  },
  plugins: [require("tailgrids/plugin")],
}
