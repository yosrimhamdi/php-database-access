const browserSync = require("browser-sync").create();

browserSync.init({
  files: "*.php",
  notify: false,
});
