const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
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
