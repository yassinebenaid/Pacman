const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/**/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "primary": "#3C4DDB",
                "primary-2": "rgb(146 153 217)",
                "orange-1": "#FA6322",
                "blue-1": "#5F96E9",
                "yellow-1": "#fabe25",
                "gray-4": "#30323D",
                "gray-35": "#6b7183",
                "gray-3": "#838CA7",
                "gray-2": "#D4DBEF",
                "gray-1": "#F4F6FC",
                "gray-0": "#f9f9fb",
            },
            boxShadow: {
                "default": "rgb(60 77 219 / 8%) 0px 4px 12px",
                "default-2": "0px 0px 20px 0px #E5ECFF",
                "default-3": "0px 0px 30px 0px #E5ECFF",
                "default-4": "0px 0px 40px 0px #E5ECFF",
                "default-5": "0px 0px 50px 0px #E5ECFF",
                "door": "0px 20px 50px 0px #10002b14",
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
