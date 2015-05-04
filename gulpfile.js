// Gulp FTW //

var gulp = require('gulp');

var compass = require('gulp-compass');

var jshint = require('gulp-jshint');

var concat = require('gulp-concat');

var uglify = require('gulp-uglify'); 

var strip = require('gulp-strip-comments');

gulp.task('compass', function() {
  gulp.src('./css/sass/*.scss')
    .pipe(compass({
      config_file: './css/sass/config.rb',
      css: '.css',
      sass: './css/sass'
    }))
    .pipe(gulp.dest('css'));
});

gulp.task('js', function () {
	gulp.src('js/src/*.js')
	.pipe(jshint())
	.pipe(jshint.reporter('fail'))
	.pipe(concat('script.js'))
  .pipe(uglify())
	.pipe(gulp.dest('js'));
});

gulp.task('watch', function() {
  gulp.watch('css/sass/*.scss', ['compass']);
  gulp.watch('js/src/*.js', ['js']);
});

gulp.task('concatenate', function() {
  return gulp.src(['./js/ext/*', './js/script.js'])
    .pipe(concat('output.js'))
    .pipe(strip())
    .pipe(gulp.dest('./js/'));
});

gulp.task('default', ['compass', 'js', 'concatenate','watch']);
