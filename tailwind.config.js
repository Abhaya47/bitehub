/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.jsx",
    "./resources/js/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#EF4444',
        dark: {
          50: '#F9FAFB',
          900: '#111827',
          800: '#1F2937',
        }
      },
      boxShadow: {
        glow: '0 0 40px rgba(239, 68, 68, 0.4)',
        'glow-lg': '0 0 50px rgba(239, 68, 68, 0.6)',
      },
      backgroundImage: {
        'gradient-dark': 'linear-gradient(to bottom, rgb(15, 23, 42), rgb(30, 41, 59), rgb(15, 23, 42))',
      },
    },
  },
  plugins: [],
}