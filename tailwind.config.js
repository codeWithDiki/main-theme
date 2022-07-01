const colors = require('tailwindcss/colors')

module.exports = {
    mode : 'jit',
    darkMode: 'class',
    content: [
        './resources/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/usernotnull/tall-toasts/config/**/*.php',
        './vendor/usernotnull/tall-toasts/resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: {
                    DEFAULT : "#5a49e3",
                    ... colors.violet,
                    "500" : "#5a49e3"
                },
                warning: colors.amber,
                success: colors.emerald

            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('tailwind-scrollbar')
    ],
}
