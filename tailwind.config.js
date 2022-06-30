module.exports = {
  purge: [
    './dist/**/*.html',
    './src/**/*.js',
  ],
  darkMode: 'media', // or 'media' or 'class'
  theme: {
    extend: { colors:{
      'nav-green':'#395E66',
      'brown': '#49393B',
      'body':'#FFFCF9',
      'khaki':'#C7B894',
      'seagreen':'#8FBC8F'

     },spacing: {
      '102': '65rem',
      '101': '60rem',
      '100': '45rem',
      '97': '30rem',
      '74': '20rem'
      
    }},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
