var config = require('./gulpfile-config.json');
var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sourcemaps = require('gulp-sourcemaps');
var sass = require('gulp-sass');
var autoprefix = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var browserSync = require('browser-sync').create();

// CSS
gulp.task('css', function() {
  return gulp.src(config.css.src)
  .pipe(plumber())
  .pipe(sourcemaps.init())
  .pipe(sass({outputStyle: 'compressed'}))
  .pipe(autoprefix('last 2 versions', '> 1%', 'ie 9', 'ie 10'))
  .pipe(sourcemaps.write('.'))
  .pipe(gulp.dest(config.css.dest))
  .pipe(browserSync.reload({
    stream: true,
  }));
});

// JS
gulp.task('js', function() {
  return gulp.src(config.js.src)
  .pipe(plumber())
  .pipe(sourcemaps.init())
  .pipe(concat('app.min.js'))
  .pipe(uglify())
  .pipe(sourcemaps.write('.'))
  .pipe(gulp.dest(config.js.dest));
});

// Watch
gulp.task('watch', ['css', 'js'], function() {
  /*
  browserSync.init({
    proxy: config.browsersync.proxy
  });
  */
  gulp.watch(config.css.src, ['css']);
  gulp.watch(config.js.src, ['js']);
  //gulp.watch(config.file.src).on('change', browserSync.reload);
});