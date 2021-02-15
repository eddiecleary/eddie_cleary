module.exports = {
  purge: [
      './*.php',
      './*/**.php'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
        'display': ['Roboto Slab', 'serif'],
        'body': ['Ubuntu', 'sans-serif'],
    },
    screens: {
        'sm': '414px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
    },
    container: {
        center: true,
        padding: {
            default: '1rem',
            sm: '2rem',
            lg: '4rem',
            xl: '5rem'
        }
    },
    extend: {
        colors: {
            ec: {
                blue: '#4B9EF4',
                grey: '#CCCCCC',
                black: '#2E3033',
            },
        },
    },
  },
  plugins: [
      require('@graxmonzo/tailwind-caret-color')
  ],
}
