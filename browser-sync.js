const browserSync = require("browser-sync").create();

browserSync.init({
  files: "index.php",
  notify: false,
});
