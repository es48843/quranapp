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
