import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: {
                    50: '#e8f0fe',
                    100: '#c2d8f8',
                    200: '#9bbff4',
                    300: '#6ea4ef',
                    400: '#4a8feb',
                    500: '#2F80ED',
                    600: '#2563eb',
                    700: '#1d4ed8',
                    800: '#1e40af',
                    900: '#1e3a8a',
                },
                cyan: {
                    400: '#18C6E8',
                    500: '#06b6d4',
                    600: '#0891b2',
                },
                dark: {
                    bg: '#08111F',
                    card: '#14213D',
                    sidebar: '#101827',
                    border: '#1e293b',
                    hover: '#1a2744',
                },
            },
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                'brand-gradient': 'linear-gradient(135deg, #2F80ED 0%, #18C6E8 100%)',
            },
        },
    },

    plugins: [forms],
};
