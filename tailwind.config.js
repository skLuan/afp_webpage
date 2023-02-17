const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                black: {
                    DEFAULT: "#1a1a1a",
                    true: "#000000",
                },
                grey: {
                    DEFAULT: "#4D4D4D",
                    light: "#898989",
                },
                yellow: {
                    DEFAULT: "#f5a832",
                },
                white: {
                    DEFAULT: "#f5f3f0",
                    bg: "#edebe8",
                    true: "#ffffff",
                },
            },
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                lemon: ["LemonMilk"],
                jost: ["Jost"],
            },
            backgroundImage: {
                'black-concrete-1': "url('/resources/img/bg.png')",
            },
            height: {
                11: "42px",
            },
            boxShadow: {
                afp: "inset -2px 2px 3px 0px rgba(0, 0, 0, 0.25)",
                btn: "-2px 2px 3px 0px rgba(0, 0, 0, 0.25)",
            },
            textShadow: {
                afp: "-2px 2px 3px rgba(0, 0, 0, 0.25)",
            },
        },
    },

    plugins: [require("@tailwindcss/forms"), require("tailwindcss-textshadow")],
};
