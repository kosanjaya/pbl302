/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.html"],
  theme: {
    fontFamily: {
      sans: ["Poppins", "sans-serif", "system-ui"],
    },
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "4rem",
        xl: "5rem",
        "2xl": "6rem",
      },
    },
    extend: {
      spacing: {
        "34px": "34px",
        "40px": "40px",
        "50px": "50px",
      },
      colors: {
        primary: "#18D1CB",
        secondary: "#1B1B1B",
        white: "#EBF0F9",
      },
    },
  },
  plugins: [require("tailwind-scrollbar")],
};
