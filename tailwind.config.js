const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
<<<<<<< HEAD
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js'
=======
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
>>>>>>> 5d76457bcdf236309bb5383d47a29e1b01b42406
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },
    experimental: {
        applyComplexClasses: true,
    },

<<<<<<< HEAD


    plugins: [
        require('@tailwindcss/forms'), require('flowbite/plugin')
    ],
    
        
    
=======
    plugins: [require("@tailwindcss/forms"), require("flowbite/plugin")],
>>>>>>> 5d76457bcdf236309bb5383d47a29e1b01b42406
};
