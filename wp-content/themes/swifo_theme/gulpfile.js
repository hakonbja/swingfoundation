'use strict';

var gulp = require('gulp'),
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

gulp.task('serve', function() {
  browserSync.init({
    proxy: "http://localhost/swingfoundation/",
    browser: "chrome"
  });
  gulp.watch("assets/css/*.scss", ['sass']);
  gulp.watch('./**/*.php').on('change', browserSync.reload);
  gulp.watch('partials/*.php').on('change', browserSync.reload);
  gulp.watch("assets/js/**/*.js").on('change', browserSync.reload);
});

gulp.task('default', ['serve']);
