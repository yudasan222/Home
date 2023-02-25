const { transform } = require("lodash");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            keyframes: {
                show: {
                    "0%": { opacity: "0", transform: "translateY(80px)" },
                    "50%": { opacity: "0.5" },
                    "100%": { opacity: "1", transform: "translateY(0px)" },
                },
                logo: {
                    "0%": { scale: "0.6", opacity: "0" },
                    "50%": { scale: "1.1", opacity: "0.5" },
                    "100%": { scale: "1", opacity: "1" },
                },
                text: {
                    "0%": { scale: "0.6", opacity: "0" },
                    "50%": { scale: "1.1", opacity: "0.5" },
                    "100%": { scale: "1", opacity: "1" },
                },
                wiggle: {
                    "0%, 100%": {
                        transform: "rotate(-3deg)",
                    },
                    "50%": {
                        transform: "rotate(3deg)",
                    },
                },
                back: {
                    "0%": { opacity: "0" },
                    "100%": { opacity: "1" },
                },
            },
            animation: {
                show: "show 1s linear",
                show2: "show 1.2s linear",
                show3: "show 1.3s linear",
                show4: "show 1.4s linear",
                show5: "show 1.5s linear",
                logo: "logo 1.4s ease-in-out",
                text: "text 1.4s ease-in-out",
                wiggle: "wiggle 1.2s linear infinite",
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
            },
        },
    },
    plugins: [],
};
