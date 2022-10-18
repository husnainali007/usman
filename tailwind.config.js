const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },



        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),


            backgroundColor: {
                'lightGreen' : '#6BD4A5',
                'darkBlue'   : '#0B1224',
                'Grey'       : '#9798A7',
                'lightBlue'  : '#0F172A',
                'babyGreen'  : '#203440',
                'Yellow'     : '#FFD233'
            },

            textColor: {
                'lightGreen' : '#6BD4A5',
                'darkBlue'   : '#0B1224',
                'Grey'       : '#9798A7',
                'lightBlue'  : '#0F172A',
                'Yellow'     : '#FFD233'
            },

            Colors: {
                'lightGreen' : '#6BD4A5',
                'darkBlue'   : '#0B1224',
                'Grey'       : '#9798A7',
                'lightBlue'  : '#0F172A',
                'babyGreen'  : '#203440',
                'Yellow'     : '#FFD233'
            },

            borderColors: {
                'lightGreen' : '#6BD4A5',
                'darkBlue'   : '#0B1224',
                'Grey'       : '#9798A7',
                'lightBlue'  : '#0F172A',
                'lightGrey'  : '#e5e7eb',
                'Yellow'     : '#FFD233'
            },

            padding: {
                '130px' : '130px',
                '60px' : '60px',
                '33px' : '33px',
                '30px' : '30px',
            },

            margin: {
                '88px': '88px',
                '30px': '30px',
                '15px': '15px'
            },

            maxWidth: {
                '1240' : '1240px',
                '360' : '360px'
            },
            fontFamily: {
                'poppins': ['Poppins', 'sans-serif'],
                'radioCanada': ['Radio Canada', 'sans-serif'],
            }
        },


        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'lg': tailpress.theme('settings.layout.contentSize', theme),
            'xl': tailpress.theme('settings.layout.wideSize', theme),
            '2xl': '1440px'
        }
    },
    plugins: [
        tailpress.tailwind
    ]
};
