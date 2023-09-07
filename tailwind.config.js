/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: 'class',
  theme: {
    extend: {
        container: {
            center: 'true',
        },
        colors: {
            'dark-theme': 'var(--my-text-dark-theme)',
            'white-theme': 'var(--my-text-white-theme)'
        },
        backgroundColor: {
            'dark-theme': 'var(--my-background-dark-theme)',
        },
        fontFamily: {
            'test': ['Rubik Iso','cursive']
        }
    },
  },
  plugins: [],
}

