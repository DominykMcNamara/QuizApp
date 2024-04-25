const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
        'backgroundImage': {
          'icon-accessibility': "url('assets/images/icon-accessibility.svg')",
            'icon-correct': "url('assets/images/icon-correct.svg')",
            'icon-css': "url('assets/images/icon-css.svg')",
            'icon-error': "url('assets/images/icon-error.svg')",
            'icon-html': "url('assets/images/icon-html.svg')",
            'icon-incorrect': "url('assets/images/icon-incorrect.svg')",
            'icon-js': "url('assets/images/icon-js.svg')",
            'icon-moon-dark': "url('assets/images/icon-moon-dark.svg')",
            'icon-moon-light': "url('assets/images/icon-moon-light.svg')",
            'icon-sun-dark': "url('assets/images/icon-sun-dark.svg')",
            'icon-sun-light': "url('assets/images/icon-sun-light.svg')",
            'pattern-background-desktop-dark': "url('assets/images/pattern-background-desktop-dark.svg')",
            'pattern-background-desktop-light': "url('assets/images/pattern-background-desktop-light.svg')",
            'pattern-background-mobile-dark': "url('assets/images/pattern-background-mobile-dark.svg')",
            'pattern-background-mobile-light': "url('assets/images/pattern-background-mobile-light.svg')",
            'pattern-background-tablet-dark': "url('assets/images/pattern-background-tablet-dark.svg')",
            'pattern-background-tablet-light': "url('assets/images/pattern-background-tablet-light.svg')",
        },

        extend: {
            fontFamily: {
                sans: ['Rubik','Inter var', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'display': ['144px', {
                    lineHeight: '100%',
                    weight: 'medium',
                }],
                'hl-bold': ['64px', {
                    lineHeight: '100%',
                    weight: 'medium'
                }],
                'hl-regular': ['64px', {
                    lineHeight: '100%',
                    weight: 'regular'
                }],
                'hm': ['36px', {
                    lineHeight: '100%',
                    weight: 'regular'
                }],
                'hs': ['28px', {
                    lineHeight: '100%',
                    weight: 'regular'
                }],
                'bm': ['12px', {
                    lineHeight: '150%',
                    weight: 'regular'
                }],
                'bs': ['12px', {
                    lineHeight: '150%',
                    weight: 'regular-italic'
                }]

            },
            screens: {
                'desktop': '1440px',
                'tablet': '768px',
                'mobile': '375px'
            }
        },
        colors: {
            'purple': '#A729F5',
            'dark-navy': '#313E51',
            'navy': '#3B4D66',
            'grey-navy': '#626C7F',
            'light-bluish': '#ABC1E1',
            'light-grey': '#F4F6FA',
            'white': '#FFFFFF',
            'green': '#26D782',
            'red': '#EE5454',
        }

    },

    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
