var gulp = require("gulp"),
    sass = require("gulp-sass"),
    rename = require("gulp-rename");

gulp.task("scss", function() {
  return gulp.src("./style/base.scss")
    .pipe(sass().on('error', sass.logError))
    .pipe(rename("style.css"))
    .pipe(gulp.dest("./"));
});

gulp.task("watch", function() {
  gulp.watch("./style/*", ["scss"]);
});

gulp.task("default", ["scss"]);
