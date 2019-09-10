const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();
const autoprefixer = require('gulp-autoprefixer');

// compile scss into css
function style() {
  // 1. locate scss file(s)
  return gulp.src('./assets/css/style.scss')
  // 2. pass that file through sass compiler
      .pipe(sass().on('error', sass.logError))
  // 2.1 autoprefix
      .pipe(autoprefixer({}))
  // 3. where do I save the compiled CSS
      .pipe(gulp.dest('./'))
  // 4. stream changes to all browsers
      .pipe(browserSync.stream());
}

function watch() {
  browserSync.init({
    proxy: 'http://localhost/swingfoundation/',
    browser: 'chrome',
  });
  gulp.watch('./assets/css/*.scss', style);
  gulp.watch('./**/*.php').on('change', browserSync.reload);
  gulp.watch('./assets/js/*.js').on('change', browserSync.reload);
}

exports.style = style;
exports.default = watch;

/*
const gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync').create(),
    cssnano = require('gulp-cssnano'),
    cache = require('gulp-cache');

  //Supported browsers for cssnano Autoprefix
var supported = [
  'last 2 versions',
  'safari >= 8',
  'ie >= 10',
  'ff >= 20',
  'ios 6',
  'android 4'
];

gulp.task('hello', function() {
  console.log('Hello, World!');
});

gulp.task('sass', function() {
  gulp.src('assets/css/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cssnano({
      autoprefixer: {browsers: supported, add: true}
    }))
    .pipe(gulp.dest(""))
    .pipe(browserSync.stream());
});
*/

// gulp.task('serve', function() {
//   browserSync.init({
//     proxy: "http://localhost/swingfoundation/",
//     browser: "chrome"
//   });
//   gulp.watch("assets/css/*.scss", ['sass']);
//   gulp.watch('./**/*.php').on('change', browserSync.reload);
//   gulp.watch('partials/*.php').on('change', browserSync.reload);
//   gulp.watch("assets/js/**/*.js").on('change', browserSync.reload);
// });

// gulp.task('default', ['serve']);
