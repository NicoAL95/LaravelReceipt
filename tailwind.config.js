/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      ss: '460px',
      xs: '500px',
      ms: '580px',
      js: '600px',
      sm: '648px',
      mx: '800px',
      xz: '1115px',
      xlg: '1120px',
    },
    extend: {
      colors: {
        mainBlack: '#1E1E1E',
        secBlack: '#222222',
        superWhite: '#E4E4E4',
        lovGrey: '#B2B2B2',
        highGrey: '#333333',
        lightGrey: '#A2A2A2',
        superGrey: '#C6C6C6'
      },
      fontFamily: {
        poppins: 'Poppins',
      },
    },
  },
  plugins: [],
}
