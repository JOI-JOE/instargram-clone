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
        },
    },

    daisyui:{
        themes: [
            {
                mytheme: {
                    "primary": "#ffffff",
                    "secondary": "#f00",
                    "accent": "#37cdbe",
                    "neutral": "#3d4451",
                    "base-100": "#ffffff",
                    "info": "#3abff8",
                    "success": "#36d399",
                    "warning": "#fbbd23",
                    "error": "#f87272",
                },
            },
        ],
        theme: "mytheme", // Use the custom theme
    },

    plugins: [forms, require("daisyui"), require('tailwind-scrollbar-hide')],
};
