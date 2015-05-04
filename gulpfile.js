var gulp = require('gulp');
gulp.task('default', function(){
    console.log('default gulp task...')
});

var compass = require('gulp-compass');
 
gulp.task('compass', function() {
  gulp.src('./css/sass/*.scss')
    .pipe(compass({
      config_file: './config.rb',
      css: 'stylesheets',
      sass: 'scss'
    }))
    .pipe(gulp.dest('css'));
});

var jshint = require('gulp-jshint');

var concat = require('gulp-concat');

gulp.task('js', function () {
	gulp.src('js/src/*.js')
	.pipe(jshint())
	.pipe(jshint.reporter('fail'))
	.pipe(concat('script.js'))
	.pipe(gulp.dest('js'));
});
