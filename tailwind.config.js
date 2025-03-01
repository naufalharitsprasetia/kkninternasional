/**
 * @format
 * @type {import('tailwindcss').Config}
 */

export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            colors: {
                primary: "#071739",
                secondary: "#4a6382",
                third: "#3282B8",
                fourth: "#0365A8",
                fifth: "#01131E",
                sixth: "#FF6614",
                seventh: "#77FFF6",
                dema: "#f08519",
            },
            fontFamily: {
                arabic: ["arabic-lpmq"],
                estetik: ["estetik"],
                trajan: ["trajan"],
                trajanBold: ["trajan-bold"],
                poppins: ["Poppins"],
                montserrat: ["Montserrat"],
                montaga: ["Montaga"],
                jakarta: ["Plus Jakarta Sans"],
            },
        },
    },
    plugins: [],
};
