module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {backgroundImage: (theme) => ({
        dunes: "url('../public/images/backrounds.jpge')",
      }),},
  },
  plugins: [],
}
