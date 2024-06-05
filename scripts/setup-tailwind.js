// scripts/setup-tailwind.js

const fs = require('fs');

const tailwindConfig = `/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.{html,php}",
    "./src/**/*.{html,php}"
  ],
  theme: {
    extend: {
      colors: {
        primary: '#1E40AF', // blue-800
        secondary: '#D97706', // amber-600
        accent: '#10B981', // green-500
      },
    },
  },
  plugins: [],
}
`;

fs.writeFile('tailwind.config.js', tailwindConfig, (err) => {
    if (err) throw err;
    console.log('tailwind.config.js has been configured');
});
