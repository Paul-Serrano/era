// scripts/setup-tailwind.js

const fs = require('fs');

const tailwindConfig = `// tailwind.config.js
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.{html,php}",
    "./src/**/*.{html,php}"
  ],
  theme: {
    extend: {
      colors: {
        primary: '#7AB555',
        secondary: '#93C6E5',
        tertiary: '#D1D3D3'
      },
      fontFamily: {
        gothamBook: ['"Gotham-Book"', "sans-serif"],
      }
    },
  },
  plugins: [],
}
`;

fs.writeFile('tailwind.config.js', tailwindConfig, (err) => {
    if (err) throw err;
    console.log('tailwind.config.js has been configured');
});
