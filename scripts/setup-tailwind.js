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
        tertiary: '#D1D3D3',
        blackLayer : "radial-gradient(circle, #000000 0%, #666666 100%)"
      },
      fontFamily: {
        gothamBook: ['"Gotham-Book"', "sans-serif"],
      }
    },
    fontSize: {
      '4xl': '3.5rem',
      '3xl': '2.75rem',
      '2xl': '2rem',
      'xl': '1.5rem',
      'lg': '1.25rem',
      'md': '1rem',
      'sm': '0.75rem'
    },
    borderRadius: {
      'full': '9999rem',
      '5xl': '2.5rem',
      '4xl': '2rem',
      '3xl': '1.5rem',
      '2xl': '1rem',
      'xl': '0.755rem',
      'lg': '0.5rem',
      'md': '0.375rem',
      'sm': '0.125rem'
    }
  },
  plugins: [],
}
`;

fs.writeFile('tailwind.config.js', tailwindConfig, (err) => {
    if (err) throw err;
    console.log('tailwind.config.js has been configured');
});
