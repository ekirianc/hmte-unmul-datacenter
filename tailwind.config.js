// const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                outfit: ['Outfit'],
                mulish: ['Mulish'],
                roboto: ['Roboto'],
            },
            spacing: {
              '13' : '3.25rem',
            },
            colors: {
                'primary': '#1169e9',
            },
        },
    },

    plugins: [
        require('@tailwindcss/line-clamp'),
        require('tailwind-scrollbar-hide')

        // require('@tailwindcss/forms'),
    ],
};
