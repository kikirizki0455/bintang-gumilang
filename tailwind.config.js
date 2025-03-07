import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': '#c3912e',
                'primary-light': '#d4a649',
                'primary-dark': '#b27d1d',
                'secondary': '#5d5e62',
                'secondary-light': '#747578',
                'secondary-dark': '#4a4b4e',
            }
        },
    },

    plugins: [forms],
};
