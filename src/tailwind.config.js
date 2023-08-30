/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                'gray-750': '#28323E',
                'primary': '#52AE69',
                'primary-soft': '#DCF3ED',
                'bg-light': '#ECF0F3',
                'secondary': '#EAC075',
            },
            transitionProperty: {
                width: "width",
            }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
    darkMode: 'class',
}
