// Plugins
var gulp = require('gulp'),
	sass = require('gulp-ruby-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	cleancss = require('gulp-clean-css'),
	rename = require('gulp-rename'),
	notify = require('gulp-notify'),
	cache = require('gulp-cache')

// Styles
gulp.task('styles', function() {
	return sass('scss/style.scss', { style: 'expanded' })
		.pipe(autoprefixer('last 3 versions'))
		.pipe(gulp.dest(''))
		.pipe(rename({suffix: '.min'}))
		.pipe(cleancss())
		.pipe(gulp.dest(''))
		.pipe(notify({ message: 'Styles task complete' }));
});

// Watch
gulp.task('watch', function() {
	// Watch .scss files
	gulp.watch('scss/**/*.scss', ['styles']);
});
