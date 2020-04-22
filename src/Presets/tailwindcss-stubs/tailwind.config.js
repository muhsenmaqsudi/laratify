module.exports = {
    theme: {
        extend: {}
    },
    variants: {
        backgroundColor: ['responsive', 'hover', 'focus', 'active']
    },
    plugins: [
        require('@tailwindcss/custom-forms')
    ]
}