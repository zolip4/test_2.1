var gulp = require('gulp');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
var concatCss = require('gulp-concat-css');
var concat = require('gulp-concat');
var minify = require('gulp-minify');

gulp.task('concat-css', function () {
    return gulp.src('./css/**/*.css')
        .pipe(concatCss("stylesheet.css"))
        .pipe(gulp.dest('./'));
});
gulp.task('min-css', async function () {
    gulp.src('./**/*.css')
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./'));
});
gulp.task('pack-js', function () {
    return gulp.src('./js/**/*.js')
        .pipe(concat('bundle.js'))
        .pipe(minify())
        .pipe(gulp.dest('./js'));
});