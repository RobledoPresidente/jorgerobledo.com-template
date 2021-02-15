var gulp = require("gulp");
var concat = require("gulp-concat");
var sass = require("gulp-sass");
var minifyCss = require("gulp-minify-css");
var rename = require("gulp-rename");
var gulp = require("gulp");
var connect = require("gulp-connect");
var open = require("gulp-open");

var paths = {
  sass: ["./scss/**/*.scss"],
};

gulp.task("sass", (done) => {
  gulp
    .src("./scss/*.scss")
    .pipe(sass())
    .on("error", sass.logError)
    .pipe(gulp.dest("./app/css/"))
    .pipe(
      minifyCss({
        keepSpecialComments: 0,
      })
    )
    .pipe(rename({ extname: ".min.css" }))
    .pipe(gulp.dest("./app/css/"))
    .on("end", done);
});

gulp.task("sass-watch", () => {
  gulp.watch(paths.sass, ["sass"]);
});

gulp.task("connect", () => {
  connect.server({
    root: "app",
    livereload: true,
    port: 8080,
  });
});

gulp.task("assets", () => {
  gulp
    .src([
      "./app/**/*.{html,js}",
      "./app/css/**/*.css",
      "./app/img/**/*.{jpg,jpeg,gif,png}",
    ])
    .pipe(connect.reload());
});

gulp.task("watch", () => {
  gulp.watch(
    [
      "./app/**/*.{html,js}",
      "./app/css/**/*.css",
      "./app/img/**/*.{jpg,jpeg,gif,png}",
    ],
    ["assets"]
  );
});

gulp.task("open", () => {
  gulp.src("./app/index.html").pipe(open({ uri: "http://localhost:8080" }));
});

gulp.task(
  "default",
  gulp.series(["connect", "watch", "sass", "sass-watch", "open"])
);

var concat = require("gulp-concat");
var rename = require("gulp-rename");
var uglify = require("gulp-uglify");

//script paths
var jsFiles = [
    "./app/lib/alertifyjs/dist/js/alertify.js",
    "./app/lib/tether/dist/js/tether.min.js",
    "./app/lib/bootstrap/dist/js/bootstrap.min.js",
    "./app/lib/spin.js/spin.min.js",
    "./app/lib/spin.js/jquery.spin.js",
    "./app/js/common.js",
    "./app/js/header.js",
  ],
  jsDest = "./app/js";

gulp.task("scripts", () => {
  return gulp
    .src(jsFiles)
    .pipe(concat("scripts.js"))
    .pipe(gulp.dest(jsDest))
    .pipe(rename("scripts.min.js"))
    .pipe(uglify())
    .pipe(gulp.dest(jsDest));
});
