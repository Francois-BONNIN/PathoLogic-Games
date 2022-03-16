module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors:{
            'white': '#FFFFFF',
            'light-blue': '#CDEDFD',
            'night-blue': '#070719',
            'red': '#FF8484',
            'green': '#8AEA92',
        },
        fontFamily:{
            'montserrat':'Montserrat'
        },
        extend: {},
    },
    plugins: [require("daisyui")],

    daisyui: {
        styled: true,
        themes:
        [
            {
            mytheme: {
                primary: "#FF8484",
                "secondary": "#FFF",
                "accent": "#8AEA92",
                "neutral": "#11113B",
                "base-100": "#070719EB",
                "info": "#3ABFF8",
                "success": "#8AEA92",
                "warning": "#fde047",
                "error": "#FF8484",
            },
        }
        ],
        base: true,
        utils: true,
        logs: true,
        rtl: false,
        prefix: "",
        darkTheme: "dark",
    },
}
