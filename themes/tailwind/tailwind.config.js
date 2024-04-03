module.exports = {
    content: [
        '../../plugins/*/*/blocks/*.block',
        './theme.yaml',
        './assets/src/js/**/*.{js,vue}',
        './blocks/**/*.block',
        './layouts/**/*.htm',
        './pages/**/*.htm',
        './partials/**/*.htm',
    ],
    theme: {
      container: {
         padding: {
            DEFAULT: '1rem',
            sm: '2rem',
            lg: '4rem',
            xl: '5rem',
            '2xl': '6rem',
         },
         
       },
        extend: {
            colors: {
                primary: 'var(--primary)',
                secondary: 'var(--secondary)',
            },
        },
    },
    plugins: [
    ],
}
